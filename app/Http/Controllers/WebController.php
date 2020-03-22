<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;

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

        return view('layouts.categories-page', compact('products', 'breadcrums'));
    }

    public function getProductsByCategoryId(Request $request, $slug)
    {
        $pageSize = $request->pageSize ?? 12;
        $category = Category::where('slug', $slug)->first();
        $products = Product::where('category_id', $category->id)
                                    ->orWhere('sub_category_id', $category->id)
                                    ->paginate($pageSize);
        $slug = $category->name;

        $breadcrums = "<div class='category-page-title'>
                            <div class='nav'><a href='/'>Home</a><span class='divider'>/</span><a href='#'>$slug</a></div>
                        </div>";
        return view('layouts.categories-page', compact('products', 'breadcrums'));
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
        return view('layouts.product-page', compact('product', 'breadcrums'));
    }

    public function getSimiliarProducts(Request $request, $slug)
    {
        $pageSize = $request->pageSize ?? 12;
        $category = Category::where('slug', $slug)->first();
        $products = Product::where('category_id', $category->id)
                                    ->orWhere('sub_category_id', $category->id)
                                    ->paginate($pageSize);
        $slug = $category->name;
        return view('web.products.product-detail', compact('products'));
    }

    // public function getCartDetail()
    // {
    //     $user = Auth::user();
    //     $cart = session('cart');

    //     if(!$cart || $cart == null) {
    //         return view ('layouts.empty-cart');
    //     }
    //     return view('layouts.cart', compact('user', 'cart'));
    // }

    // public function emptyCart() {
    //     return view ('layouts.empty-cart');
    // }

    public function getCartDetail()
    {
        //var_dump(1);die;
        $user = Auth::user();
        $cart = session()->get('cart');

        if (!$cart) {
            $cart = json_decode(Cookie::get('cart_' . $user->id), true);
            if (!$cart) {
                return view ('layouts.empty-cart');
            }
        }

        // if (is_null($cart)) {
        //     $cart = [];
        // }

        if (!$cart) {
            return view ('layouts.empty-cart');
        }
        return view('layouts.cart', compact('user', 'cart'));
    }

    public function placeNewOrder(Request $request)
    {
        $user = Auth::user();
        $total = 0;
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
        return redirect()->route('web.index');
    }

    public function editUser($id) {
        $user = Auth::user();
        return view('layouts.edit-user-page');
    }

    // public function edit(User $user, $id)
    // {
    //     $user = User::find($id);
    //     return view('admin.users.edit', compact('user'));
    // }

    public function updateUser(User $user, Request $request, $id)
    {
        $user = User::find($id);
        // $user = Auth::user()::find($id);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'newPassword' => 'required|min:8|confirmed',
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt(request('newPassword'));
        $user->save();
        return redirect()->route('users.index');
    }
}
