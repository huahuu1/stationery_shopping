@extends('layouts.web')
{{-- @section('styles')
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


@endsection --}}
@section('feature_items')
<div class="container" style="padding: 5rem 0">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-7 cartDetails">
        <form action="" method="">
          <table>
            <thead>
              <tr>
                <th colspan="3">SẢN PHẨM</th>
                <th>GIÁ</th>
                <th>SỐ LƯỢNG</th>
                <th>TỔNG CỘNG</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="productRemove" style="text-align: center"><i class="far fa-times-circle"></i></td>
                <td class="productThumbnail"><a href="#"><img src="../../../dist/assets/images/bk-50la-600x600.jpg" width="100px" height="100px" alt=""/></a></td>
                <td class="productName">Bấm Kim 50LA - 240 Tờ</td>
                <td class="productPrice" style="font-weight: 500">350.000đ</td>
                <td class="productQuantity">
                  <div class="quantityControl d-flex">
                    <input class="btnMinus" type="button" id="btnMinus" name="btnMinus" value="-"/>
                    <input class="txtQuantity" type="text" id="txtQuantity" name="txtQuantity" size="2.5" value="0"/>
                    <input class="btnPlus" type="button" id="btnPlus" name="btnPlus" value="+"/>
                  </div>
                </td>
                <td class="productTotal" style="font-weight: 500">1.750.000đ</td>
              </tr>
              <tr>
                <td colspan="6">
                  <div class="row">
                    <div class="btnCartOut col-sm-6 col-md-6 col-lg-6"><a href="">← CONTINUE TO VIEW PRODUCTS</a></div>
                    <input class="btnCartUpdate col-sm-5 col-md-5 col-lg-5" type="submit" id="" name="" value="UPDATE SHOPPING CART"/>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </form>
      </div>
      <div class="col-12 col-sm-12 col-md-5 cartContext">
        <table>
          <thead>
            <tr>
              <th colspan="2">BILL</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Amount</td>
              <td style="font-weight: 500; text-align: right">5.000.000đ</td>
            </tr>
            <tr>
              <td>Delivery Charge</td>
              <td style="text-align: right">50.000đ</td>
            </tr>
            <tr>
              <td>Total</td>
              <td style="font-weight: 500; text-align: right">5.050.000đ</td>
            </tr>
          </tbody>
        </table>
        <div class="cartPayment"><a href="">PROCEED TO PAYMENT</a></div>
        <form action="" method="">
          <div class="d-flex"><i class="fas fa-tag"></i>
            <h3>Coupon Code</h3>
          </div>
          <input type="text" id="" name="" maxlength="10"/>
          <input type="submit" id="" name="" value="Apply"/>
        </form>
      </div>
    </div>
  </div>
@endsection