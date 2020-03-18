@extends('layouts.admin')

@section('title', 'User')

@section('page_title')
<p>User</p>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        {{-- <form action="" class="form-inline form-group">
            <input type="text" value="{{$keyword}}" class="form-control" name="keyword">
            <button type="submit" class="btn btn btn-info"><i class="nav-icon fas fa-search"></i></button>
        </form> --}}
        <table class="table table-bordered table-valign-middle">
            <thead>
                <tr class="text-center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>
                        <a class="btn btn-sm btn-success" href="{{route('users.create')}}">
                            <i class="fas fa-plus"></i> Add New
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr class="text-center">
                    <td>{{$loop->iteration}}</td> {{-- get the current number of iterations --}}
                    <td class="text-left">{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td>{{$user->role}}</td>
                    <td style="width: 25%;" class="text-center">
                        <a class="btn btn-primary btn-sm" href="{{route('users.show', $user->id)}}"><i class="fas fa-folder"></i> View</a>
                        <a class="btn btn-info btn-sm" href="{{route('users.edit', $user->id)}}"><i class="fas fa-pencil-alt"></i> Edit</a>
                        <form class="d-inline-block" action="{{url('admin/users', ['id' => $user->id])}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this?')" href="{{route('users.destroy', $user->id)}}">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
