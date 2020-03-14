@extends('layouts.admin')

@section('title', 'Order List')

@section('page_title')
<p>Order List</p>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered table-valign-middle">
            <thead>
                <tr class="text-center">
                    <th>STT</th>
                    <th>User Name</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Shipping Address</th>
                    <th>Status</th>
                    <th>View</th>
                    {{-- <th><a class="btn btn-sm btn-success" href="{{route('categories.create')}}"><i class="fas fa-plus"></i></a></th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                        <tr class="text-center">
                            <td>{{$loop->iteration}}</td>
                            <td>{{$order->getUserName($order->user_id)}}</td>
                            <td>
                                {{$order->getProductQuantity($order->id)}}
                            </td>
                            <td>{{$order->total}}</td>
                            {{-- <td>{{$order->getProductTotal($order->id)}}</td> --}}
                            <td>{{$order->address}}</td>
                            <td>{{$order->getOrderStatus($order->status)}}</td>
                            <td>
                                <form class="d-inline-block" action="{{ url('admin/orders', ['id' => $order->id]) }}" method="GET">
                                    <button type="submit" class="btn btn-primary btn-sm" href="{{route('orders.show', $order->id)}}">
                                        <i class="fas fa-folder"></i> View
                                    </button>
                                </form>
                            </td>
                        </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {{$orders->links()}} --}}
    </div>
</div>
@endsection