@php
$categories = App\Models\Category::where('parent_id', 0)->get();
@endphp

<section class="menu-nav position-relative">
    <div class="container">
        <div class="top-navbar flex-row">
            <div class="logo"><a class="nav-brand" href="{{route('home-page')}}" alt="logo"><img
                        src="{{asset('web/images/logo/logo-officemona.png')}}" alt="logo" /></a></div>
            <div class="search-form-wrapper">
                <div class="search-form">
                    <form action="" method="get">
                        <div class="nav-search flex-row">
                            <div class="flex-col flex-grow">
                                <input class="search-field mb-0" type="search" placeholder="Quick Search Product ..." />
                            </div>
                            <div class="flex-col">
                                <button class="search-submit mb-0 btn" type="submit"><i
                                        class="icon-search fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="account justify-content-center">
                <ul class="nav">
                    <li class="account-item"><a class="nav-top-link nav-top-not-logged-in" href="{{route('register')}}"><span>sign up</span></a></li>
                    <li class="header-divider"></li>
                    <li class="account-item"><a class="nav-top-link nav-top-not-logged-in" href="{{route('login')}}"><span>sign in</span></a>
                    </li>
                    <li class="header-divider"></li>
                    <li class="cart-item"><a><span class="header-cart-title">cart&nbsp</span><span
                                class="cart-price"><span class="amount">/ 0&nbsp<span class="symbol">đ</span><i
                                        class="fas fa-shopping-basket icon-basket"></i></span></span></a></li>
                </ul>
            </div>
        </div>
        <div class="bot-navbar flex-row">
            <ul class="nav">
                <li class="hover-nav"><a href="{{route('categories.all')}}"><i class="fas fa-star"></i><span>help you choose</span></a></li>

                @foreach ($categories as $item)

                <li class="hover-nav"><a href="{{URL::to('categories/'.$item->slug) }}"><span>{{$item->name}}</span><i
                            class="fas fa-chevron-down arrow-down"></i></a>
                    <ul class="nav-dropdown">
                        @foreach ($item->getCategoriesByParentId($item->id) as $row)
                        <li class="nav-hover-dropdown"><a href="#">{{$row->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                @endforeach

            </ul>
        </div>
    </div>
</section>