@extends('layouts.admin')

@section('title', 'Order List')

@section('page_title')
<p>Order Detail</p>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered table-valign-middle">
            <thead>
                <tr class="text-center">
                    <th>STT</th>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>

            </thead>
            <tbody>

               @foreach ($products as $item)
                   <tr class="text-center">
                       <td>{{$loop->iteration}}</td>
                       <td><a href=""><img width="80" src="{{asset($item->image)}}" alt=""></a></td>
                       <td>{{Str::limit($item->name, 40)}}</td>
                       <td>{{$item->quantity}}</td>
                       <td>{{$item->sell_price}}</td>
                   </tr>
               @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3" class="text-center">Total:</th>
                    <th class="text-center">
                        @php
                            $qty = 0;
                            foreach ($products as $key => $item) {
                                $qty += $item->quantity;
                            }
                            echo $qty;
                        @endphp
                    </th>
                    <th colspan="2" class="text-center">
                        @php
                            $total = 0;
                            foreach ($products as $key => $item) {
                                $total += $item->quantity*$item->sell_price;
                            }
                            echo $total . ' VND';
                        @endphp
                    </th>
                </tr>
            </tfoot>
        </table>
        <a class="btn btn-secondary float-right" href="{{route('orders.index')}}">Come Back</a>
    </div>
</div>
@endsection