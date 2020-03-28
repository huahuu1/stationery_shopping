@extends('layouts.admin')

@section('title', 'Edit Category')

@section('page_title')
<p>New Category</p>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" value="{{$category->name}}" name="name" placeholder="Product Name">
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="text" name="image" class="form-control" value="{{$category->image}}" placeholder="Image">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" class="form-control" cols="30" rows="10">{{$category->description}}</textarea>
                </div>

                <div class="form-group">
                    <label for="">Parent ID</label>
                    <select name="parent_id" id="" class="form-control">
                        <option value="0">Choose Category</option>
                        @foreach ($categories as $item)
                            <option
                            @php
                                if($category->parent_id == $item->id ){
                                    echo 'selected';
                                }
                            @endphp
                            value="{{$item->id}}"
                            >{{$item->name}}</option>
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