@extends('layouts.admin')

@section('title', 'Supplier List')

@section('page_title')
<p>Supplier Detail</p>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr class="text-center">
                    <th>Supplier Image</th>
                    <th>Supplier Name</th>
                </tr>

            </thead>
            <tbody>
                <tr>
                    <td><a href=""><img width="80" src="{{asset($supplier->logo)}}" alt=""></a></td>
                    <td>{{$supplier->name}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection