@extends('layouts.admin')

@section('title', 'Create Category')

@section('page_title')
<p>New Category</p>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Product Name">
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
                    <label for="">Parent ID</label>
                    <select name="parent_id" id="" class="form-control">
                        <option value="0">Choose Category</option>
                        <option value="1">Category 1</option>
                        <option value="2">Category 2</option>
                        <option value="3">Category 3</option>
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