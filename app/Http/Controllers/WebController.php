<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;

class WebController extends Controller
{
    //public
    public function index()
    {

        
        $products = Product::paginate(6);
        return view('web.home', compact('products'));
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
    public function getProductsByCategoryId($slug)
    {
        // dd($slug);
        $pageSize = $request->pageSize ?? 12;
        $category = Category::where('slug', $slug)->first();
        $products = Product::where('category_id', $category->id)->paginate($pageSize);
        // dd($products);
        $slug = $category->name;
        $breadcrums = "<nav aria-label='breadcrumb'>
                <ol class='breadcrumb'>
                    <li class='breadcrumb-item'><a href='/'>Home</a></li>
                    <li class='breadcrumb-item active' aria-current='page'>$slug</li>
                </ol>
                </nav>";

        return view('web.products.list_by_category', compact('products', 'breadcrums'));
    }

    public function getProductDetail($item)
    {
        $product = Product::where('slug', $item)->first();
        // dd($product);
        return view('web.products.detail', compact('product'));
    }
}
