@extends('layouts.admin')

@section('title', 'Edit Product')

@section('page_title')
<p>Edit Product</p>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <form action="{{ route('users.update', $product->id) }}" method="POST">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" value="{{$product->name}}" name="name" placeholder="Product Name">
                </div>
                <div class="form-group">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" value="{{$product->slug}}" name="slug" placeholder="Product Slug">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <img class="img-fluid"
                        src="{{ url('images/'.$product->image) }}" />
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image"
                                name="image">
                                <label class="custom-file-label" for="image">Choose
                                Image</label>
                            </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" class="form-control" cols="30" rows="10">{{$product->description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Sell Price</label>
                    <input type="text" class="form-control" value="{{$product->sell_price}}" name="sell_price" placeholder="Product Sell Price">
                </div>
                <div class="form-group">
                    <label for="">Category ID</label>
                    <select name="category_id" id="" class="form-control">
                        {{-- <option value="0">Category ID</option> --}}
                        @foreach ($cates as $category)
                            <option
                            @php
                                if($product->category_id == $category->id ){
                                    echo 'selected';
                                }
                            @endphp
                            value="{{$category->id}}"
                            >{{$category->name}}</option>
                        @endforeach

                    </select>
                </div>

                <div class="form-group">
                    <label for="">Supplier ID</label>
                    <select name="supplier_id" id="" class="form-control">
                        // <option value="0">Supplier ID</option>
                        @foreach ($sups as $supplier)
                            <option
                            @php
                                if($product->supplier_id == $supplier->id ){
                                    echo 'selected';
                                }
                            @endphp
                            value="{{$supplier->id}}"
                            >{{$supplier->name}}</option>
                        @endforeach

                    </select>
                </div>

                <div class="form-group">
                    <label for="">Status</label>
                    <input type="text" class="form-control" value="{{$product->status}}" name="status" placeholder="Product Status">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection