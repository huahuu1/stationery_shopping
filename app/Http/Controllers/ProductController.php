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
        //nhan tat ca tham so vao mang product
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'image' => 'image',
            'sell_price' => 'required',
            'category_id' => 'required'
        ]);
        $product = $request->all();
        //xu ly upload hinh anh vao thu muc
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            if($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('product/create')->with('loi', 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = 'uploads/products/'.time().$file->getClientOriginalName();
            $file->move(public_path('uploads/products'), $imageName);
        } else {
            $imageName = null;
        }
        $p = new Product($product);
        $p->image = $imageName;
        $p->save();

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
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'image' => 'image',
            'sell_price' => 'required',
            'category_id' => 'required'
        ]);

        $product = $request->all();
        $product = Product::find($id);
        //xu ly upload hinh anh vao thu muc
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            if($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect(route('products.edit'))->with('loi', 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = 'uploads/products/'.time().$file->getClientOriginalName();
            $file->move('uploads/products/', $imageName);
        }

        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->image = $imageName;
        $product->description = $request->description;
        $product->sell_price = $request->sell_price;
        $product->category_id = $request->category_id;
        $product->supplier_id = $request->supplier_id;
        $product->status = $request->status;

        $product->save();

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

    public function cart()
    {
        return view('layouts.cart');
    }

    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);
        if(!$product) {
            abort(404);
        }
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                $id => [
                    "id" => $product->id,
                    "image" => $product->image,
                    "name" => $product->name,
                    "sell_price" => $product->sell_price,
                    "quantity" => $request->quantity
                ]
            ];

            session()->put('cart', $cart);

            return redirect()->route('carts.detail', $id);
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity'] += $request->quantity;

            session()->put('cart', $cart);


            return redirect()->route('carts.detail', $id);
        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "id" => $product->id,
            "image" => $product->image,
            "name" => $product->name,
            "sell_price" => $product->sell_price,
            "quantity" => $request->quantity
        ];

        session()->put('cart', $cart);

        // $htmlCart = view('_header_cart')->render();

        // return response()->json(['msg' => 'Product added to cart successfully!', 'data' => $htmlCart]);
        return redirect()->route('carts.detail', $id);
    }

    /**
     * getCartTotal
     *
     *
     * @return float|int
     */
    private function getCartTotal()
    {
        $total = 0;

        $cart = session()->get('cart');

        foreach($cart as $id => $details) {
            $total += $details['sell_price'] * $details['quantity'];
        }

        return number_format($total);
    }

    private function getCartQuantity()
    {
        $total = 0;

        $cart = session()->get('cart');

        foreach($cart as $id => $details) {
            $total += $details['quantity'];
        }

        return $total;
    }

    public function updateCart(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);

            $total = $this->getCartTotal();

            $quantity = $this->getCartQuantity();

            $htmlCart = view('_header_cart')->render();

            return response()->json(['msg' => 'Cart updated successfully', 'data' => $htmlCart, 'total' => $total, 'quantity' => $quantity]);

            //session()->flash('success', 'Cart updated successfully');
        }
    }

    public function removeCart(Request $request)
    {
        if(session()->get('cart') == null) {
            return redirect()->route('cart.empty');
        }
        if($request->id) {

            $cart = session()->get('cart');


            if(isset($cart[$request->id])) {

                // xoa trong session
                unset($cart[$request->id]);

                session()->put('cart', $cart);

                // xoa trong db
                DB::table('order_product')->where('product_id', $request->id)->delete();
                DB::table('order_product')->where('order_id', $request->id)->delete();

            }

            $total = $this->getCartTotal();

            $quantity = $this->getCartQuantity();

            $htmlCart = view('_header_cart')->render();

            return response()->json(['msg' => 'Product removed successfully', 'data' => $htmlCart, 'total' => $total, 'quantity' => $quantity]);

            //session()->flash('success', 'Product removed successfully');
        }
    }

}
