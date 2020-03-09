<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"/>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,500,700&amp;display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="{{asset('web/css/styles.css')}}"/>
  </head>
  <body>
    <div class="container-fluid">
      <div class="wrapper-nav position-relative">
        <section class="menu-nav">
          <div class="container">
            <div class="top-navbar flex-row">
              <div class="logo"><a class="nav-brand" href="../../../dist/html/pages/index.html" alt="logo"><img src="../../assets/images/logo-officemona.png" alt="logo"/></a></div>
              <div class="search-form-wrapper">
                <div class="search-form">
                  <form action="" method="get">
                    <div class="nav-search flex-row">
                      <div class="flex-col flex-grow">
                        <input class="search-field mb-0" type="search" placeholder="Tìm nhanh sản phẩm ..."/>
                      </div>
                      <div class="flex-col">
                        <button class="search-submit mb-0 btn" type="submit"><i class="icon-search fas fa-search"></i></button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="account justify-content-end">
                <ul class="nav">
                  <li class="account-item"><a class="nav-top-link nav-top-not-logged-in"><span>đăng ký</span></a></li>
                  <li class="header-divider"></li>
                  <li class="account-item"><a class="nav-top-link nav-top-not-logged-in"><span>đăng nhập</span></a></li>
                  <li class="header-divider"></li>
                  <li class="cart-item"><a><span class="header-cart-title">giỏ hàng&nbsp</span><span class="cart-price"><span class="amount">/ 0&nbsp<span class="symbol">đ</span><i class="fas fa-shopping-basket icon-basket"></i></span></span></a></li>
                </ul>
              </div>
            </div>
            <div class="bot-navbar flex-row">
              <ul class="nav">
                <li class="hover-nav"><a href="#"><i class="fas fa-star"></i><span>giúp bạn chọn</span></a></li>
                <li class="hover-nav"><a href="#"><span>dụng cụ văn phòng</span><i class="fas fa-chevron-down arrow-down"></i></a>
                  <ul class="nav-dropdown">
                    <li class="nav-hover-dropdown"><a href="#">Bấm kim</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Bấm lỗ</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Dao kéo</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Kim bấm</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Kẹp sách - Gáy sách</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Băng keo - Cắt keo</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Keo dán</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Thước - Compa</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Dây buộc</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Đóng dấu - Tampon</a></li>
                  </ul>
                </li>
                <li class="hover-nav"><a href="#"><span>giấy</span><i class="fas fa-chevron-down arrow-down"></i></a>
                  <ul class="nav-dropdown">
                    <li class="nav-hover-dropdown"><a href="#">Giấy in ấn</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Giấy in fax - liên tục</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Giấy notes</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Giấy chuyên dụng</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Khăn giấy - giấy vệ sinh</a></li>
                  </ul>
                </li>
                <li class="hover-nav"><a href="#"><span>bìa hồ sơ</span><i class="fas fa-chevron-down arrow-down"></i></a>
                  <ul class="nav-dropdown">
                    <li class="nav-hover-dropdown"><a href="#">Bìa còng</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Bìa lưu trữ</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Bìa phân trang</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Bìa album</a></li>
                  </ul>
                </li>
                <li class="hover-nav"><a href="#"><span>bút viết</span><i class="fas fa-chevron-down arrow-down"></i></a>
                  <ul class="nav-dropdown">
                    <li class="nav-hover-dropdown"><a href="#">Bút bi - Gel</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Bút chì</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Bút lông - Dạ quang</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Bút chuyên dụng</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Ruột bút</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Phụ kiện bút</a></li>
                  </ul>
                </li>
                <li class="hover-nav"><a href="#"><span>tập sổ</span><i class="fas fa-chevron-down arrow-down"></i></a>
                  <ul class="nav-dropdown">
                    <li class="nav-hover-dropdown"><a href="#">Sổ tập</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Phiếu - Biểu mẫu</a></li>
                  </ul>
                </li>
                <li class="hover-nav"><a href="#"><span>lưu trữ</span><i class="fas fa-chevron-down arrow-down"></i></a>
                  <ul class="nav-dropdown">
                    <li class="nav-hover-dropdown"><a href="#">Khay kệ</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Hộp cầm bút</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Dụng cụ lưu trữ</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Khay Brochure - Menu</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Bao thư</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Bảng tên</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Khung hình</a></li>
                  </ul>
                </li>
                <li class="hover-nav"><a href="#"><span>thiết bị</span><i class="fas fa-chevron-down arrow-down"></i></a>
                  <ul class="nav-dropdown">
                    <li class="nav-hover-dropdown"><a href="#">CD - DVD - USB</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Bàn phím - Chuột</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Pin</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Máy tính</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Dụng cụ - Máy VP</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Thiết bị điện</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Bảng</a></li>
                  </ul>
                </li>
                <li class="hover-nav"><a href="#"><span>tiện ích</span><i class="fas fa-chevron-down arrow-down"></i></a>
                  <ul class="nav-dropdown">
                    <li class="nav-hover-dropdown"><a href="#">DC vệ sinh</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Dung dịch tẩy rửa</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Gia dụng</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Thực phẩm</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Dược phẩm</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Tiện ích cá nhân</a></li>
                  </ul>
                </li>
                <li class="hover-nav"><a href="#"><span>mực - ruban</span><i class="fas fa-chevron-down arrow-down"></i></a>
                  <ul class="nav-dropdown">
                    <li class="nav-hover-dropdown"><a href="#">Mực máy in</a></li>
                    <li class="nav-hover-dropdown"><a href="#">Ruban - Film Fax</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </section>
        <section class="banner">
          <div class="owl-carousel owl-theme banner-inner slider-main">
            <div class="item">
              <div class="owl-lazy" data-src="http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/banner-01.jpg"></div>
            </div>
            <div class="item">
              <div class="owl-lazy" data-src="http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/banner-02.jpg"></div>
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
              <li><a href="#tab_bia_ho_so">bìa hồ sơ</a></li>
              <li><a href="#tab_but_viet">bút viết</a></li>
              <li><a href="#tab_tap_so">tập sổ</a></li>
            </ul>
          </div>
          <div class="wrapper-product">
            <div class="tab-content">
              <div class="tab active" id="tab_dung-cu-van-phong">
                <div class="row">
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/Deli-7510-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Đóng số 10 tự động</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">800,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/rope-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Dây thừng lớn</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">8,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/DraftingCompass-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Compa kỹ thuật</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">50,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/YP003-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Keo khô</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">140,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/scotch-magic-810-invisible-tape-19mm-x-33m-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Băng keo dán tiền</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">45,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="w-100"></div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/jumbo-push-pins-100-count-colorful-clear-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Đinh ấn màu</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">10,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/kb-23-23-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Kim bấm 23/23 – 190 tờ</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">30,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/ban-cat-giay-a3-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Bàn cắt giấy A3</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">210,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/bam_lo_978-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Bấm 2 lổ 978 – 30 tờ</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">90,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
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
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/8339a2117dc1707076a4e42cad823dfa-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Khăn giấy Pulppy</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">22,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/giay-lua-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Giấy lụa</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">5,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/Message-Flag-with-Dispenser-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Giấy notes – “Sign Here”</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">70,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/POS-Paper-receipt-bond-thermo-paper-roll-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Giấy cảm nhiệt POS</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">8,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/idea-a4-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Giấy Idea A4 80</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">75,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="w-100"></div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab" id="tab_bia_ho_so">
                <div class="row">
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/display-books-a4-40-pockets-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Bìa simili 40 lá</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">72,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/phan-trang-10-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Phân trang nhựa 10</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">10,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/master_ALV226-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Tấm lót cắt</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">150,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/bia-cong-10f-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Bìa còng King Jim 10f</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">85,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="w-100"></div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab" id="tab_but_viet">
                <div class="row">
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/got-but-chi-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Gọt chì siêu nhân Guangbo</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">45,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/montblanc-rollerball-mozart-refill-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Ruột bút Montblanc Legrand</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">280,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/stained-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Bút viết lên áo – giày</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">100,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/but-da-quang-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Bút lông bảng Pentel Maxiflo</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">35,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/pencil-marco-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Bút chì Macro</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">72,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="w-100"></div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/but-ky-parker-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Bút ký Parker</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">480,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab" id="tab_tap_so">
                <div class="row">
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/calendar-cute-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Bảng lịch văn phòng</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">40,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/small-notebook-companion-600x600.jpg" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#">Sổ da ghi chép</a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">35,000&nbsp;</span><span class="woocommerce-price-currencySymbol">đ</span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="w-100"></div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
                    <div class="product-image"><a href="#"><img src="../../assets/images/" alt=""/></a></div>
                    <div class="product-text">
                      <div class="title-wrapper"><a href="#"></a></div>
                      <div class="price-wrapper"><span class="price"><span class="woocommerce-price-amount">&nbsp;</span><span class="woocommerce-price-currencySymbol"></span></span></div>
                    </div>
                  </div>
                  <div class="product-item col-lg col-md-3 col-sm-6">
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
      <section class="footer">
        <div class="line"></div>
        <div class="footer-content">
          <div class="top-content row">
            <div class="company-info col-sm-6 col-lg-3">
              <div class="title">
                <div class="title-img"><img src="../../../dist/assets/images/logo-officemona.png"/></div>
              </div>
              <div class="content">
                <div class="icon-box d-flex">
                  <div class="icon-box-img"><i class="fas fa-map-marker-alt"></i></div>
                  <div class="icon-box-text"><span>319 C16 Lý Thường Kiệt, Phường 15, Quận 11, Tp.HCM</span></div>
                </div>
                <div class="icon-box d-flex">
                  <div class="icon-box-img"><i class="fas fa-phone-square"></i></div>
                  <div class="icon-box-text"><span>0126 922 0162</span></div>
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
                <h3>sản phẩm bán chạy</h3>
              </div>
              <div class="content row">
                <div class="content-item col-lg-4"><img src="../../assets/images/but-da-quang-600x600.jpg" alt=""/></div>
                <div class="content-item col-lg-4"><img src="../../assets/images/bk-50la-600x600.jpg" alt=""/></div>
                <div class="content-item col-lg-4"><img src="../../assets/images/bam_lo_978-600x600.jpg" alt=""/></div>
                <div class="content-item col-lg-4"><img src="../../assets/images/POS-Paper-receipt-bond-thermo-paper-roll-600x600.jpg" alt=""/></div>
                <div class="content-item col-lg-4"><img src="../../assets/images/small-notebook-companion-600x600.jpg" alt=""/></div>
                <div class="content-item col-lg-4"><img src="../../assets/images/stained-600x600.jpg" alt=""/></div>
              </div>
            </div>
            <div class="menu col-sm-6 col-lg-3">
              <div class="title">
                <h3>menu</h3>
              </div>
              <div class="content">
                <div class="icon-box d-flex">
                  <div class="icon-box-img"><i class="fas fa-book"></i></div>
                  <div class="icon-box-text"><a href="#">Trang chủ</a></div>
                </div>
                <div class="icon-box d-flex">
                  <div class="icon-box-img"><i class="fas fa-book"></i></div>
                  <div class="icon-box-text"><a href="#">Giới thiệu</a></div>
                </div>
                <div class="icon-box d-flex">
                  <div class="icon-box-img"><i class="fas fa-book"></i></div>
                  <div class="icon-box-text"><a href="#">Cửa hàng</a></div>
                </div>
                <div class="icon-box d-flex">
                  <div class="icon-box-img"><i class="fas fa-book"></i></div>
                  <div class="icon-box-text"><a href="#">Tin tức</a></div>
                </div>
                <div class="icon-box d-flex">
                  <div class="icon-box-img"><i class="fas fa-book"></i></div>
                  <div class="icon-box-text"><a href="#">Liên hệ</a></div>
                </div>
              </div>
            </div>
            <div class="list-product col-sm-6 col-lg-3">
              <div class="title">
                <h3>danh mục sản phẩm</h3>
              </div>
              <div class="content d-flex">
                <div class="content-part">
                  <div class="icon-box d-flex">
                    <div class="icon-box-img"><i class="fas fa-book"></i></div>
                    <div class="icon-box-text"><a href="#">Dụng cụ văn phòng</a></div>
                  </div>
                  <div class="icon-box d-flex">
                    <div class="icon-box-img"><i class="fas fa-book"></i></div>
                    <div class="icon-box-text"><a href="#">Bìa hồ sơ</a></div>
                  </div>
                  <div class="icon-box d-flex">
                    <div class="icon-box-img"><i class="fas fa-book"></i></div>
                    <div class="icon-box-text"><a href="#">Tập sổ</a></div>
                  </div>
                  <div class="icon-box d-flex">
                    <div class="icon-box-img"><i class="fas fa-book"></i></div>
                    <div class="icon-box-text"><a href="#">Thiết bị</a></div>
                  </div>
                  <div class="icon-box d-flex">
                    <div class="icon-box-img"><i class="fas fa-book"></i></div>
                    <div class="icon-box-text"><a href="#">Mực – Ruban</a></div>
                  </div>
                </div>
                <div class="content-part">
                  <div class="icon-box d-flex">
                    <div class="icon-box-img"><i class="fas fa-book"></i></div>
                    <div class="icon-box-text"><a href="#">Giấy</a></div>
                  </div>
                  <div class="icon-box d-flex">
                    <div class="icon-box-img"><i class="fas fa-book"></i></div>
                    <div class="icon-box-text"><a href="#">Bút viết</a></div>
                  </div>
                  <div class="icon-box d-flex">
                    <div class="icon-box-img"><i class="fas fa-book"></i></div>
                    <div class="icon-box-text"><a href="#">Lưu trữ</a></div>
                  </div>
                  <div class="icon-box d-flex">
                    <div class="icon-box-img"><i class="fas fa-book"></i></div>
                    <div class="icon-box-text"><a href="#">Tiện ích</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="bottom-content row">
            <div class="social-network col-sm-6 col-lg-3">
              <div class="divider-line"></div>
              <div class="title">
                <h3>kết nối với chúng tôi</h3>
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
                <h3>chấp nhận thanh toán</h3>
              </div>
              <div class="content"><img src="../../assets/images/image-paypal.png" alt=""/></div>
            </div>
            <div class="register col-sm-12 col-lg-6">
              <div class="divider-line"></div>
              <div class="wrapper-regiter d-flex">
                <div class="register-text col-sm-12 col-lg-6">
                  <div class="title">
                    <h3>đăng ký</h3>
                  </div>
                  <div class="content">
                    <p>Đăng ký để nhận được được thông tin mới nhất từ chúng tôi.</p>
                  </div>
                </div>
                <div class="register-button col-sm-12 col-lg-6 d-flex">
                  <div class="btn btn-danger"><a href="#">ĐĂNG KÝ</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{asset('web\js\owl-carousel.js')}}"></script>
    <script type="text/javascript" src="{{asset('web\js\navigation.js')}}"></script>
    <script type="text/javascript" src="{{asset('web\js\product.js')}}"></script>
    <script type="text/javascript" src="{{asset('web\js\index.js')}}"></script>
  </body>
</html>