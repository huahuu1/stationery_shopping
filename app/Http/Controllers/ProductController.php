<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Repositories\Product\ProductInterface;
use App\Models\Category;
use Illuminate\Support\Facades\DB;


class ProductController  extends Controller
{


    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $pageSize = $request->pageSize ?? 5;

        $path = '';
        if(!$keyword){
            $path .= "?pageSize=$pageSize";
            $products = Product::orderBy('id', 'DESC')->paginate($pageSize);
        } else {
            $path .= "?pageSize=$pageSize&keyword=$keyword";
            $products = Product::where('name', 'like', "%$keyword%")
                                ->orWhere('description', 'like', "%$keyword%")
                                ->orderBy('id', 'DESC')
                                ->paginate($pageSize);
        }

        $products->withPath($path);

        foreach($products as $product){
            $cate = Category::find($product->category_id);
            if($cate){
                $product->cate_name = $cate->name;
            }
        }
        return view('admin.products.index', compact('products', 'keyword'));
    }

    public function create()
    {
        return view('admin.products.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'sell_price' => 'required',
            'description' => 'required',
            'category_id' => 'required'
        ]);
        // Eloquent
        $product = new Product();

        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->description = $request->description;
        $product->short_description = $request->short_description;
        $product->list_price = $request->list_price;
        $product->sell_price = $request->sell_price;
        $product->supplier_id = $request->supplier_id;
        $product->category_id = $request->category_id;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = 'uploads/products/'.time().$file->getClientOriginalName();
            request()->image->move(public_path('uploads/products'), $fileName);
            $product->image = $fileName;
        }

        $product->save();
        return redirect()->route('products.index');

    }
    public function show($id)
    {
        // Eloquent way
        $product = Product::find($id);


        return view('admin.products.show', compact('product'));
    }
}
