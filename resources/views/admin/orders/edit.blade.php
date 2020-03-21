@extends('layouts.admin')

@section('title', 'Create Order')

@section('page_title')
<p>Edit Order</p>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <form action="{{ route("orders.update", $od->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="">User Name</label>
                    <input class="form-control" type="text" readonly value="{{$od->getUserName($od->user_id)}}">
                    {{-- <select name="user_id" id="" class="form-control">
                        @foreach ($users as $user)
                        <option value="{{$od->user_id}}" @if ($od->user_id == $user->id) selected @endif>{{$user->name}}</option>
                        @endforeach
                    </select> --}}
                </div>

                <div class="form-group">
                    <label for="">Status <span class="text text-danger">*</span></label>
                    <select name="status" id="" class="form-control">
                        <option value="0" @if ($od->status == 0) selected @endif>Pending</option>
                        <option value="1" @if ($od->status == 1) selected @endif>Confirm</option>
                        <option value="2" @if ($od->status == 2) selected @endif>Delivered</option>
                        <option value="-1" @if ($od->status == -1) selected @endif>Cancel</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Shipping Address <span class="text text-danger">*</span></label>
                    <input type="text" name="address" class="form-control" value="{{$od->address}}">
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
                                <th>Product</th>
                                <th>Quantity</th>
                            </tr>
                            </thead>
                            <tbody>

                            @if ($od->products->count() == 0)
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
                                    </td>
                                    <td>
                                        <input type="number" name="quantities[]" class="form-control" value="1" />
                                    </td>
                                </tr>
                            @endif

                            @foreach ($od->products as $order_product)
                                <tr id="product{{ $loop->index }}">
                                    <td>
                                        <select name="products[]" class="form-control">
                                            <option value="">-- choose product --</option>
                                            @foreach ($products as $product)
                                                <option value="{{ $product->id }}"
                                                    @if ($order_product->id == $product->id) selected @endif
                                                >{{ $product->name }} ({{ number_format($product->sell_price) . ' đ'}})</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <input type="number" name="quantities[]" class="form-control"
                                               value="{{ $order_product->pivot->product_quantity }}" />
                                    </td>
                                </tr>
                            @endforeach
                            <tr id="product{{ $od->products->count()}}"></tr>
                            </tbody>
                        </table>

                        <div class="row">
                            <div class="col-md-12">
                                <button id="add_row2" class="btn btn-default pull-left">+ Add Row</button>
                                <button id='delete_row2' class="pull-right btn btn-danger">- Delete Row</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <input class="btn btn-danger" type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
        let row_number = {{ $od->products->count() }};
        $("#add_row2").click(function(e){
            e.preventDefault();
            let new_row_number = row_number - 1;
            $('#product' + row_number).html($('#product' + new_row_number).html()).find('td:first-child');
            $('#products_table').append('<tr id="product' + (row_number + 1) + '"></tr>');
            row_number++;
        });

        $("#delete_row2").click(function(e){
            e.preventDefault();
            if(row_number > 1){
            $("#product" + (row_number - 1)).html('');
            row_number--;
            }
        });
        });
    </script>
@endsection