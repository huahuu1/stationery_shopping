@extends('layouts.admin')

@section('title', 'Product List')

@section('page_title')
<p>Category List</p>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr>

                    <th>STT</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Parent ID</th>
                    <th><a class="btn btn-sm btn-success" href="{{route('categories.create')}}"><i class="fas fa-plus"></i></a></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>1</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->image}}</td>
                    <td>{{$category->description}}</td>
                    <td>{{ $category->getParentName($category->parent_id) }}</td>
                    <td>
                        <a class="btn btn-sm btn-info" href=""><i class="fas fa-eye"></i></a>
                        <a class="btn btn-sm btn-warning" href=""><i class="fas fa-pen"></i></a>
                        <a class="btn btn-sm btn-danger" href=""><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
