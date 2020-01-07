@extends('layouts.admin')

@section('title', 'Product List')

@section('page_title')
<p>Product List</p>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    
                    <th>STT</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>SKU</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Supplier</th>
                    <th><a class="btn btn-sm btn-success" href="{{route('products.create')}}"><i class="fas fa-plus"></i></a></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>1</td>
                    <td><a href=""><img width="100" src="{{$product->image}}" alt=""></a>  </td>
                    <td>{{$product->name}}</td>
                    <td>{{ $product->sku }}</td>
                    <td>{{$product->sell_price}}</td>
                    <td>{{ $product->cate_name }}</td>
                    <td>{{ $product->supplier_id }}</td>
                    <td>
                        <a class="btn btn-sm btn-info" href=""><i class="fas fa-eye"></i></a>
                        <a class="btn btn-sm btn-warning" href=""><i class="fas fa-pen"></i></a>
                        <a class="btn btn-sm btn-danger" href=""><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>
@endsection