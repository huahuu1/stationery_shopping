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
                    <h3>Tất cả những thứ bạn cần</h3>
                    <h2><span style="font-size: 120%;" data-text-color="primary"></span><strong>CHO VĂN PHÒNG</strong></h2>
                    <p>GIẢM GIÁ MẠNH CHO MỖI SẢN PHẨM</p><a class="button white is-outline lowercase" href="http://mauweb.monamedia.net/officexinh/cua-hang/" target="_self"><span>Mua Ngay</span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <section class="product-content">
        <div class="tabs">
          <div class="tabbed-product">
            <ul class="nav-center nav navbar tab-links">
              <li class="active"><a href="#tab_dung-cu-van-phong">dụng cụ văn phòng</a></li>
              <li><a href="#tab_giay">giấy</a></li>
              <li><a href="#tab_bia-ho-so">bìa hồ sơ</a></li>
              <li><a href="#tab_but-viet">bút viết</a></li>
              <li><a href="#tab_tap-so">tập sổ</a></li>
            </ul>
          </div>
          <div class="wrapper-product">
            <div class="tab-content">
              <div class="tab active" id="tab_dung-cu-van-phong">
                <div class="row row-cols-5">
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/Deli-7510-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Đóng số 10 tự động</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">800,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/rope-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Dây thừng lớn</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">8,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/DraftingCompass-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Compa kỹ thuật</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">50,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/YP003-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Keo khô</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">140,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/scotch-magic-810-invisible-tape-19mm-x-33m-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Băng keo dán tiền</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">45,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/jumbo-push-pins-100-count-colorful-clear-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Đinh ấn màu</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">10,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/kb-23-23-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Kim bấm 23/23 – 190 tờ</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">30,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/ban-cat-giay-a3-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Bàn cắt giấy A3</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">210,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/bam_lo_978-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Bấm 2 lổ 978 – 30 tờ</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">90,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/bk-50la-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Bấm kim 50LA – 210 tờ</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">350,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab" id="tab_giay">
                <div class="row">
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/8339a2117dc1707076a4e42cad823dfa-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Khăn giấy Pulppy</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">22,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/giay-lua-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Giấy lụa</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">5,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/Message-Flag-with-Dispenser-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Giấy notes – “Sign Here”</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">70,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/POS-Paper-receipt-bond-thermo-paper-roll-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Giấy cảm nhiệt POS</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">8,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/idea-a4-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Giấy Idea A4 80</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">75,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab" id="tab_bia-ho-so">
                <div class="row">
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/display-books-a4-40-pockets-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Bìa simili 40 lá</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">72,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/phan-trang-10-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Phân trang nhựa 10</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">10,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/master_ALV226-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Tấm lót cắt</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">150,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/bia-cong-10f-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Bìa còng King Jim 10f</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">85,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab" id="tab_but-viet">
                <div class="row">
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/got-but-chi-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Gọt chì siêu nhân Guangbo</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">45,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/montblanc-rollerball-mozart-refill-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Ruột bút Montblanc Legrand</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">280,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/stained-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Bút viết lên áo – giày</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">100,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/but-da-quang-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Bút lông bảng Pentel Maxiflo</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">35,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/pencil-marco-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Bút chì Macro</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">72,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/but-ky-parker-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Bút ký Parker</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">480,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab" id="tab_tap-so">
                <div class="row">
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/calendar-cute-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Bảng lịch văn phòng</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">40,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/small-notebook-companion-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Sổ da ghi chép</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">35,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="icon-intro">
        <div class="parallax"></div>
        <div class="wrapper-icon-box row">
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="col-inner">
              <div class="icon-box">
                <div class="icon-box-img">
                  <div class="icon">
                    <div class="icon-inner"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="315.944px" height="315.943px" viewBox="0 0 315.944 315.943" style="enable-background:new 0 0 315.944 315.943;" xml:space="preserve">
<g>
<g>
<path d="M198.587,206.706c0.231,0.031,0.464,0.047,0.696,0.047c0.774,0,1.539-0.168,2.246-0.49l111.254-50.746c2.305-1.047,3.564-3.552,3.043-6.033c-0.527-2.473-2.7-4.253-5.231-4.282c-0.907-0.011-90.988-1.928-130.961-81.815c-3.775-7.539-13.067-12.042-21.097-10.115L65.675,75.646c-4.482,1.081-8.052,3.937-9.79,7.831c-1.701,3.807-1.463,8.234,0.648,12.149C72.663,125.579,118.8,196.349,198.587,206.706z M65.739,87.882c0.364-0.81,1.26-1.448,2.463-1.732l92.865-22.373c0.459-0.113,0.949-0.169,1.45-0.169c2.984,0,6.117,1.943,7.456,4.617c30.987,61.923,89.817,80.18,120.604,85.554l-92.121,42.021c-73.915-10.421-117.192-76.998-132.43-105.29C65.67,89.831,65.325,88.821,65.739,87.882z"></path>
<rect y="251.726" width="196.331" height="11.385"></rect>
<polygon points="310.542,212.739 310.542,201.358 199.262,251.726 199.262,263.116 		"></polygon>
<path d="M310.542,197.383h-28.931l-83.014,39.624l-3.618,0.016c-50.195,0-90.624-8.88-120.849-19.311L0,247.586h196.673L310.542,197.383z"></path>
<path d="M21.146,181.398c21.574,13.632,81.923,45.331,176.217,44.788l109.877-52.445c0,0-5.922,0.032-15.625-0.253l-93.894,42.831l-1.534-0.2c-53.687-6.972-92.027-41.212-116.105-71.542l-57.997,26.259C16.654,173.299,16.103,178.214,21.146,181.398z"></path>
</g>
</svg>
                    </div>
                  </div>
                </div>
                <div class="icon-box-text">
                  <h3>CUNG CẤP VPP<br/>CHUYÊN DỤNG</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="col-inner">
              <div class="icon-box">
                <div class="icon-box-img">
                  <div class="icon">
                    <div class="icon-inner"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
<g>
<g>
<path d="M26.903,20.934c0.142-1.275,0.233-2.603,0.248-3.972v-0.843c-0.036-3.172-0.472-6.114-1.036-8.65l0.94-0.554c0.302,1.651,0.532,3.291,0.678,4.907c0.149,1.593,0.226,3.182,0.226,4.72c0,0.301,0.211,0.542,0.475,0.542s0.477-0.241,0.477-0.542c0-1.578-0.076-3.205-0.229-4.831c-0.28-3.075-0.836-6.229-1.641-9.372c-0.074-0.29-0.338-0.451-0.592-0.372c-0.25,0.085-0.394,0.387-0.322,0.673c0.146,0.563,0.269,1.125,0.4,1.686L25.484,4.94c-0.251-0.902-0.511-1.729-0.756-2.448h-0.415v-0.5L23.995,1.99V0.724C23.995,0.322,23.71,0,23.36,0c-0.35,0-0.633,0.323-0.633,0.724v1.269L22.412,1.99v0.497l-0.419,0.005c-1.063,3.114-2.359,8.044-2.422,13.627v0.843c0.015,1.369,0.104,2.696,0.248,3.972H26.903z"></path>
<polygon points="35.848,19.826 35.543,20.351 36.553,20.934 37.769,20.934 		"></polygon>
<path d="M43.934,10.29l-5.448-3.146c-0.771-0.445-1.766-0.176-2.213,0.593l-7.616,13.196h4.137l-0.461-0.267l6.701-11.602c0.408-0.709,0.144,0.23,0.396,0.378l3.281,1.896c0.258,0.147,0.938-0.555,0.526,0.156l-0.801,1.388l-1.937-1.12l-0.301,0.525l1.936,1.119l-0.86,1.489l-1.938-1.117l-0.301,0.525l1.936,1.117l-0.86,1.492l-1.938-1.117l-0.301,0.522l1.938,1.117l-0.859,1.492l-1.938-1.117l-0.302,0.523l1.936,1.118l-0.854,1.48h1.867l0.385-0.673l0.306-0.523l0.862-1.491l0.303-0.524l0.859-1.49l0.306-0.527l0.86-1.487l0.301-0.525l0.688-1.189C44.971,11.729,44.705,10.736,43.934,10.29z"></path>
<polygon points="7.052,26.803 8.949,26.803 13.461,50 36.535,50 41.049,26.803 42.944,26.803 42.944,22.728 7.052,22.728 		">
</polygon>
<path d="M11.679,20.934h1.216h0.409h1.225h0.409h1.226h0.406h1.206L11.225,9.571l-1.27-2.199C9.71,6.949,9.169,6.803,8.746,7.049L5.699,8.807c-0.422,0.245-0.565,0.784-0.323,1.207l1.676,2.903L11.679,20.934z M6.264,10.846l3.967-2.29l0.546,0.943l-3.97,2.291L6.264,10.846z"></path>
</g>
</svg>
                    </div>
                  </div>
                </div>
                <div class="icon-box-text">
                  <h3>CUNG CẤP VPP<br/>ĐA DẠNG</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="col-inner">
              <div class="icon-box">
                <div class="icon-box-img">
                  <div class="icon">
                    <div class="icon-inner"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512.013px" height="512.014px" viewBox="0 0 512.013 512.014" style="enable-background:new 0 0 512.013 512.014;" xml:space="preserve">
