@extends('layouts.admin')

@section('title', 'Order Detail')

@section('page_title')
<p>Order Detail</p>
@endsection

@section('breadcrumb', 'Order Detail')

@section('content')
<div class="row">
    <div class="col-md-12 table-responsive">
        <table class="table table-bordered table-valign-middle">
            <thead>
                <tr class="text-center">
                    <th>STT</th>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Functions</th>
                </tr>

            </thead>
            <tbody>
               @foreach ($order->products as $item)
                   <tr class="text-center">
                       <td>{{$loop->iteration}}</td>
                       <td><a href="{{route('products.show', $item->id)}}"><img width="80" src="{{asset($item->image)}}" alt=""></a></td>
                       <td>{{Str::limit($item->name, 40)}}</td>
                       <td>{{number_format($item->pivot->product_quantity)}}</td>
                       <td>{{number_format($item->sell_price) . ' đ'}}</td>
                       <td style="width: 24%;" class="text-center">
                            <a class="btn btn-info btn-sm" href="{{route('orders.edit', $order->id)}}"><i class="fas fa-pencil-alt"></i> Edit</a>

                            <form class="d-inline-block" action="{{ route('orders.removeProductFromCart', [$order->id, $item->id]) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                   </tr>
               @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3" class="text-center">Total:</th>
                    <th class="text-center">
                        @php
                            $qty = 0;
                            foreach ($order->products as $item) {
                                $qty += $item->pivot->product_quantity;
                            }
                            echo number_format($qty);
                        @endphp
                    </th>
                    <th colspan="2" class="text-center">
                        @php
                            $total = 0;
                            foreach ($order->products as $item) {
                                $total += $item->pivot->product_quantity * $item->sell_price;
                            }
                            echo number_format($total) . ' đ';
                        @endphp
                    </th>
                </tr>
            </tfoot>
        </table>
        <a class="btn btn-secondary float-right" href="{{route('orders.index')}}">Come Back</a>
    </div>
</div>
@endsection