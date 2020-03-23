@extends('layouts.admin')

@section('title', 'Edit Product')

@section('page_title')
<p>Edit Product</p>
@endsection

@section('content')
@php
    $sub_categories = App\Models\Category::where('id', '>', 9)->get();
    $categories = App\Models\Category::where('id', '<=', 9)->get();
@endphp
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
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
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file" id="customFile" name="image">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                          </div>

                    </div>
                    <div class="col-sm-4 mx-auto">
                        <div class="border rounded-lg text-center p-3">
                            <img src="{{asset($product->image)}}" class="img-fluid" id="preview" />
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
                    <label for="">Category</label>
                    <select name="category_id" id="" class="form-control">
                        @foreach ($categories as $category)
                            <option
                            @if($product->category_id == $category->id)
                                selected
                            @endif
                            value="{{$category->id}}"> {{$category->name}} </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Sub Category</label>
                    <select name="sub_category_id" id="" class="form-control">
                        @foreach ($sub_categories as $category)
                            <option
                            @if($product->sub_category_id == $category->id)
                                selected
                            @endif
                            value="{{$category->id}}"> {{$category->name}} </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Supplier</label>
                    <select name="supplier_id" id="" class="form-control">
                        @foreach ($sups as $supplier)
                            <option
                            @if($product->supplier_id == $supplier->id )
                               selected
                            @endif
                            value="{{$supplier->id}}"
                            >{{$supplier->name}}</option>
                        @endforeach

                    </select>
                </div>

                <div class="form-group">
                    <label for="">Status</label>
                    <select name="status" id="" class="form-control">
                        <option value="1" @if ($product->status == 1) selected @endif>Active</option>
                        <option value="0" @if ($product->status == 0) selected @endif>Deactive</option>
                    </select>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection

@section('script-section')
    <script type="text/javascript">
        $(document).ready(function () { bsCustomFileInput.init(); });
    </script>
@endsection