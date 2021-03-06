@extends('layouts.admin')

@section('title', 'Create New Order')

@section('breadcrumb', 'Create New Order')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 mx-auto row">
            <div class="card col-lg-10 col-sm-12 mx-auto">
                <div class="card-header text-center">
                    <h3 class="card-title float-none">
                        Create New Order
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ route("orders.store") }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">User Name <span class="text text-danger">*</span></label>
                            <select name="user_id" id="" class="form-control">
                                @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Status <span class="text text-danger">*</span></label>
                            <select name="status" id="" class="form-control">
                                <option value="0">Pending</option>
                                <option value="1">Confirm</option>
                                <option value="2">Delivered</option>
                                <option value="-1">Cancel</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Shipping Address <span class="text text-danger">*</span></label>
                            <input type="text" name="address" class="form-control">
                            @if($errors->has('address'))
                            <span class="text text-danger">{{$errors->first('address')}}</span>
                            @endif
                        </div>

                        <div class="card">
                            <div class="card-header">
                                Products
                            </div>

                            <div class="card-body">
                                <table class="table" id="products_table">
                                    <thead>
                                        <tr>
                                            <th>Product <span class="text text-danger">*</span></th>
                                            <th>Quantity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr id="product0">
                                            <td>
                                                <select name="products[]" class="form-control">
                                                    <option value="">-- choose product --</option>
                                                    @foreach ($products as $product)
                                                    <option value="{{ $product->id }}">
                                                        {{ $product->name }}
                                                        ({{ number_format($product->sell_price, 0) .' đ'}})
                                                    </option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('products.*'))
                                                <span class="text text-danger">{{$errors->first('products.*')}}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <input type="number" name="quantities[]" class="form-control" value="1" min="1"/>
                                            </td>
                                        </tr>
                                        <tr id="product1"></tr>
                                    </tbody>
                                </table>

                                <div class="row text-center">
                                    <div class="col-md-12">
                                        <button id="add_row" type="button" class="btn btn-default pull-left">+ Add Row</button>
                                        <button id='delete_row' type="button" class="pull-right btn btn-danger">- Delete Row</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <input class="btn btn-primary" type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
