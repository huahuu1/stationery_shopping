@extends('layouts.admin')

@section('title', 'User Detail')

@section('page_title')
<p>User Details</p>
@endsection

@section('breadcrumb', 'User Detail')

@section('content')
<div class="row">
    <div class="col-md-12 table-responsive">
        <table class="table table-bordered table-valign-middle">
            <thead>
                <tr class="text-center">
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->getRoleName($user->role)}}</td>
                </tr>
            </tbody>
        </table>
        <a class="btn btn-secondary float-right" href="{{route('users.index')}}">Come Back</a>
    </div>
</div>
@endsection