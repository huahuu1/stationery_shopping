@extends('layouts.admin')

@section('title', 'Supplier Detail')

@section('page_title')
<p>Supplier Detail</p>
@endsection

@section('breadcrumb', 'Supplier Detail')

@section('content')
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered table-valign-middle">
            <thead>
                <tr class="text-center">
                    <th>Supplier Image</th>
                    <th>Supplier Name</th>
                    <th colspan="3">Product List By Supplier</th>
                </tr>
            </thead>
            <tbody>
                @php
                    if($supplier->products->count() == 0) {
                        echo '<tr><td colspan="4" class="text-center">There are no products to list in this supplier</td></tr>';
                    }
                @endphp
                @foreach ($supplier->products as $product)
                    @php
                        $count = $supplier->products->count() + 1;
                    @endphp
                @endforeach
                <tr class="text-center">
                    <td rowspan="{{$count}}"><a href=""><img width="80" src="{{asset($supplier->logo)}}" alt=""></a></td>
                    <td rowspan="{{$count}}">{{$supplier->name}}</td>
                    <th>STT</th>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    @foreach ($supplier->products as $product)
                    <tr>
                        <td class="text-center">
                            <ul style="list-style: none">
                                <li>{{$loop->iteration}}</li>
                            </ul>
                        </td>
                        <td>
                            <ul class="p-0 text-center" style="list-style: none">
                                <li><a href="{{route('products.show', $product->id)}}"><img width="80" src="{{asset($product->image)}}" alt=""></a></li>
                            </ul>
                        </td>
                        <td>
                            <ul class="text-center" style="list-style: none">
                                <li>{{$product->name}}</li>
                            </ul>
                        </td>
                    </tr>
                    @endforeach
                </tr>
            </tbody>
        </table>
        <a class="btn btn-secondary float-right" href="{{route('suppliers.index')}}">Come Back</a>
    </div>
</div>
@endsection