<g>
<path d="M31.972,256.007c10.344,0,20.469-5,26.656-14.25l6.875-10.313c3.438,13.969,15.469,24.563,30.5,24.563c17.688,0,32-14.313,32-32c0,17.688,14.313,32,32,32s32-14.313,32-32c0,17.688,14.313,32,32,32s32-14.313,32-32c0,17.688,14.312,32,32,32c17.687,0,32-14.313,32-32c0,17.688,14.312,32,32,32s32-14.313,32-32c0,17.688,14.312,32,32,32c15.062,0,27.062-10.594,30.5-24.563l6.875,10.313c6.156,9.25,16.312,14.25,26.656,14.25c6.094,0,12.25-1.75,17.719-5.375c14.719-9.813,18.688-29.688,8.875-44.375l-58.625-78.25h-128v-32h32c17.688,0,32-14.313,32-32v-32c0-17.688-14.312-32-32-32h-192c-17.688,0-32,14.313-32,32v32c0,17.688,14.313,32,32,32h32v32h-128l-58.625,78.25c-9.813,14.688-5.813,34.563,8.875,44.375C19.69,254.257,25.877,256.007,31.972,256.007z M312.002,24.007h40v24h-32v16h-8V24.007z M256.002,24.007h40v40h-40V24.007zM208.002,24.007h8v16h16v-16h8v40h-8v-16h-16v16h-8V24.007z M160.002,64.007v-8h24v-8h-24v-24h32v8h-24v8h24v24H160.002zM224.002,96.007h64v32h-64V96.007z M512.002,512.007h-512c0-26.5,21.5-48,48-48h416C490.502,464.007,512.002,485.507,512.002,512.007z M96.002,272.007h-32v144v32h384v-32v-144h-32H96.002z M96.002,416.007v-112h96v112H96.002z M224.002,416.007v-112h192v112H224.002z M144.002,352.007c0,8.844-7.156,16-16,16s-16-7.156-16-16s7.156-16,16-16C136.846,336.007,144.002,343.163,144.002,352.007z M344.002,40.007h-24v-8h24V40.007z M264.002,32.007h24v24h-24V32.007z"></path>
</g>
</svg>
                    </div>
                  </div>
                </div>
                <div class="icon-box-text">
                  <h3>MUA SẮM HIỆN ĐẠI<br/>– THUẬN TIỆN –</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="col-inner">
              <div class="icon-box">
                <div class="icon-box-img">
                  <div class="icon">
                    <div class="icon-inner"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 354.796 354.796" style="enable-background:new 0 0 354.796 354.796;" xml:space="preserve">
