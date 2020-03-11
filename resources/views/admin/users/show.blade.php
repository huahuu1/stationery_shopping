@extends('layouts.admin')

@section('title', 'Product List')

@section('page_title')
<p>Category Detail</p>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <h2>Category Name: {{$user->name}}</h2>
        <hr>
        <h2>User Avatar</h2>
        <div>
            <img width="300" src="{{$user->profile->avatar}}" alt="">
        </div>
        {{-- @foreach ($category->products as $product)
        <ul>
            <li>{{ $product->name }}</li>
        </ul>
        @endforeach --}}
        
    </div>
</div>
@endsection