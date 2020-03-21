@extends('layouts.admin')

@section('title', 'Product List')

@section('page_title')
<p>User List</p>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <form action="" class="form-inline form-group">
            <input type="text" value="{{$keyword}}" class="form-control" name="keyword">
            <button type="submit" class="btn btn btn-info"><i class="nav-icon fas fa-search"></i></button>
        </form>
        <table class="table table-bordered table-valign-middle">
            <thead>
                <tr class="text-center">
                    <th>STT</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th><a class="btn btn-sm btn-success" href="{{route('users.create')}}">
                        <i class="fas fa-plus"></i> Add New
                    </a></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr class="text-center">
                    <td>{{$loop->iteration}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td style="width: 24%;" class="text-center">
                        <a class="btn btn-primary btn-sm" href="{{route('users.show', $user->id)}}"><i class="fas fa-folder"></i> View</a>

                        <a class="btn btn-info btn-sm" href="{{route('users.edit', $user->id)}}"><i class="fas fa-pencil-alt"></i> Edit</a>

                        <form class="d-inline-block" action="{{ url('admin/users', ['id' => $user->id]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm" href="{{route('users.destroy', $user->id)}}">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$users->links()}}
    </div>
</div>
@endsection
