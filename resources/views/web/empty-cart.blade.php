@extends('layouts.web-other-pages')

@section('title', 'Cart')

@section('feature_item')
<div class="container">
    <div class="text-center return-to-shop">
        <p>No products in the cart</p><a class="btn btn-danger" href="{{url('/')}}">back to the store</a>
    </div>
</div>
@endsection