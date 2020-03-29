<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>@yield('title')</title>
    @include('partials.web.styles')
  </head>
  <body>
    <div class="container-fluid">
      <div class="wrapper-nav position-relative">
        @include('partials.web.navbar')
        <section class="banner">
          <div class="owl-carousel owl-theme banner-inner slider-main">
            <div class="item">
              <div class="owl-lazy" data-src="http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/banner-01.jpg"></div>
              <div class="text-box" id="text-box-1">
                <div class="text">
                  <div class="text-inner text-left">
                    <h3>Deals up to</h3>
                    <h2><span style="font-size: 160%;" data-text-color="primary"></span><strong>10% off</strong></h2>
                    <p>Free Ship Even 1 Product, Free Return Shipping, Product Variety, Any Purchase</p><a class="button white is-outline lowercase" href="http://mauweb.monamedia.net/officexinh/cua-hang/" target="_self"><span>Buy Now</span></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="owl-lazy" data-src="http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/banner-02.jpg"></div>
              <div class="text-box" id="text-box-2">
                <div class="text">
                  <div class="text-inner text-center">
                    <h3>Everything you need</h3>
                    <h2><span style="font-size: 120%;" data-text-color="primary"></span><strong>FOR OFFICE</strong></h2>
                    <p>STRONG DISCOUNT FOR EACH PRODUCT</p><a class="button white is-outline lowercase" href="http://mauweb.monamedia.net/officexinh/cua-hang/" target="_self"><span>Buy Now</span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      @yield('feature_item')

      <section class="container supplier-gallery">
        <div class="productOthers">
          <div class="container-fluid">
            <h3 class="text-center">suppliers</h3>
            <div class="owl-carousel owl-theme slider-supplier banner-inner">
                @foreach ($sups as $supplier)
                <div class="item">
                    <div class="supplier-item">
                        <div class="product-image"><img src="{{$supplier->logo}}" alt=""/></div>
                    </div>
                </div>
                @endforeach
            </div>
          </div>
        </div>
      </section>
      @include('partials/web/footer')
    </div>
    @include('partials.web.scripts')
  </body>
  <script>
    $(window).resize(function(){
      var w = $(window).width();
      if(w < 768) {
        $('.banner').removeClass('container-fluid');
        $('.banner').addClass('container');
      } else {
        $('.banner').addClass('container-fluid');
        $('.banner').removeClass('container');
      }
    });
  </script>
</html>