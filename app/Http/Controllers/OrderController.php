<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Repositories\Order\OrderInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Access\Gate;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\MassDestroyOrderRequest;

class OrderController extends Controller
{
    public $model;
    public function __construct(OrderInterface $orders) {
        $this->model = $orders;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $pageSize = $request->pageSize ?? 5;
        $path = '';
        if(!$keyword){
            $path .= "?pageSize=$pageSize";
            $orders = Order::orderBy('id', 'ASC')->paginate($pageSize);
        } else {
            $path .= "?pageSize=$pageSize&keyword=$keyword";
            $orders = Order::where('address', 'like', '%'. $keyword .'%')
                                // ->orWhere('description', 'like', '%'. $keyword .'%')
                                ->orderBy('id', 'ASC')
                                ->paginate($pageSize);
        }

        $orders->withPath($path);

        return view('admin.orders.index', compact('orders', 'keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('admin.orders.create', compact('products'));
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
            'address' => 'required',
        ]);
        $order = Order::create($request->all());
        $products = $request->input('products', []);
        $quantities = $request->input('quantities', []);
        for ($product=0; $product < count($products); $product++) {
            if ($products[$product] != '') {
                $order->products()->attach($products[$product], ['product_quantity' => $quantities[$product]]);
            }
        }
        // $order = new Order($order);
        // $order->save();

        return redirect()->route('orders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order, Request $request, $id)
    {
        $order = Order::find($id);
        return view('admin.orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order, $id)
    {
        $products = Product::all();
        // dd($order->products);
        $order->load('products');
        $od = Order::find($id);
        // dd($order);

        return view('admin.orders.edit', compact('products', 'order', 'od'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order, $id)
    {
        $order= Order::find($request->id);

        $order->status = $request->status;
        $order->address = $request->address;
        $order->update();
        $order->products()->detach();
        $products = $request->input('products', []);
        $quantities = $request->input('quantities', []);
        for ($product=0; $product < count($products); $product++) {
            if ($products[$product] != '') {
                $order->products()->attach($products[$product], ['product_quantity' => $quantities[$product]]);
            }
        }

        return redirect()->route('orders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return back();
    }

    public function removeProductFromCart(Order $order, $id, $product_id)
    {
        DB::table('order_product')->where('product_id', $product_id)->delete();
        return back();
    }

}
