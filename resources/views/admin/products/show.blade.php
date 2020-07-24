@extends('layouts.admin')

@section('title', 'Product Detail')

@section('page_title')
<p>Product Detail</p>
@endsection

@section('breadcrumb', 'Product Detail')

@section('content')
<div class="row">
    <div class="col-md-12 table-responsive">
        {{-- <table class="table table-bordered table-valign-middle">
            <thead>
                <tr class="text-center">
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Product Short Description</th>
                    <th>Product Description</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td><img width="80" src="{{asset($product->image)}}" alt=""></td>
                    <td>{{$product->name}}</td>
                    <td class="text-left text-nowrap">{!! nl2br($product->short_description)!!}</td>
                    <td class="text-left text-nowrap">{!! nl2br($product->description)!!}</td>
                    <td>{{$product->sell_price}}</td>
                </tr>
            </tbody>
        </table> --}}
        <table class="table table-bordered table-valign-middle">
            <tbody>
                <tr>
                    <th>Product Image</th>
                    <td><img width="200" height="200" src="{{asset($product->image)}}" alt=""></td>
                </tr>
                <tr>
                    <th>Product Name</th>
                    <td>{{$product->name}}</td>
                </tr>
                <tr>
                    <th>Product Short Description</th>
                    <td class="text-left">{!! nl2br($product->short_description)!!}</td>
                </tr>
                <tr>
                    <th>Product Description</th>
                    <td class="text-left">{!! nl2br($product->description)!!}</td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>{{number_format($product->sell_price). ' đ'}}</td>
                </tr>
            </tbody>
        </table>
        <a class="btn btn-secondary float-right" href="{{route('products.index')}}">Come Back</a>
    </div>
</div>
@endsection