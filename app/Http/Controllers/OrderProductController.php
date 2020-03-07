<?php

namespace App\Http\Controllers;

use App\Models\Order_product;
use Illuminate\Http\Request;
use App\Repositories\Order_product\Order_ProductInterface;

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
        $order_product = $this->model->getAll();
        return view('admin.order_product.index', compact('order_product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order_product  $order_product
     * @return \Illuminate\Http\Response
     */
    public function show(Order_product $order_product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order_product  $order_product
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
     * @param  \App\Models\Order_product  $order_product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order_product $order_product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order_product  $order_product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order_product $order_product)
    {
        //
    }
}
