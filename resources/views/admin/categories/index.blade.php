@extends('layouts.admin')

@section('title', 'Product List')

@section('page_title')
<p>Category List</p>
@endsection

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
                    <th>STT</th>
                    <th>Name</th>
                    <th>Functions</i></a></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr class="text-center">
                    <td>{{$loop->iteration}}</td>
                    <td>{{$category->name}}</td>
                    <td style="width: 9%;" class="text-center">
                        <a class="btn btn-primary btn-sm" href="{{route('categories.show', $category->id)}}">
                            <i class="fas fa-folder"></i> View
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$categories->links()}}
    </div>
</div>
@endsection
