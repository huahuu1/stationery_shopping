<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController  extends Controller
{
    // 1. Eloquent(ORM)
    // 2. Query Builder BD('products')
    // 3. Raw query ('select * from products where id > 20')
    public function index()
    {
        $products = Product::all();
        
        foreach($products as $product){
            $cate = Category::find($product->category_id);
            $product->cate_name = $cate->name;
        }
        // dd($products);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }
    public function store(Request $request)
    {
        // Eloquent 
        $product = new Product();

        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->sku = 'GG'.time();
        $product->description = $request->description;
        $product->short_description = $request->short_description;
        $product->list_price = $request->list_price;
        $product->sell_price = $request->sell_price;
        $product->supplier_id = $request->supplier_id;
        $product->category_id = $request->category_id;
        $product->image = 'https://static.toiimg.com/photo/71335454.cms';
        $product->save();
        return redirect()->route('products.index');

    }
}
