@extends('layouts.admin')

@section('title', 'Create User')

@section('page_title')
<p>New Account</p>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <form action="{{route('users.postCreate')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">User Name <span class="text text-danger">*</span></label>
                    <input type="text" class="form-control" name="name">
                    @if($errors->has('name'))
                    <span class="text text-danger">{{$errors->first('name')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Email <span class="text text-danger">*</span></label>
                    <input type="email" name="email" class="form-control">
                    @if($errors->has('email'))
                    <span class="text text-danger">{{$errors->first('email')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Password <span class="text text-danger">*</span></label>
                    <input type="password" name="password" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="">Role <span class="text text-danger">*</span></label>
                    <input type="number" class="form-control" name="role" min="0" max="1">
                    @if($errors->has('role'))
                    <span class="text text-danger">{{$errors->first('role')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection