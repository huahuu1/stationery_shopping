<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
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
}
