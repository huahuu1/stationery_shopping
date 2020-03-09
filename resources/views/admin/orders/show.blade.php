@extends('layouts.admin')

@section('title', 'Order List')

@section('page_title')
<p>Order Detail</p>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr>

                    <th>STT</th>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Discount</th>
                </tr>
               
            </thead>
            <tbody>
                
               @foreach ($products as $item)
                   <tr>
                       <td>{{$loop->iteration}}</td>
                       <td><a href=""><img width="80" src="{{asset($item->image)}}" alt=""></a></td>
                       <td>{{Str::limit($item->name, 40)}}</td>
                       <td>{{$item->quantity}}</td>
                       <td>{{$item->sell_price}}</td>
                       <td>{{$item->list_price == null ? '0%' : ($item->list_price - $item->sell_price)/$item->list_price*100 .' %' }}</td>
                   </tr>
               @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">tong</th>
                    <th></th>
                    <th>
                        @php 
                            $qty = 0;
                            foreach ($products as $key => $item) {
                                $qty += $item->quantity;
                            } 
                            echo $qty;   
                        @endphp
                    </th>
                    <th colspan="2">
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
    </div>
</div>
@endsection