<g>
<g id="Layer_5_58_">
<g>
<g>
<path d="M265.442,109.092c-10.602-4.25-13.665-6.82-13.665-11.461c0-3.714,2.813-8.053,10.744-8.053c7.015,0,12.395,2.766,12.443,2.79c0.566,0.302,1.201,0.463,1.83,0.463c1.535,0,2.893-0.929,3.456-2.367l1.927-4.926c0.671-1.795-0.347-3.359-1.645-3.92c-4.319-1.88-12.76-3.335-12.846-3.35c-0.136-0.024-0.609-0.125-0.609-0.678l-0.027-7.146c0-2.152-1.797-3.904-4.003-3.904h-3.457c-2.204,0-4,1.751-4,3.905l0.009,7.513c0,0.576-0.624,0.826-0.852,0.879c-10.655,2.538-17.314,10.343-17.314,20.188c0,12.273,10.145,17.819,21.099,21.982c8.757,3.438,12.329,6.924,12.329,12.037c0,5.564-5.059,9.45-12.307,9.45c-6.189,0-14.565-3.923-14.648-3.963c-0.536-0.254-1.104-0.382-1.688-0.382c-1.594,0-2.982,0.964-3.537,2.457l-1.84,4.982c-0.654,1.86,0.353,3.37,1.642,4.042c5.144,2.679,15.098,4.249,15.541,4.318c0.119,0.017,0.725,0.23,0.725,0.784v7.48c0,2.152,1.797,3.904,4.004,3.904h3.572c2.208,0,4.005-1.751,4.005-3.904v-7.872c0-0.736,0.543-0.801,0.655-0.828c11.351-2.55,18.343-10.855,18.343-21.283C285.325,121.518,279.377,114.597,265.442,109.092z"></path>
<path d="M260.979,22.509c-51.816,0-93.818,42.005-93.818,93.818c0,51.814,42.002,93.82,93.818,93.82c51.814,0,93.817-42.006,93.817-93.82C354.796,64.514,312.793,22.509,260.979,22.509z M260.979,188.404c-39.808,0-72.076-32.271-72.076-72.076s32.268-72.075,72.076-72.075c39.806,0,72.073,32.27,72.073,72.075S300.785,188.404,260.979,188.404z"></path>
</g>
<g>
<path d="M335.733,255.61c-19.95,11.011-47.389,21.192-74.753,25.484c-24.346,3.818-70.148-5.39-70.148-16.265c0-4.121,40.17,10.154,64.469,3.671c18.633-4.971,15.988-22.401,5.853-24.7c-10.076-2.287-69.108-23.913-94.323-24.659c-11.878-0.351-41.203,4.131-55.393,6.442c-4.861,0.791-7.909,0.704-8.213,5.356c-1.412,21.62-4.195,65.832-5.712,88.926c-0.032,0.488,0.646,7.05,6.061,2.432c5.927-5.054,14.24-10.656,21.929-8.912c12.063,2.737,116.424,21.856,130.819,18.51c20.593-4.787,78.888-39.334,90.065-50.072C363.711,265.176,350.244,247.601,335.733,255.61z"></path>
<path d="M74.426,224.74l-54.672-2.694c-4.221-0.208-8.532,2.973-9.581,7.066l-9.941,90.255c-1.048,4.094,1.55,7.578,5.773,7.741l60.59-0.006c4.224,0.163,7.942-3.151,8.266-7.365l6.654-86.958C81.837,228.566,78.647,224.948,74.426,224.74z M42.24,315.145c-8.349,0-15.116-6.768-15.116-15.116c0-8.349,6.768-15.116,15.116-15.116s15.116,6.768,15.116,15.116C57.356,308.378,50.589,315.145,42.24,315.145z"></path>
</g>
</g>
</g>
</g>
</svg>
                    </div>
                  </div>
                </div>
                <div class="icon-box-text">
                  <h3>THANH TOÁN AN TOÀN<br/>– DỄ DÀNG –</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="product-content">
        <div class="tabs">
          <div class="tabbed-product">
            <ul class="nav-center nav navbar tab-links">
              <li class="active"><a href="#tab_luu-tru">lưu trữ</a></li>
              <li><a href="#tab_thiet-bi">thiết bị</a></li>
              <li><a href="#tab_tien-ich">tiện ích</a></li>
              <li><a href="#tab_muc-ruban">mực - ruban</a></li>
            </ul>
          </div>
          <div class="wrapper-product">
            <div class="tab-content">
              <div class="tab active" id="tab_luu-tru">
                <div class="row">
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/Deli-7510-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Đóng số 10 tự động</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">800,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/rope-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Dây thừng lớn</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">8,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/DraftingCompass-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Compa kỹ thuật</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">50,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/YP003-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Keo khô</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">140,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/scotch-magic-810-invisible-tape-19mm-x-33m-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Băng keo dán tiền</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">45,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/jumbo-push-pins-100-count-colorful-clear-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Đinh ấn màu</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">10,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/kb-23-23-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Kim bấm 23/23 – 190 tờ</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">30,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/ban-cat-giay-a3-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Bàn cắt giấy A3</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">210,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/bam_lo_978-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Bấm 2 lổ 978 – 30 tờ</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">90,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/bk-50la-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Bấm kim 50LA – 210 tờ</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">350,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab" id="tab_thiet-bi">
                <div class="row">
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/8339a2117dc1707076a4e42cad823dfa-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Khăn giấy Pulppy</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">22,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/giay-lua-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Giấy lụa</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">5,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/Message-Flag-with-Dispenser-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Giấy notes – “Sign Here”</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">70,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/POS-Paper-receipt-bond-thermo-paper-roll-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Giấy cảm nhiệt POS</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">8,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/idea-a4-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Giấy Idea A4 80</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">75,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab" id="tab_tien-ich">
                <div class="row">
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/display-books-a4-40-pockets-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Bìa simili 40 lá</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">72,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/phan-trang-10-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Phân trang nhựa 10</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">10,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/master_ALV226-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Tấm lót cắt</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">150,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/bia-cong-10f-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Bìa còng King Jim 10f</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">85,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab" id="tab_muc-ruban">
                <div class="row">
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/got-but-chi-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Gọt chì siêu nhân Guangbo</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">45,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/montblanc-rollerball-mozart-refill-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Ruột bút Montblanc Legrand</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">280,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/stained-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Bút viết lên áo – giày</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">100,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/but-da-quang-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Bút lông bảng Pentel Maxiflo</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">35,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/pencil-marco-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Bút chì Macro</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">72,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/but-ky-parker-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Bút ký Parker</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">480,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="container supplier-gallery">
        <div class="productOthers">
          <div class="container-fluid">
            <h3 class="text-center">nhà cung cấp</h3>
            <div class="owl-carousel owl-theme slider-supplier banner-inner">
              <div class="item">
                <div class="supplier-item">
                  <div class="product-image"><img src="http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/logo-philips.jpg" alt=""/></div>
                </div>
              </div>
              <div class="item">
                <div class="supplier-item">
                  <div class="product-image"><img src="http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/logo-casio.jpg" alt=""/></div>
                </div>
              </div>
              <div class="item">
                <div class="supplier-item">
                  <div class="product-image"><img src="http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/logo-epson.jpg" alt=""/></div>
                </div>
              </div>
              <div class="item">
                <div class="supplier-item">
                  <div class="product-image"><img src="http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/logo-kw-trio.jpg" alt=""/></div>
                </div>
              </div>
              <div class="item">
                <div class="supplier-item">
                  <div class="product-image"><img src="http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/logo-logitech.jpg" alt=""/></div>
                </div>
              </div>
              <div class="item">
                <div class="supplier-item">
                  <div class="product-image"><img src="http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/logo-marco.jpg" alt=""/></div>
                </div>
              </div>
              <div class="item">
                <div class="supplier-item">
                  <div class="product-image"><img src="http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/logo-parker.jpg" alt=""/></div>
                </div>
              </div>
              <div class="item">
                <div class="supplier-item">
                  <div class="product-image"><img src="http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/logo-pentel.jpg" alt=""/></div>
                </div>
              </div>
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