@extends('layouts.admin')

@section('title', 'Create User')

@section('page_title')
<p>New User</p>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">User Name <span class="text text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" placeholder="User Name">
                    @if($errors->has('name'))
                    <span class="text text-danger">{{$errors->first('name')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Email <span class="text text-danger">*</span></label>
                    <input type="email" name="email" class="form-control" placeholder="Example: abc@gmail.com">
                    @if($errors->has('email'))
                    <span class="text text-danger">{{$errors->first('email')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Password <span class="text text-danger">*</span></label>
                    <input type="password" name="password" class="form-control">
                    @if($errors->has('password'))
                    <span class="text text-danger">{{$errors->first('password')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Confirm Password <span class="text text-danger">*</span></label>
                    <input type="password" name="password_confirmation" class="form-control">
                    @if($errors->has('password_confirmation'))
                    <span class="text text-danger">{{$errors->first('password_confirmation')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection