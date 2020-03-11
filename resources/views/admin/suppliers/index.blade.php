@extends('layouts.admin')

@section('title', 'Suppliers List')

@section('page_title')
Supplier List
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr class="text-center">
                    <th>STT</th>
                    <th>Name</th>
                    <th>Logo</th>
                    <th>
                        <a class="btn btn-sm btn-success" href="{{route('suppliers.create')}}">
                            <i class="fas fa-plus"></i> Add New
                        </a>
                    </th>
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
                        <form class="d-inline-block" action="{{ url('admin/suppliers', ['id' => $supplier->id]) }}" method="GET">
                            <button type="submit" class="btn btn-info btn-sm" href="{{route('suppliers.edit', $supplier->id)}}">
                                <i class="fas fa-pencil-alt"></i> Edit
                            </button>
                        </form>
                        <form class="d-inline-block" action="{{ url('admin/suppliers', ['id' => $supplier->id]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm" href="{{route('suppliers.destroy', $supplier->id)}}">
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