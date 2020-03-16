@extends('layouts.admin')

@section('title', 'Create User')

@section('page_title')
<p>New Account</p>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
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
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="">Description <span class="text text-danger">*</span></label>
                    <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Sell Price <span class="text text-danger">*</span></label>
                    <input type="number" name="sell_price" class="form-control" placeholder="Sell Price" min='0'>
                    @if($errors->has('sell_price'))
                    <span class="text text-danger">{{$errors->first('sell_price')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Category</label>
                    <select name="category_id" id="" class="form-control">
                        @foreach ($cates as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Supplier</label>
                    <select name="supplier_id" id="" class="form-control">
                        @foreach ($sups as $supplier)
                        <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                        @endforeach
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