<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;


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

    public function emptyCart() {
        return view ('layouts.empty-cart');
    }

    public function getCartDetail()
    {
        //var_dump(1);die;
        $user = Auth::user();
        $cart = session()->get('cart');

        if (!$cart) {
            $cart = json_decode(Cookie::get('cart_' . $user->id), true);
        }

        if (is_null($cart)) {
            $cart = [];
        }



        //var_dump($cart);die;

        // dd($cart);
//         $userCart = DB::select(DB::raw("
//         select DISTINCT u.*, '123' as id, 'hghghgfhg' as user_address, p.name as product_name, p.id as product_id, p.image as product_image, p.sell_price as product_sell_price, op.product_quantity as product_quantity
// from users as u
//             join orders as o on u.id = o.user_id
//             join order_product as op on o.id = op.order_id
//             join products as p on op.product_id = p.id
//             where u.id = {$user->id}"));

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
}
