@extends('layouts.admin')

@section('title', 'Edit User')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 mx-auto row">
            <div class="card col-lg-5 col-sm-12 mx-5">
                <div class="card-header text-center">
                    <h3 class="card-title float-none">
                        Edit Information
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('users.update-info', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="">User Name <span class="text text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" placeholder="User Name" value="{{$user->name}}">
                            @if($errors->has('name'))
                            <span class="text text-danger">{{$errors->first('name')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Email <span class="text text-danger">*</span></label>
                            <input type="email" name="email" class="form-control" placeholder="Example: abc@gmail.com" value="{{$user->email}}">
                            @if($errors->has('email'))
                            <span class="text text-danger">{{$errors->first('email')}}</span>
                            @endif
                        </div>
                        <div class="form-group text-center">
                            <button id="buttonSub" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card col-lg-5 col-sm-12">
                <div class="card-header text-center">
                    <h3 class="card-title float-none">
                        Edit Password
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('users.update-pass', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">New Password <span class="text text-danger">*</span></label>
                            <input type="password" name="password" class="form-control">
                            @if($errors->has('password'))
                            <span class="text text-danger">{{$errors->first('password')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Confirm New Password <span class="text text-danger">*</span></label>
                            <input type="password" name="password_confirmation" class="form-control">
                            @if($errors->has('password_confirmation'))
                            <span class="text text-danger">{{$errors->first('password_confirmation')}}</span>
                            @endif
                        </div>
                        <div class="form-group text-center">
                            <button id="buttonSub" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
