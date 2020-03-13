@extends('layouts.admin')

@section('title', 'Product List')

@section('page_title')
<p>Product Detail</p>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered table-valign-middle">
            <thead>
                <tr class="text-center">
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td><a href=""><img width="80" src="{{asset($product->image)}}" alt=""></a></td>
                    <td>{{$product->name}}</td>
                    <td>{{Str::limit($product->description)}}</td>
                    <td>{{$product->sell_price}}</td>
                </tr>
            </tbody>
        </table>
        <a class="btn btn-secondary float-right" href="{{route('products.index')}}">Come Back</a>
    </div>
</div>
@endsection