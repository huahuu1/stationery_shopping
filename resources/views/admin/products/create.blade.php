@extends('layouts.admin')

@section('title', 'Create New Product')

@section('content')
@php
    $sub_categories = App\Models\Category::where('id', '>', 9)->get();
    $categories = App\Models\Category::where('id', '<=', 9)->get();
@endphp
<div class="container">
    <div class="row">
        <div class="col-lg-12 mx-auto row">
            <div class="card col-lg-10 col-sm-12 mx-auto">
                <div class="card-header text-center">
                    <h3 class="card-title float-none">
                        Create New Product
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Product Name <span class="text text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" placeholder="Product Name">
                            @if($errors->has('name'))
                            <span class="text text-danger">{{$errors->first('name')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Slug <span class="text text-danger">*</span></label>
                            <input type="text" name="slug" class="form-control" placeholder="Example: new-product">
                            @if($errors->has('slug'))
                            <span class="text text-danger">{{$errors->first('slug')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file" id="customFile" name="image">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            @if($errors->has('image'))
                            <span class="text text-danger">{{$errors->first('image')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Short Description</label>
                            <textarea id="short_description" name="short_description" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea id="description" name="description" class="form-control description" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Sell Price <span class="text text-danger">*</span></label>
                            <input type="number" name="sell_price" class="form-control" placeholder="Sell Price" min='0'>
                            @if($errors->has('sell_price'))
                            <span class="text text-danger">{{$errors->first('sell_price')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Category <span class="text text-danger">*</span></label>
                            <select name="category_id" id="" class="form-control">
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Sub Category <span class="text text-danger">*</span></label>
                            <select name="sub_category_id" id="" class="form-control">
                                @foreach ($sub_categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Supplier <span class="text text-danger">*</span></label>
                            <select name="supplier_id" id="" class="form-control">
                                @foreach ($sups as $supplier)
                                <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
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