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
                <tr class="text-center">
                    <th>STT</th>
                    <th>Name</th>
                    <th>Functions</i></a></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr class="text-center">
                    <td>{{$loop->iteration}}</td>
                    <td>{{$category->name}}</td>
                    <td style="width: 9%;" class="text-center">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder"></i> View
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
