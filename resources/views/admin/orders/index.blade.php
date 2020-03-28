@extends('layouts.admin')

@section('title', 'Order List')

@section('page_title')
<p>Order List</p>
@endsection

@section('breadcrumb', 'Order List')

@section('content')
<div class="row">
    <div class="col-md-12 table-responsive">
        <form action="" class="form-inline form-group">
            <input style="height: 2.5rem; border-top-right-radius: 0; border-bottom-right-radius: 0; width: 30%" type="text" value="{{$keyword}}" class="form-control" name="keyword">
            <button style="height: 2.5rem; border-top-left-radius: 0; border-bottom-left-radius: 0" type="submit" class="btn btn btn-info"><i class="nav-icon fas fa-search"></i></button>
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
                                {{number_format($order->getProductQuantity($order->id))}}
                            </td>
                            <td>{{number_format($order->getProductTotal($order->id)) .' đ'}}</td>
                            <td>{{$order->address}}</td>
                            <td>{{$order->getOrderStatus($order->status)}}</td>
                            <td style="width: 24%;" class="text-center">
                                <a class="btn btn-primary btn-sm" href="{{route('orders.show', $order->id)}}"><i class="fas fa-folder"></i> View</a>

                                <a class="btn btn-info btn-sm" href="{{route('orders.edit', $order->id)}}"><i class="fas fa-pencil-alt"></i> Edit</a>

                                <form class="d-inline-block" action="{{ url('admin/orders', ['id' => $order->id]) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this?')" href="{{route('orders.destroy', $order->id)}}">
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