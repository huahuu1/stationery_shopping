@extends('layouts.admin')

@section('title', 'Edit User')

@section('page_title')
<p>Edit User</p>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <form action="{{route('users.postEdit', $user->id)}}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="">User Name</label>
                    <input type="text" class="form-control" value="{{$user->name}}" name="name">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" value="{{$user->email}}" name="email">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" class="form-control" value="{{$user->password}}" name="password">
                </div>
                <div class="form-group">
                    <label for="">Role</label>
                    <input type="number" class="form-control" value="{{$user->role}}" name="role">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection