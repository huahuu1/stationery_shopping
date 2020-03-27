@extends('layouts.admin')

@section('title', 'Supplier List')

@section('page_title')
<p>Supplier List</p>
@endsection

@section('breadcrumb', 'Supplier List')

@section('content')
<div class="row">
    <div class="col-md-12 table-responsive-md">
        <form action="" class="form-inline form-group">
            <input style="height: 2.5rem; border-top-right-radius: 0; border-bottom-right-radius: 0; width: 30%" type="text" value="{{$keyword}}" class="form-control" name="keyword">
            <button style="height: 2.5rem; border-top-left-radius: 0; border-bottom-left-radius: 0" type="submit" class="btn btn btn-info"><i class="nav-icon fas fa-search"></i></button>
        </form>
        <table class="table table-bordered table-valign-middle">
            <thead>
                <tr class="text-center">
                    <th>STT</th>
                    <th>Name</th>
                    <th>Logo</th>
                    <th>Functions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($suppliers as $supplier)
                <tr class="text-center">
                    <td>{{$loop->iteration}}</td>
                    <td>{{$supplier->name}}</td>
                    <td><a href=""><img width="100" src="{{$supplier->logo}}" alt=""></a></td>
                    <td style="width: 24%;" class="text-center">
                        <form class="d-inline-block" action="{{ url('admin/suppliers', ['id' => $supplier->id]) }}" method="GET">
                            <button type="submit" class="btn btn-primary btn-sm" href="{{route('suppliers.show', $supplier->id)}}">
                                <i class="fas fa-folder"></i> View
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$suppliers->links()}}
    </div>
</div>
@endsection