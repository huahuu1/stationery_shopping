<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use App\User;

class WebController extends Controller
{
    //public
    public function index()
    {
        $products = Product::paginate(6);
        return view('web.home-page', compact('products'));
    }

    public function getCategories(Request $request) {
        $pageSize = $request->pageSize ?? 12;
        $products = DB::table('products')->paginate($pageSize);
        $slug = 'Categories';
        $breadcrums = "<div class='category-page-title'>
                            <div class='nav'><a href='/'>Home</a><span class='divider'>/</span><a href='#'>$slug</a></div>
                        </div>";

        return view('web.products.categories', compact('products', 'breadcrums', 'slug'));
    }

    public function getProductsByCategoryId(Request $request, $slug)
    {
        $pageSize = $request->pageSize ?? 12;
        $category = Category::where('slug', $slug)->first();
        $products = Product::where('category_id', $category->id)
                                ->orWhere('sub_category_id', $category->id)
                                ->where('status', 1)
                                ->paginate($pageSize);
        $slug = $category->name;

        $breadcrums = "<div class='category-page-title'>
                            <div class='nav'><a href='/'>Home</a><span class='divider'>/</span><a href='#'>$slug</a></div>
                        </div>";
        return view('web.products.categories', compact('products', 'breadcrums', 'slug'));
    }

    public function getProducts()
    {
       $products = Product::all();
       return view('web.products', compact('products'));
    }

    public function getProductDetail($item)
    {
        $product = Product::where('slug', $item)->first();
        $slug = $product->name;
        $breadcrums = "<div class='category-page-title'>
                            <div class='nav'><a href='/'>Home</a><span class='divider'>/</span><a href='#'>$slug</a></div>
                        </div>";
        return view('web.products.product-detail', compact('product', 'breadcrums', 'slug'));
    }

    public function getSimiliarProducts(Request $request, $slug)
    {
        $pageSize = $request->pageSize ?? 12;
        $category = Category::where('slug', $slug)->first();
        $products = Product::where('category_id', $category->id)
                                    ->where('status', 1)
                                    ->orWhere('sub_category_id', $category->id)
                                    ->paginate($pageSize);
        $slug = $category->name;
        return view('web.products.product-detail', compact('products'));
    }

    public function getCartDetail()
    {
        $user = Auth::user();
        $cart = session()->get('cart');
        if (!$cart) {
            $cart = json_decode(Cookie::get('cart_' . $user->id), true);
        }
        // session()->put('countCart', count($cart));
        if (!$cart) {
            return view ('web.empty-cart');
        }

        // var_dump($cart); die;
        return view('web.cart', compact('user', 'cart'));
    }

    public function placeNewOrder(Request $request)
    {
        $user = Auth::user();
        $cart = session()->get('cart');
        if (!$cart) {
            $cart = json_decode(Cookie::get('cart_' . $user->id), true);
        }
        $order = new Order();
        $order->user_id = $user->id;
        $order->address = $request->input('address');
        $order->save();

        foreach($cart as $item){
            $order_id = $order->id;
            $product_order = DB::table('order_product')->insert([
                'order_id' =>  $order_id,
                'product_id' => $item['id'],
                'product_quantity' => $item['quantity']
            ]);
        }
        Session::forget('cart');

        return redirect()->route('web.index')->withCookie(Cookie::forget('cart_' . $user->id));
    }

    public function editUser() {
        return view('web.edit-user');
    }

    public function updateUserInfo(User $user, Request $request, $id)
    {
        $user = User::find($id);
        $request->validate(
            [
            'name' => array(
                'required',
                'unique:users,name,'.$user->id,
                'regex:/^(?=.{5,10}$)[a-zA-Z]+(\d*[a-zA-Z]*)*$/',
            ),
            'email' => array(
                'required',
                'unique:users,email,'.$user->id,
                'regex:/^(?=.{15,40}$)[a-zA-Z]+\d*((_|-|\.)?[a-zA-Z0-9])*@(\d{0,4}[a-zA-Z]{1,5}\d{0,4}){2}(\.[a-zA-Z]{2,4}){1,2}$/',
            ),
            'phone' => array(
                'required',
                'regex:/^[0-9]{10}$/',
            ),
            ],
            [
                // 'unique' => ':attribute has already existed'
                'name.required' => 'User Name is required.',
                'name.unique' => 'User Name has already existed.',
                'name.regex' => 'User Name must consist of 5 to 10 alphanumeric characters and begin with an alphabet character.',
                'email.required' => 'Email is required.',
                'email.unique' => 'Email has already existed.',
                'email.regex' => 'Email is a string of 15 to 40 alphanumeric characters that is formatted like this: a-1.b_c@247xyz.com.vn.',
                'phone.required' => 'Tel is required.',
                'phone.regex' => 'Tel is a string of 10 numeric characters.',
            ],
    );
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();
        return redirect()->route('web.index');
    }

    public function updateUserPassword(User $user, Request $request, $id)
    {
        $user = User::find($id);
        $request->validate([
            'oldPassword' => ['required', function ($attribute, $value, $fail) use ($user) {
                if (!Hash::check($value, $user->password)) {
                    return $fail(__('The old password is incorrect.'));
                }
            }],
            'newPassword' => 'min:8|max:20|different:oldPassword|required',
            'newPassword_confirmation' => 'min:8|max:20|required|same:newPassword',
        ]);

        $user->password = bcrypt(request('newPassword'));
        $user->save();

        return redirect()->route('web.index');
    }


}
