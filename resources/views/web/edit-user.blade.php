@extends('layouts.web-other-pages')

@section('title', 'Profile')

@section('feature_item')
<div class="container">
    <div class="userEdit">
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" href="#frmEditA" data-toggle="tab">INFORMATION</a></li>
            <li class="nav-item"><a class="nav-link" href="#frmEditB" data-toggle="tab">PASSWORD</a></li>
        </ul>
        <form class="frmEdit" action="{{route('users.edit-info', Auth::user()->id)}}" method="POST"
            enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="tab-content">
                <div class="tab-pane active" id="frmEditA">
                    <div class="form-group">
                        <label for="">User Name <span class="text text-danger">*</span></label>
                        <input class="txtUserName form-control" type="text" id="" name="name"
                            value="{{Auth::user()->name}}" minlength="5" />
                        @if($errors->has('name'))
                        <span style="margin-left: 2rem" class="text text-danger">{{$errors->first('name')}}</span>
                        @endif
                        <label for="">Email <span class="text text-danger">*</span></label>
                        <input class="txtEmail form-control" type="email" id="" name="email"
                            value="{{Auth::user()->email}}" />
                        @if($errors->has('email'))
                        <span style="margin-left: 2rem" class="text text-danger">{{$errors->first('email')}}</span>
                        @endif
                        <label for="">Tel <span class="text text-danger">*</span></label>
                        <input class="txtTel form-control" type="text" id="" name="phone"
                            value="{{Auth::user()->phone}}" />
                        @if($errors->has('phone'))
                        <span style="margin-left: 2rem" class="text text-danger">{{$errors->first('phone')}}</span>
                        @endif
                    </div>
                    <div class="btnEdit text-center">
                        <input class="btn btn-danger" type="submit" id="" name="" value="Edit" />
                    </div>
                </div>
        </form>
        <div class="tab-pane" id="frmEditB">
            <form class="frmEdit" action="{{route('users.edit-password', Auth::user()->id)}}" method="POST"
                enctype="multipart/form-data">
                @method('post')
                @csrf
                <div class="form-group">
                    <label for="">Old Password <span class="text text-danger">*</span></label>
                    <input class="txtOldPassword form-control" type="password" id="" name="oldPassword" value="" />
                    @if($errors->has('oldPassword'))
                    <span style="margin-left: 2rem" class="text text-danger">{{$errors->first('oldPassword')}}</span>
                    @endif

                    <label for="">New Password <span class="text text-danger">*</span></label>
                    <input class="txtNewPassword form-control" type="password" id="" name="newPassword" />
                    @if($errors->has('newPassword'))
                    <span style="margin-left: 2rem" class="text text-danger">{{$errors->first('newPassword')}}</span>
                    @endif

                    <label for="">Confirm Password <span class="text text-danger">*</span></label>
                    <input class="txtConfirmPassword form-control" type="password" id=""
                        name="newPassword_confirmation" />
                    @if($errors->has('newPassword_confirmation'))
                    <span style="margin-left: 2rem"
                        class="text text-danger">{{$errors->first('newPassword_confirmation')}}</span>
                    @endif
                </div>
                <div class="btnEdit text-center">
                    <input class="btn btn-danger" type="submit" id="" name="" value="Edit" />
                </div>
            </form>
        </div>
    </div>
</div>
@endsection