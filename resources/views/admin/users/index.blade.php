@extends('layouts.admin')

@section('title', 'Product List')

@section('page_title')
<p>User List</p>
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
                    <th><a class="btn btn-sm btn-success" href="{{route('users.create')}}"><i class="fas fa-plus"></i></a></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>1</td>
                    <td>{{$user->name}}</td>
                    <td><a href="{{route('users.show', $user->id)}}"><img width="60" src="{{$user->profile->avatar}}" alt=""></a></td>
                    <td></td>
                    <td></td>
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
