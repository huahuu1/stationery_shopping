@extends('layouts.admin')

@section('title', 'Product List')

@section('page_title')
<p>Product Detail</p>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <h3>Product name: {{ $product->name }}</h3>
        <h3>Price: {{ $product->sell_price }}</h3>
        <hr>
        <h2><strong>  Category of product</strong></h2>
        <h2>{{ $product->category->name }}</h2>
        <a class="btn btn-success" href="{{route('products.index')}}">Come Back</a>
    </div>
</div>
@endsection