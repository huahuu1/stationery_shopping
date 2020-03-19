@extends('layouts.admin')

@section('title', 'Create Order Detail')

@section('page_title')
<p>New Order Detail</p>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <form action="{{ route('order_product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Product Name<span class="text text-danger">*</span></label>
                    <select name="product_id" id="" class="form-control">
                        @foreach ($orders as $item)
                        @php
                            // dd($orders);
                        @endphp
                        <option value="{{$item->id}}">{{$item->name}}</option>
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
                    <input type="text" name="address" class="form-control" >
                    @if($errors->has('address'))
                    <span class="text text-danger">{{$errors->first('address')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection