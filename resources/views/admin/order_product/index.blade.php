@extends('layouts.admin')

@section('title', 'Order List')

@section('page_title')
<p>Order List</p>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr>

                    <th>STT</th>
                    <th>Product Image</th>
                    <th>Quantity</th>
                    <th>User Name</th>
                    <th>Total</th>
                    <th>Status</th>
                    {{-- <th><a class="btn btn-sm btn-success" href="{{route('categories.create')}}"><i class="fas fa-plus"></i></a></th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($order_product as $op)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$op->order_id}}</td>
                        <td>{{$op->product_id}}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection