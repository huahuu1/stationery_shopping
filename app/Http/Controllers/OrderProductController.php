<?php

namespace App\Http\Controllers;

use App\Models\Order_Product;
use Illuminate\Http\Request;
use App\Repositories\Order_Product\Order_ProductInterface;
use Illuminate\Support\Facades\DB;

class OrderProductController extends Controller
{
    public $model;
    public function __construct(Order_ProductInterface $order_product) {
        $this->model = $order_product;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order_products = $this->model->getAll();
        return view('admin.order_product.index', compact('order_products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.order_product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_quantity' => 'required',
        ]);
        $order_product = $request->all();

        $order_product = new Order_Product($order_product);
        $order_product->save();

        return redirect()->route('order_products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order_Product  $order_product
     * @return \Illuminate\Http\Response
     */
    public function show(Order_product $order_product, Request $request, $id)
    {
        // $order_product = order_product::all($id);
        // foreach($order_product as $item) {
        //     dd($item->order_id);
        // }
        // dd($order_product->order_id);
        // $orders = $order_product->getProductsData($order_product->product_id);
        // dd($order_product->order_id);
        // $product_order = DB::table('order_product')->where('order_id', $order_product->order_id)->get();
        // dd($product_order);
        // foreach($products as $key=> $product){
        //     $product->quantity = $product_order[$key]->product_quantity;
        // }
        // return view('admin.order_product.show', compact('order_product', 'product_order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order_Product  $order_product
     * @return \Illuminate\Http\Response
     */
    public function edit(Order_product $order_product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order_Product  $order_product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order_product $order_product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order_Product  $order_product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->model->delete($id);
        return redirect(route('orders.index'));
    }
}
