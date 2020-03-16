@extends('layouts.admin')

@section('title', 'User')

@section('page_title')
<p>User</p>
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
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Supplier</th>
                    <th>Status</th>
                    <th>
                        <a class="btn btn-sm btn-success" href="{{route('products.create')}}">
                            <i class="fas fa-plus"></i> Add New
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr class="text-center">
                    <td>{{$loop->iteration}}</td>
                    <td><a href="{{route('products.show', $product->id)}}"><img width="100" src="{{asset($product->image)}}" alt=""></a>  </td>
                    <td class="text-left">{{$product->name}}</td>
                    <td>{{$product->sell_price}}</td>
                    <td>{{ $product->getCategoryName($product->category_id) }}</td>
                    <td>{{ $product->getSupplierName($product->supplier_id) }}</td>
                    <td>{{ $product->getStatusName($product->status) }}</td>
                    <td style="width: 24%;" class="text-center">
                        <a class="btn btn-primary btn-sm" href="{{route('products.show', $product->id)}}"><i class="fas fa-folder"></i> View</a>
                        <a class="btn btn-info btn-sm" href="{{route('products.edit', $product->id)}}"><i class="fas fa-pencil-alt"></i> Edit</a>
                        <form class="d-inline-block" action="{{ url('admin/products', ['id' => $product->id]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm" href="{{route('products.destroy', $product->id)}}">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$products->links()}}
    </div>
</div>
@endsection


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <title>Document</title>
        @include('partials.web.styles')
    </head>
    <body>
        <div class="container-fluid">
            <div class="wrapper-nav position-relative">
                @include('partials.web.navbar')
            <div class="accountManagement">
                <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" href="#frmAccountLogIn" data-toggle="tab">LOG IN</a></li>
                <li class="nav-item"><a class="nav-link" href="#frmAccountSignUp" data-toggle="tab">SIGN UP</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="frmAccountLogIn">
                        <form class="frmAccountLogIn" action="" method="">
                            <div class="form-group">
                                <label for="">User Name</label>
                                <input class="txtUserName form-control" type="text" id="" name="" maxlength="10"/>
                                <label for="">Password</label>
                                <input class="txtPassword form-control" type="password" id="" name=""/>
                                <div class="row logIn">
                                <input class="btnLogIn" type="submit" id="" name="" value="Log In"/>
                                <input class="checkRememberPassword" type="checkbox" id="" name="" value="RememberPassword"/>
                                <p>Remember Password</p>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="frmAccountSignUp">
                        <form class="frmAccountSignUp" action="" method="">
                            <div class="row">
                                <div class="form-group col-6 col-sm-6 userName">
                                    <label for="">User Name *</label>
                                    <input class="txtUserName form-control" type="text" id="" name="" maxlength="10"/>
                                </div>
                                <div class="form-group col-6 col-sm-6 password">
                                    <label for="">Password *</label>
                                    <input class="txtPassword form-control" type="password" id="" name=""/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6 col-sm-6 lastName">
                                    <label for="">Last Name *</label>
                                    <input class="txtLastName form-control" type="text" id="" name="" maxlength="10"/>
                                </div>
                                <div class="form-group col-6 col-sm-6 firstName">
                                    <label for="">First Name *</label>
                                    <input class="txtFirstName form-control" type="text" id="" name="" maxlength="10"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Company</label>
                                <input class="form-control" type="text" id="" name="" maxlength="10"/>
                                <label for="">Address *</label>
                                <input class="form-control" type="text" id="" name="" maxlength="10"/>
                                <label for="">Zip Code</label>
                                <input class="form-control" type="text" id="" name="" maxlength="10"/>
                                <label for="">Tel *</label>
                                <input class="form-control" type="text" id="" name="" maxlength="10"/>
                                <label for="">Email *</label>
                                <input class="form-control" type="text" id="" name="" maxlength="10"/>
                                <input class="btnSignUp" type="submit" id="" name="" value="Sign Up"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @include('partials.web.footer')
        </div>
    </body>
</html>

