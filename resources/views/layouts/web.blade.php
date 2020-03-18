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
        <section class="banner">
          <div class="owl-carousel owl-theme banner-inner slider-main">
            <div class="item">
              <div class="owl-lazy" data-src="http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/banner-01.jpg"></div>
              <div class="text-box" id="text-box-1">
                <div class="text">
                  <div class="text-inner text-left">
                    <h3>Ưu đãi lên đến</h3>
                    <h2><span style="font-size: 160%;" data-text-color="primary"></span><strong>10% off</strong></h2>
                    <p>Free Ship Dù Chỉ 1 Sản Phẩm (Nội Thành HCM), Đổi Trả Hàng Miễn Phí, Đa Dạng Sản Phẩm, Mua Gì Cũng Có</p><a class="button white is-outline lowercase" href="http://mauweb.monamedia.net/officexinh/cua-hang/" target="_self"><span>Mua Ngay</span></a>
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

      @include('web.products.categories-products')

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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{asset('web/js/owl-carousel.js')}}"></script>
    <script type="text/javascript" src="{{asset('web/js/navigation.js')}}"></script>
    <script type="text/javascript" src="{{asset('web/js/product-detail.js')}}"></script>
    <script type="text/javascript" src="{{asset('web/js/product.js')}}"></script>
    <script type="text/javascript" src="{{asset('web/js/back-to-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('web/js/index.js')}}"></script>
  </body>
</html>