@extends('layouts.admin')

@section('title', 'Create Product')

@section('page_title')
<p>New Product</p>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Product Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Product Name">
                </div>
                <div class="form-group">
                    <label for="">Slug</label>
                    <input type="text" name="slug" class="form-control" placeholder="Example: new-product">
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="text" name="image" class="form-control" placeholder="Image">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Short Description</label>
                    <textarea name="short_description" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="">List Price</label>
                    <input type="number" name="list_price" class="form-control" placeholder="List Price">
                </div>
                <div class="form-group">
                    <label for="">Sell Price</label>
                    <input type="number" name="sell_price" class="form-control" placeholder="Sell Price">
                </div>
                <div class="form-group">
                    <label for="">Category</label>
                    <select name="category_id" id="" class="form-control">
                        <option value="1">Category 1</option>
                        <option value="2">Category 2</option>
                        <option value="3">Category 3</option>
                    </select>
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