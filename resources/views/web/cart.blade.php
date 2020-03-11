@extends('layouts.web')
@section('styles')
<link href="{{asset('web/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('web/css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{asset('web/css/prettyPhoto.css')}}" rel="stylesheet">
<link href="{{asset('web/css/price-range.css')}}" rel="stylesheet">
<link href="{{asset('web/css/animate.css')}}" rel="stylesheet">
<link href="{{asset('web/css/main.css')}}" rel="stylesheet">
<link href="{{asset('web/css/responsive.css')}}" rel="stylesheet">
     
<link rel="shortcut icon" href="{{asset('web/images/ico/favicon.ico')}}">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('web/images/ico/apple-touch-icon-144-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('web/images/ico/apple-touch-icon-114-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('web/images/ico/apple-touch-icon-72-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" href="{{asset('web/images/ico/apple-touch-icon-57-precomposed.png')}}">


@endsection
@section('feature_items')
 <h1>Cart Detail</h1> 
 <div class="table-responsive cart_info">
    <table class="table table-condensed">
        <thead>
            
            <tr class="cart_menu" style="background: #FE980F;">
                <td class="image">Item</td>
                <td class="description"></td>
                <td class="price">Price</td>
                <td class="quantity">Quantity</td>
                <td class="total">Total</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="cart_product">
                    <a href=""><img src="images/cart/one.png" alt=""></a>
                </td>
                <td class="cart_description">
                    <h4><a href="">Colorblock Scuba</a></h4>
                    <p>Web ID: 1089772</p>
                </td>
                <td class="cart_price">
                    <p>$59</p>
                </td>
                <td class="cart_quantity">
                    <div class="cart_quantity_button">
                        <a class="cart_quantity_up" href=""> + </a>
                        <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                        <a class="cart_quantity_down" href=""> - </a>
                    </div>
                </td>
                <td class="cart_total">
                    <p class="cart_total_price">$59</p>
                </td>
                <td class="cart_delete">
                    <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                </td>
            </tr>

            <tr>
                <td class="cart_product">
                    <a href=""><img src="images/cart/two.png" alt=""></a>
                </td>
                <td class="cart_description">
                    <h4><a href="">Colorblock Scuba</a></h4>
                    <p>Web ID: 1089772</p>
                </td>
                <td class="cart_price">
                    <p>$59</p>
                </td>
                <td class="cart_quantity">
                    <div class="cart_quantity_button">
                        <a class="cart_quantity_up" href=""> + </a>
                        <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                        <a class="cart_quantity_down" href=""> - </a>
                    </div>
                </td>
                <td class="cart_total">
                    <p class="cart_total_price">$59</p>
                </td>
                <td class="cart_delete">
                    <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                </td>
            </tr>
            <tr>
                <td class="cart_product">
                    <a href=""><img src="images/cart/three.png" alt=""></a>
                </td>
                <td class="cart_description">
                    <h4><a href="">Colorblock Scuba</a></h4>
                    <p>Web ID: 1089772</p>
                </td>
                <td class="cart_price">
                    <p>$59</p>
                </td>
                <td class="cart_quantity">
                    <div class="cart_quantity_button">
                        <a class="cart_quantity_up" href=""> + </a>
                        <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                        <a class="cart_quantity_down" href=""> - </a>
                    </div>
                </td>
                <td class="cart_total">
                    <p class="cart_total_price">$59</p>
                </td>
                <td class="cart_delete">
                    <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection