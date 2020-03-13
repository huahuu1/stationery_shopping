@extends('layouts.admin')

@section('title', 'User List')

@section('page_title')
<p>User Detail</p>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered table-valign-middle">
            <thead>
                <tr class="text-center">
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                </tr>
            </tbody>
        </table>
        <a class="btn btn-secondary float-right" href="{{route('users.index')}}">Come Back</a>
    </div>
</div>
@endsection