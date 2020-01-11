@extends('layouts.admin')

@section('title', 'Suppliers List')

@section('page_title')
    Supplier List
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
                @foreach ($suppliers as $supplier)g
                <tr>
                    <td>1</td>
                    <td><a href=""><img width="100" src="{{$supplier->image}}" alt=""></a>  </td>
                    <td>{{$supplier->name}}</td>
                    <td>{{ $supplier->image }}</td>
                    <td>{{$supplier->description}}</td>
                    <td>{{ $supplier->parent_id }}</td>
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
