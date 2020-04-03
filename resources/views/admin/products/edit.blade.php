@extends('layouts.admin')

@section('title', 'Edit Product')

@section('breadcrumb', 'Edit Product')

@section('content')
@php
    $categories = App\Models\Category::where('parent_id', '=', 0)->get();
    $sub_categories = App\Models\Category::where('parent_id', '<>', 0)->get();
@endphp
<div class="container">
    <div class="row">
        <div class="col-lg-12 mx-auto row">
            <div class="card col-lg-10 col-sm-12 mx-auto">
                <div class="card-header text-center">
                    <h3 class="card-title float-none">
                        Edit Product
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="">Name <span class="text text-danger">*</span></label>
                            <input type="text" class="form-control" value="{{$product->name}}" name="name" placeholder="Product Name">
                            @if($errors->has('name'))
                            <span class="text text-danger">{{$errors->first('name')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Slug <span class="text text-danger">*</span></label>
                            <input type="text" class="form-control" value="{{$product->slug}}" name="slug" placeholder="Product Slug">
                            @if($errors->has('slug'))
                            <span class="text text-danger">{{$errors->first('slug')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="image">Image <span class="text text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file" id="customFile" name="image">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            @if($errors->has('image'))
                                <span class="text text-danger">{{$errors->first('image')}}</span>
                            @endif
                            <div class="col-sm-4 mx-auto">
                                <div class="border rounded-lg text-center p-3">
                                    <img src="{{asset($product->image)}}" class="img-fluid" id="preview" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Short Description</label>
                            <textarea id="short_description" name="short_description" class="form-control" cols="30" rows="10">{{$product->short_description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea id="description" name="description" class="form-control" cols="30" rows="10">{{$product->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Sell Price <span class="text text-danger">*</span></label>
                            <input type="number" min="0" class="form-control" value="{{$product->sell_price}}" name="sell_price" placeholder="Product Sell Price">
                            @if($errors->has('sell_price'))
                            <span class="text text-danger">{{$errors->first('sell_price')}}</span>
                            @endif
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

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure to edit this?')">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script-section')
    <script type="text/javascript">
        $(document).ready(function () { bsCustomFileInput.init(); });
        CKEDITOR.replace( 'short_description' );
        CKEDITOR.replace( 'description' );
    </script>
@endsection