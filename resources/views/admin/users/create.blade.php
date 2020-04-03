@extends('layouts.admin')

@section('title', 'Create New User')

@section('breadcrumb', 'Create New User')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 mx-auto row">
            <div class="card col-lg-5 col-sm-12 mx-auto">
                <div class="card-header text-center">
                    <h3 class="card-title float-none">
                        Create New Account
                    </h3>
                </div>
                <div class="card-body">
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
                            <label for="">Phone</label>
                            <input type="phone" name="phone" class="form-control">
                            @if($errors->has('phone'))
                            <span class="text text-danger">{{$errors->first('phone')}}</span>
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
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection