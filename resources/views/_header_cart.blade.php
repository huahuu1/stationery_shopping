{{-- <div class="col-lg-12 col-sm-12 col-12 main-section">
    <div class="dropdown">
        <button type="button" class="btn btn-info" data-toggle="dropdown">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
        </button>
    </div>
</div> --}}

<?php $total = 0 ?>
@foreach((array) session('cart') as $id => $details)
    <?php $total += $details['sell_price'] * $details['quantity'] ?>
@endforeach
@php
    $user = Auth::user();
    $totalCookie = 0;
    $countCart = 0;
    if($user) {
        $cart = json_decode(Cookie::get('cart_' . $user->id), true);
        if($cart) {
            $countCart = count($cart);
            foreach ($cart as $id => $details) {
                $totalCookie += $details['sell_price'] * $details['quantity'];
            }
        }
    }
@endphp

<a class="cart-title" href="{{route('carts.detail', Auth::user()->id ?? '')}}">
    <span class="header-cart-title">cart&nbsp</span>
    <span class="cart-price">
        <span class="amount">/ {{number_format($total) == 0 ? number_format($totalCookie) : number_format($total)}}&nbsp
            <span class="symbol">đ</span>
            <i class="fas fa-shopping-basket icon-basket"></i>
            <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) == 0 ? $countCart : count((array) session('cart'))}}</span>
        </span>
    </span>
</a>