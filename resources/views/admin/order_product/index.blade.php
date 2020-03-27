@extends('layouts.admin')

@section('title', 'Order List')

@section('page_title')
<p>Order List</p>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12 table-responsive-md">
        <form action="" class="form-inline form-group">
            <input type="text" value="{{$keyword}}" class="form-control" name="keyword">
            <button type="submit" class="btn btn btn-info"><i class="nav-icon fas fa-search"></i></button>
        </form>
        <table class="table table-bordered table-valign-middle">
            <thead>
                <tr class="text-center">
                    <th>STT</th>
                    <th>User Name</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Shipping Address</th>
                    <th>Status</th>
                    <th>
                        <a class="btn btn-sm btn-success" href="{{route('orders.create')}}">
                            <i class="fas fa-plus"></i> Add New
                        </a>
                    </th>
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
                            <td>{{$order->getProductTotal($order->id)}}</td>
                            {{-- <td>{{$order->getProductTotal($order->id)}}</td> --}}
                            <td>{{$order->address}}</td>
                            <td>{{$order->getOrderStatus($order->status)}}</td>
                            <td style="width: 24%;" class="text-center">
                                <a class="btn btn-primary btn-sm" href="{{route('orders.show', $order->id)}}"><i class="fas fa-folder"></i> View</a>

                                <a class="btn btn-info btn-sm" href="{{route('orders.edit', $order->id)}}"><i class="fas fa-pencil-alt"></i> Edit</a>

                                <form class="d-inline-block" action="{{ url('admin/orders', ['id' => $order->id]) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm" href="{{route('orders.destroy', $order->id)}}">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                @endforeach
            </tbody>
        </table>
        {{$orders->links()}}
    </div>
</div>
@endsection