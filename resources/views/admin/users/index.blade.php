@extends('layouts.admin')

@section('title', 'User List')

@section('page_title')
<h5>User</h5>
@endsection

{{-- @section('scriptA')
  <script src="https://code.jquery.com/jquery-latest.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
@endsection --}}

@section('content')
<div class="row">
    <div class="col-md-12">
        <form action="" class="form-inline form-group">
            <input style="height: 2.5rem; border-top-right-radius: 0; border-bottom-right-radius: 0" type="text" value="{{$keyword}}" class="form-control" name="keyword">
            <button style="height: 2.5rem; border-top-left-radius: 0; border-bottom-left-radius: 0" type="submit" class="btn btn btn-info"><i class="nav-icon fas fa-search"></i></button>
        </form>
        <table class="table table-bordered table-valign-middle">
            <thead>
                <tr class="text-center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
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
                    <td>{{$loop->iteration}}</td>
                    <td class="text-left">{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->getRoleName($user->role)}}</td>

                    <td style="width: 25%">
                        <a style="margin-top: 1rem" class="btn btn-primary btn-sm" href="{{route('users.show', $user->id)}}"><i class="fas fa-folder"></i> View</a>

                        <a style="margin-top: 1rem" class="btn btn-info btn-sm" href="{{route('users.edit', $user->id)}}"><i class="fas fa-pencil-alt"></i> Edit</a>

                        <form class="d-inline-block" action="{{ url('admin/users', ['id' => $user->id]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button style="margin-top: 1rem" type="submit" class="btn btn-danger btn-sm btnDelete" onclick="return confirmDelete()" rel="{{route('users.destroy', $user->id)}}">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                        {{-- <form class="d-inline-block blog-form" action="" method="">
                            <button style="margin-top: 1rem" type="submit" id="btnDelete" class="btn btn-danger btn-sm btnDelete" rel="">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form> --}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{-- <div style="visibility: hidden; position: absolute; left: 50%; top: 25%; border: 0.15rem solid red" id="modalConfirm">
            <table>
                <thead>
                    <tr>
                        <th colspan="2">Delete Confirm</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="submit" value="Yes" class="btn btn-danger btnYes" /></td>
                        <td><input type="submit" value="No" class="btn btn-info btnNo" /></td>
                    </tr>
                </tbody>
            </table>
        </div> --}}
        {{$users->links()}}
    </div>

</div>
@endsection
<script type="text/javascript">

</script>
