@extends('layouts.admin')

@section('title', 'Category Detail')

@section('page_title')
<p>Category Detail</p>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered table-valign-middle">
            <thead>
                <tr class="text-center">
                    <th>Category Name</th>
                    <th colspan="3">Product List By Category</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category->products as $product)
                    @php
                        $count = $category->products->count() + 1;
                    @endphp
                @endforeach
                <tr class="text-center">
                    <td rowspan="{{ $count ?? '' }}">{{$category->name}}</td>
                    <th>STT</th>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    @php
                        if($category->products->count() == 0) {
                            echo '<tr><td colspan="4" class="text-center">There are no products to list in this category</td></tr>';
                        }
                    @endphp
                    @foreach ($category->products as $product)
                    <tr>
                        <td class="text-left mx-auto">
                            <ul style="list-style: none">
                                <li>{{$loop->iteration}}</li>
                            </ul>
                        </td>
                        <td>
                            <ul class="d-flex" style="list-style: none">
                                <li><img width="60" src="{{asset($product->image)}}" alt=""></li>
                            </ul>
                        </td>
                        <td>
                            <ul class="d-flex" style="list-style: none">
                                <li>{{$product->name}}</li>
                            </ul>
                        </td>
                    </tr>
                    @endforeach
                </tr>
            </tbody>
        </table>
        <a class="btn btn-secondary float-right" href="{{route('categories.index')}}">Come Back</a>
    </div>
</div>
@endsection