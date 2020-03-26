@php
$categories = App\Models\Category::where('parent_id', 0)->get();
@endphp

<section class="menu-nav position-relative">
    <div class="container">
        <div class="top-navbar flex-row flex-wrap">
            <div class="logo flex-fill"><a class="nav-brand" href="{{route('home-page')}}" alt="logo"><img
                        src="{{asset('web/images/logo/logo-officemona.png')}}" alt="logo" /></a></div>
            <div class="search-form-wrapper flex-fill">
                <div class="search-form">
                    <form action="{{route('products.search')}}" method="get">
                        <div class="nav-search flex-row">
                            <div class="flex-col flex-grow">
                                <input class="search-field mb-0" type="search" placeholder="Quick Search Product ..." name="keyword"/>
                            </div>
                            <div class="flex-col">
                                <button class="search-submit mb-0 btn" type="submit"><i
                                        class="icon-search fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div style="padding: 1.5rem 0" class="account justify-content-center flex-fill">
                <ul class="nav">
                    @if (!Auth::user())
                        <li class='account-item'><a class='nav-top-link nav-top-not-logged-in' href='{{route('register')}}'><span>sign up</span></a></li>
                        <li class='header-divider'></li>
                        <li class='account-item'><a class='nav-top-link nav-top-not-logged-in' href='{{route('login')}}'><span>sign in</span></a></li>
                    @else
                        <div class="btn-group">
                            <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <a href=''>{{Auth::user()->email}}</a>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{route('users.edit-user', Auth::user()->id)}}">YOUR PROFILE</a>
                                <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('LOG OUT') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: block;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    @endif
                    <li class="header-divider"></li>

                    <li class="cart-item" id="header-bar">
                        @include('_header_cart')
                    </li>
                </ul>
            </div>
        </div>
        <div class="bot-navbar flex-row">
            <nav class="navbar navbar-expand-md">
                <div class="navbar-brand"><h4 style="margin-bottom: 0; padding-left: 1rem">MENU</h4></div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                  <span>☰</span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="nav navbar-nav">
                        <li class="hover-nav nav-item"><a class="nav-link" href="{{route('categories.all')}}"><i class="fas fa-star"></i><span>help you choose</span></a></li>

                        @foreach ($categories as $item)

                        <li class="hover-nav nav-item"><a class="nav-link" href="{{URL::to('categories/'.$item->slug) }}"><span>{{$item->name}}</span><i
                                    class="fas fa-chevron-down arrow-down"></i></a>
                            <ul class="nav-dropdown">
                                @foreach ($item->getCategoriesByParentId($item->id) as $row)
                                <li class="nav-hover-dropdown"><a href="{{URL::to('categories/'.$row->slug)}}">{{$row->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </nav>
        </div>
    </div>
</section>