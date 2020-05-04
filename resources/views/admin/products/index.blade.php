@extends('layouts.admin')

@section('title', 'Product List')

@section('page_title')
<p>Product List</p>
@endsection

@section('breadcrumb', 'Product List')

@section('content')
<div class="row">
    <div class="col-md-12 table-responsive">
        <form action="" class="form-inline form-group">
            <input style="height: 2.5rem; border-top-right-radius: 0; border-bottom-right-radius: 0; width: 30%" type="text" value="{{$keyword}}" class="form-control" name="keyword">
            <button style="height: 2.5rem; border-top-left-radius: 0; border-bottom-left-radius: 0" type="submit" class="btn btn btn-info"><i class="nav-icon fas fa-search"></i></button>
        </form>
        <table class="table table-bordered table-valign-middle">
            <thead>
                <tr class="text-center">
                    <th>STT</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Sub-Category</th>
                    <th>Supplier</th>
                    <th>Status</th>
                    <th>
                        <a class="btn btn-sm btn-success" href="{{route('products.create')}}">
                            <i class="fas fa-plus"></i> Add New
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr class="text-center">
                    <td>{{$loop->iteration}}</td>
                    <td><a href="{{route('products.show', $product->id)}}"><img width="100" src="{{asset($product->image)}}" alt=""></a>  </td>
                    <td class="text-left">{{$product->name}}</td>
                    <td>{{number_format($product->sell_price).'đ'}}</td>
                    <td>{{ $product->getCategoryName($product->category_id) }}</td>
                    <td>{{ $product->getCategoryName($product->sub_category_id) }}</td>
                    <td>{{ $product->getSupplierName($product->supplier_id) }}</td>
                    <td>{{ $product->getStatusName($product->status) }}</td>
                    <td style="width: 24%;" class="text-center">

                        <a class="btn btn-primary btn-sm" href="{{route('products.show', $product->id)}}"><i class="fas fa-folder"></i> View</a>

                        <a class="btn btn-info btn-sm" href="{{route('products.edit', $product->id)}}"><i class="fas fa-pencil-alt"></i> Edit</a>

                        <form class="d-inline-block" action="{{ url('admin/products', ['id' => $product->id]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this?')" href="{{route('products.destroy', $product->id)}}">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$products->links()}}
    </div>
</div>
@endsection