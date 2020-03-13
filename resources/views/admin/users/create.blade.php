@extends('layouts.admin')

@section('title', 'Create Product')

@section('page_title')
<p>New Product</p>
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
                    <label for="">Slug</label>
                    <input type="text" name="slug" class="form-control" placeholder="Example: new-product">
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                   
                    <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Short Description</label>
                    <textarea name="short_description" class="form-control" cols="30" rows="10"></textarea>
                </div>
                @if($errors->has('description'))
                <span class="text text-danger">{{$errors->first('description')}}</span>
                @endif
                <div class="form-group">
                    <label for="">List Price</label>
                    <input type="number" name="list_price" class="form-control" placeholder="List Price">
                    
                </div>
                <div class="form-group">
                    <label for="">Sell Price</label>
                    <input type="number" name="sell_price" class="form-control" placeholder="Sell Price">
                    @if($errors->has('sell_price'))
                    <span class="text text-danger">{{$errors->first('sell_price')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Category</label>
                    <select name="category_id" id="" class="form-control">
                        <option value="1">Category 1</option>
                        <option value="2">Category 2</option>
                        <option value="3">Category 3</option>
                    </select>
                    @if($errors->has('category_id'))
                    <span class="text text-danger">{{$errors->first('category_id')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Supplier</label>
                    <select name="supplier_id" id="" class="form-control">
                        <option value="1">Supplier 1</option>
                        <option value="2">Supplier 2</option>
                        <option value="3">Supplier 3</option>
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