<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Repositories\Product\ProductInterface;
use App\Models\Category;
use Illuminate\Support\Facades\DB;


class ProductController  extends Controller
{
    public $model;
    public function __construct(ProductInterface $products){
        $this->model = $products;
    }

    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $pageSize = $request->pageSize ?? 5;

        $path = '';
        if(!$keyword){
            $path .= "?pageSize=$pageSize";
            $products = Product::orderBy('id', 'ASC')->paginate($pageSize);
        } else {
            $path .= "?pageSize=$pageSize&keyword=$keyword";
            $products = Product::where('name', 'like', '%'. $keyword .'%')
                                // ->orWhere('description', 'like', '%'. $keyword .'%')
                                ->orderBy('id', 'ASC')
                                ->paginate($pageSize);
        }

        $products->withPath($path);

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
            'slug' => 'required',
            'sell_price' => 'required',
            'category_id' => 'required',
            'Product_id' => 'required',
        ]);
        // Eloquent
        $product = new Product();

        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->description = $request->description;
        $product->sell_price = $request->sell_price;
        $product->Product_id = $request->Product_id;
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, $id)
    {
        $products = $this->model->getAll();
        $product = $this->model->getById($id);
        return view('admin.products.edit', compact('products', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = $request->all();
        //xu ly upload hinh anh vao thu muc
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            if($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect(route('products.edit'))->with('loi', 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move('uploads/products/', $imageName);
        } else { // khong upload hinh moi giu lai hinh cu
            $p = Product::find($id);
            $imageName = $p->image;
        }
        $p = Product::find($id);
        $p->name = $request->get('name');
        $p->slug = $request->get('slug');
        $p->image = $imageName;
        $p->description = $request->get('description');
        $p->sell_price = $request->get('sell_price');
        $p->category_id = $request->get('category_id');
        $p->supplier_id = $request->get('supplier_id');
        $p->status = $request->get('status');
        $p->save();

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->model->delete($id);
        return redirect(route('products.index'));
    }
}
