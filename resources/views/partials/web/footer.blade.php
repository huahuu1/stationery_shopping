@php
$categories = App\Models\Category::where('parent_id', 0)->get();
@endphp

<footer class="footer-wrapper" id="footer">
    <section class="footer">
        <div class="line"></div>
        <div class="footer-content">
            <div class="top-content row">
                <div class="company-info col-sm-6 col-lg-3">
                    <div class="title">
                        <div class="title-img"><img src="{{asset('web/images/logo/logo-officemona.png')}}" /></div>
                    </div>
                    <div class="content">
                        <div class="icon-box d-flex">
                            <div class="icon-box-img"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="icon-box-text"><span>319 C16 Ly Thuong Kiet, Ward 15, District 11, Ho Chi Minh City</span>
                            </div>
                        </div>
                        <div class="icon-box d-flex">
                            <div class="icon-box-img"><i class="fas fa-phone-square"></i></div>
                            <div class="icon-box-text"><span>0366 613 467</span></div>
                        </div>
                        <div class="icon-box d-flex">
                            <div class="icon-box-img"><i class="fas fa-envelope"></i></div>
                            <div class="icon-box-text"><span>demonhunter@gmail.com</span></div>
                        </div>
                        <div class="icon-box d-flex">
                            <div class="icon-box-img"><i class="fab fa-skype"></i></div>
                            <div class="icon-box-text"><span>demonhunterp</span></div>
                        </div>
                    </div>
                </div>
                <div class="top-seller col-sm-6 col-lg-3">
                    <div class="title">
                        <h3>top products</h3>
                    </div>
                    <div class="content row">
                        <div class="content-item col-lg-4"><img src="{{asset('web/images/product-detail/bam_lo_978-600x600.jpg')}}"
                                alt="" /></div>
                        <div class="content-item col-lg-4"><img src="{{asset('web/images/product-detail/ban-cat-giay-a3-600x600.jpg')}}" alt="" />
                        </div>
                        <div class="content-item col-lg-4"><img src="{{asset('web/images/product-detail/bk-50la-600x600.jpg')}}"
                                alt="" /></div>
                        <div class="content-item col-lg-4"><img
                                src="{{asset('web/images/product-detail/display-books-a4-40-pockets-600x600.jpg')}}" alt="" />
                        </div>
                        <div class="content-item col-lg-4"><img
                                src="{{asset('web/images/product-detail/giay-lua-600x600.jpg')}}" alt="" /></div>
                        <div class="content-item col-lg-4"><img src="{{asset('web/images/product-detail/pencil-marco-600x600.jpg')}}" alt="" />
                        </div>
                    </div>
                </div>
                <div class="menu col-sm-6 col-lg-3">
                    <div class="title">
                        <h3>menu</h3>
                    </div>
                    <div class="content">
                        <div class="icon-box d-flex">
                            <div class="icon-box-img"><i class="fas fa-book"></i></div>
                            <div class="icon-box-text"><a href="{{route('home-page')}}">Home Page</a></div>
                        </div>
                        <div class="icon-box d-flex">
                            <div class="icon-box-img"><i class="fas fa-book"></i></div>
                            <div class="icon-box-text"><a href="{{route('categories.all')}}">Categories</a></div>
                        </div>
                        <div class="icon-box d-flex">
                            <div class="icon-box-img"><i class="fas fa-book"></i></div>
                            <div class="icon-box-text"><a href="{{url('admin')}}">Admin</a></div>
                        </div>

                    </div>
                </div>
                <div class="list-product col-sm-6 col-lg-3">
                    <div class="title">
                        <h3>categories</h3>
                    </div>
                    <div class="content">
                        <div class="content-part row">
                            @foreach ($categories as $item)
                            <div class="icon-box d-flex col-6">
                                <div class="icon-box-img"><i class="fas fa-book"></i></div>
                                <div class="icon-box-text"><a href="{{URL::to('categories/'.$item->slug)}}">{{$item->name}}</a></div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-content row">
                <div class="social-network col-sm-6 col-lg-3">
                    <div class="divider-line"></div>
                    <div class="title">
                        <h3>connect with us</h3>
                    </div>
                    <div class="content d-flex">
                        <div class="icon-box d-flex">
                            <div class="icon-box-img"><i class="fab fa-facebook-f"></i></div>
                        </div>
                        <div class="icon-box d-flex">
                            <div class="icon-box-img"><i class="fab fa-instagram"></i></div>
                        </div>
                        <div class="icon-box d-flex">
                            <div class="icon-box-img"><i class="fab fa-twitter"></i></div>
                        </div>
                    </div>
                </div>
                <div class="payments col-sm-6 col-lg-3">
                    <div class="divider-line"></div>
                    <div class="title">
                        <h3>accept payment</h3>
                    </div>
                    <div class="content"><img src="{{asset('web/images/payment/image-paypal.png')}}" alt="" /></div>
                </div>
                <div class="register col-sm-12 col-lg-6">
                    <div class="divider-line"></div>
                    <div class="wrapper-regiter d-flex">
                        <div class="register-text col-sm-12 col-lg-6">
                            <div class="title">
                                <h3>register</h3>
                            </div>
                            <div class="content">
                                <p>Sign up to receive the latest information from us.</p>
                            </div>
                        </div>
                        <div class="register-button col-sm-12 col-lg-6 d-flex">
                            <div class="btn btn-danger"><a href="{{route('register')}}">REGISTER</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="backtoTop"><i class="fas fa-chevron-up"></i></div>
</footer>