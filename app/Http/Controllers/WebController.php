<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    //public
    public function index()
    {
        $products = Product::paginate(6);
        return view('web.home-page', compact('products'));
    }

    public function addToCart(Request $request)
    {

        $product = Product::find($request->id);

        $cart = new Cart();
        $cart->product_id = $request->id;
        $cart->user_id = 1;
        $cart->product_name = $product->name;
        $cart->product_image = $product->image;
        $cart->product_price = $product->sell_price;
        $cart->quantity = $request->quantity;
        $cart->save();
        // dd('add to cart success', $cart);
        return redirect()->route('carts.detail');
        // return view('web.cart');
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
        // dd($slug);
        $pageSize = $request->pageSize ?? 12;
        $category = Category::where('slug', $slug)->first();
        $products = Product::where('category_id', $category->id)->paginate($pageSize);
        // dd($products);
        $slug = $category->name;

        $breadcrums = "<div class='category-page-title'>
                            <div class='nav'><a href='#'>Home</a><span class='divider'>/</span><a href='#'>$slug</a></div>
                        </div>";
        // $breadcrums = "<nav aria-label='breadcrumb'>
        //         <ol class='breadcrumb'>
        //             <li class='breadcrumb-item'><a href='/'>Home</a></li>
        //             <li class='breadcrumb-item active' aria-current='page'>$slug</li>
        //         </ol>
        //         </nav>";

        return view('web.products.categories', compact('products', 'breadcrums'));
    }

    public function getProducts()
    {
       $products = Product::all();
       return view('web.products', compact('products'));
    }

    public function getProductDetail($item)
    {
        $product = Product::where('slug', $item)->first();
        // dd($product);
        return view('web.products.detail', compact('product'));
    }

    public function getCartDetail()
    {
        $user = Auth::user();
        $carts = $user->carts;
        return view('web.cart', compact('user', 'carts'));
    }
}
