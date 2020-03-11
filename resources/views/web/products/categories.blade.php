@extends('layouts.web')
@section('category-page')
<div class="container-fluid">
    <section class="menu-nav position-relative">
        <div class="container">
            <div class="top-navbar flex-row">
                <div class="logo"><a class="nav-brand" href="../../../dist/html/pages/index.html" alt="logo"><img
                            src="../../assets/images/logo-officemona.png" alt="logo" /></a></div>
                <div class="search-form-wrapper">
                    <div class="search-form">
                        <form action="" method="get">
                            <div class="nav-search flex-row">
                                <div class="flex-col flex-grow">
                                    <input class="search-field mb-0" type="search"
                                        placeholder="Tìm nhanh sản phẩm ..." />
                                </div>
                                <div class="flex-col">
                                    <button class="search-submit mb-0 btn" type="submit"><i
                                            class="icon-search fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="account justify-content-end">
                    <ul class="nav">
                        <li class="account-item"><a class="nav-top-link nav-top-not-logged-in"><span>đăng ký</span></a>
                        </li>
                        <li class="header-divider"></li>
                        <li class="account-item"><a class="nav-top-link nav-top-not-logged-in"><span>đăng
                                    nhập</span></a></li>
                        <li class="header-divider"></li>
                        <li class="cart-item"><a><span class="header-cart-title">giỏ hàng&nbsp</span><span
                                    class="cart-price"><span class="amount">/ 0&nbsp<span class="symbol">đ</span><i
                                            class="fas fa-shopping-basket icon-basket"></i></span></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="bot-navbar flex-row">
                <ul class="nav">
                    <li class="hover-nav"><a href="#"><i class="fas fa-star"></i><span>giúp bạn chọn</span></a></li>
                    <li class="hover-nav"><a href="#"><span>dụng cụ văn phòng</span><i
                                class="fas fa-chevron-down arrow-down"></i></a>
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
                    <li class="hover-nav"><a href="#"><span>giấy</span><i
                                class="fas fa-chevron-down arrow-down"></i></a>
                        <ul class="nav-dropdown">
                            <li class="nav-hover-dropdown"><a href="#">Giấy in ấn</a></li>
                            <li class="nav-hover-dropdown"><a href="#">Giấy in fax - liên tục</a></li>
                            <li class="nav-hover-dropdown"><a href="#">Giấy notes</a></li>
                            <li class="nav-hover-dropdown"><a href="#">Giấy chuyên dụng</a></li>
                            <li class="nav-hover-dropdown"><a href="#">Khăn giấy - giấy vệ sinh</a></li>
                        </ul>
                    </li>
                    <li class="hover-nav"><a href="#"><span>bìa hồ sơ</span><i
                                class="fas fa-chevron-down arrow-down"></i></a>
                        <ul class="nav-dropdown">
                            <li class="nav-hover-dropdown"><a href="#">Bìa còng</a></li>
                            <li class="nav-hover-dropdown"><a href="#">Bìa lưu trữ</a></li>
                            <li class="nav-hover-dropdown"><a href="#">Bìa phân trang</a></li>
                            <li class="nav-hover-dropdown"><a href="#">Bìa album</a></li>
                        </ul>
                    </li>
                    <li class="hover-nav"><a href="#"><span>bút viết</span><i
                                class="fas fa-chevron-down arrow-down"></i></a>
                        <ul class="nav-dropdown">
                            <li class="nav-hover-dropdown"><a href="#">Bút bi - Gel</a></li>
                            <li class="nav-hover-dropdown"><a href="#">Bút chì</a></li>
                            <li class="nav-hover-dropdown"><a href="#">Bút lông - Dạ quang</a></li>
                            <li class="nav-hover-dropdown"><a href="#">Bút chuyên dụng</a></li>
                            <li class="nav-hover-dropdown"><a href="#">Ruột bút</a></li>
                            <li class="nav-hover-dropdown"><a href="#">Phụ kiện bút</a></li>
                        </ul>
                    </li>
                    <li class="hover-nav"><a href="#"><span>tập sổ</span><i
                                class="fas fa-chevron-down arrow-down"></i></a>
                        <ul class="nav-dropdown">
                            <li class="nav-hover-dropdown"><a href="#">Sổ tập</a></li>
                            <li class="nav-hover-dropdown"><a href="#">Phiếu - Biểu mẫu</a></li>
                        </ul>
                    </li>
                    <li class="hover-nav"><a href="#"><span>lưu trữ</span><i
                                class="fas fa-chevron-down arrow-down"></i></a>
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
                    <li class="hover-nav"><a href="#"><span>thiết bị</span><i
                                class="fas fa-chevron-down arrow-down"></i></a>
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
                    <li class="hover-nav"><a href="#"><span>tiện ích</span><i
                                class="fas fa-chevron-down arrow-down"></i></a>
                        <ul class="nav-dropdown">
                            <li class="nav-hover-dropdown"><a href="#">DC vệ sinh</a></li>
                            <li class="nav-hover-dropdown"><a href="#">Dung dịch tẩy rửa</a></li>
                            <li class="nav-hover-dropdown"><a href="#">Gia dụng</a></li>
                            <li class="nav-hover-dropdown"><a href="#">Thực phẩm</a></li>
                            <li class="nav-hover-dropdown"><a href="#">Dược phẩm</a></li>
                            <li class="nav-hover-dropdown"><a href="#">Tiện ích cá nhân</a></li>
                        </ul>
                    </li>
                    <li class="hover-nav"><a href="#"><span>mực - ruban</span><i
                                class="fas fa-chevron-down arrow-down"></i></a>
                        <ul class="nav-dropdown">
                            <li class="nav-hover-dropdown"><a href="#">Mực máy in</a></li>
                            <li class="nav-hover-dropdown"><a href="#">Ruban - Film Fax</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="category-page-title">
            <div class="nav"><a href="#">Trang chủ</a><span class="divider">/</span><a href="#">Dụng cụ văn phòng</a>
            </div>
        </div>
        <div class="detail-product">
            <div class="row">
                <div class="sidebar col-3">
                    <div class="sidebar-title">DANH MỤC SẢN PHẨM</div>
                    <div class="sidebar-content">
                        <div class="widget-list-product d-flex">
                            <ul class="menu">
                                <li><i class="fas fa-star"></i><span><a href="#">Giúp bạn chọn</a></span></li>
                                <li>
                                    <div class="menu-category"><a class="menu-category-title" href="#">Dụng cụ văn
                                            phòng</a><a data-toggle="collapse" href="#collapseOne" role="button"
                                            aria-expanded="false" aria-controls="collapseOne"><i
                                                class="fas fa-chevron-down menu-arrow button-collapse"></i></a></div>
                                    <div class="collapse" id="collapseOne">
                                        <ul class="sub-menu">
                                            <li class="sub-item"><a class="item" href="#">Bấm kim</a></li>
                                            <li class="sub-item"><a class="item" href="#">Bấm lỗ</a></li>
                                            <li class="sub-item"><a class="item" href="#">Dao kéo</a></li>
                                            <li class="sub-item"><a class="item" href="#">Kim bấm</a></li>
                                            <li class="sub-item"><a class="item" href="#">Kẹp sách - Gáy sách</a></li>
                                            <li class="sub-item"><a class="item" href="#">Băng keo - Cắt keo</a></li>
                                            <li class="sub-item"><a class="item" href="#">Keo dán</a></li>
                                            <li class="sub-item"><a class="item" href="#">Thước - Compa</a></li>
                                            <li class="sub-item"><a class="item" href="#">Dây buộc</a></li>
                                            <li class="sub-item"><a class="item" href="#">Đóng dấu - Tampon</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu-category"><a class="menu-category-title" href="#">Giấy</a><a
                                            data-toggle="collapse" href="#collapseTwo" role="button"
                                            aria-expanded="false" aria-controls="collapseTwo"><i
                                                class="fas fa-chevron-down menu-arrow button-collapse"></i></a></div>
                                    <div class="collapse" id="collapseTwo">
                                        <ul class="sub-menu">
                                            <li class="sub-item"><a class="item" href="#">Giấy in ấn</a></li>
                                            <li class="sub-item"><a class="item" href="#">Giấy in fax - liên tục</a>
                                            </li>
                                            <li class="sub-item"><a class="item" href="#">Giấy notes</a></li>
                                            <li class="sub-item"><a class="item" href="#">Giấy chuyên dụng</a></li>
                                            <li class="sub-item"><a class="item" href="#">Khăn giấy - Giấy vệ sinh</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu-category"><a class="menu-category-title" href="#">Bìa hồ sơ</a><a
                                            data-toggle="collapse" href="#collapseThree" role="button"
                                            aria-expanded="false" aria-controls="collapseThree"><i
                                                class="fas fa-chevron-down menu-arrow button-collapse"></i></a></div>
                                    <div class="collapse" id="collapseThree">
                                        <ul class="sub-menu">
                                            <li class="sub-item"><a class="item" href="#">Giấy in ấn</a></li>
                                            <li class="sub-item"><a class="item" href="#">Giấy in fax - liên tục</a>
                                            </li>
                                            <li class="sub-item"><a class="item" href="#">Giấy notes</a></li>
                                            <li class="sub-item"><a class="item" href="#">Giấy chuyên dụng</a></li>
                                            <li class="sub-item"><a class="item" href="#">Khăn giấy - Giấy vệ sinh</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu-category"><a class="menu-category-title" href="#">Bút viết</a><a
                                            data-toggle="collapse" href="#collapseFour" role="button"
                                            aria-expanded="false" aria-controls="collapseFour"><i
                                                class="fas fa-chevron-down menu-arrow button-collapse"></i></a></div>
                                    <div class="collapse" id="collapseFour">
                                        <ul class="sub-menu">
                                            <li class="sub-item"><a class="item" href="#">Giấy in ấn</a></li>
                                            <li class="sub-item"><a class="item" href="#">Giấy in fax - liên tục</a>
                                            </li>
                                            <li class="sub-item"><a class="item" href="#">Giấy notes</a></li>
                                            <li class="sub-item"><a class="item" href="#">Giấy chuyên dụng</a></li>
                                            <li class="sub-item"><a class="item" href="#">Khăn giấy - Giấy vệ sinh</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu-category"><a class="menu-category-title" href="#">Tập sổ</a><a
                                            data-toggle="collapse" href="#collapseFive" role="button"
                                            aria-expanded="false" aria-controls="collapseFive"><i
                                                class="fas fa-chevron-down menu-arrow button-collapse"></i></a></div>
                                    <div class="collapse" id="collapseFive">
                                        <ul class="sub-menu">
                                            <li class="sub-item"><a class="item" href="#">Giấy in ấn</a></li>
                                            <li class="sub-item"><a class="item" href="#">Giấy in fax - liên tục</a>
                                            </li>
                                            <li class="sub-item"><a class="item" href="#">Giấy notes</a></li>
                                            <li class="sub-item"><a class="item" href="#">Giấy chuyên dụng</a></li>
                                            <li class="sub-item"><a class="item" href="#">Khăn giấy - Giấy vệ sinh</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu-category"><a class="menu-category-title" href="#">Lưu trữ</a><a
                                            data-toggle="collapse" href="#collapseSix" role="button"
                                            aria-expanded="false" aria-controls="collapseSix"><i
                                                class="fas fa-chevron-down menu-arrow button-collapse"></i></a></div>
                                    <div class="collapse" id="collapseSix">
                                        <ul class="sub-menu">
                                            <li class="sub-item"><a class="item" href="#">Giấy in ấn</a></li>
                                            <li class="sub-item"><a class="item" href="#">Giấy in fax - liên tục</a>
                                            </li>
                                            <li class="sub-item"><a class="item" href="#">Giấy notes</a></li>
                                            <li class="sub-item"><a class="item" href="#">Giấy chuyên dụng</a></li>
                                            <li class="sub-item"><a class="item" href="#">Khăn giấy - Giấy vệ sinh</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu-category"><a class="menu-category-title" href="#">Thiết bị</a><a
                                            data-toggle="collapse" href="#collapseSeven" role="button"
                                            aria-expanded="false" aria-controls="collapseSeven"><i
                                                class="fas fa-chevron-down menu-arrow button-collapse"></i></a></div>
                                    <div class="collapse" id="collapseSeven">
                                        <ul class="sub-menu">
                                            <li class="sub-item"><a class="item" href="#">Giấy in ấn</a></li>
                                            <li class="sub-item"><a class="item" href="#">Giấy in fax - liên tục</a>
                                            </li>
                                            <li class="sub-item"><a class="item" href="#">Giấy notes</a></li>
                                            <li class="sub-item"><a class="item" href="#">Giấy chuyên dụng</a></li>
                                            <li class="sub-item"><a class="item" href="#">Khăn giấy - Giấy vệ sinh</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu-category"><a class="menu-category-title" href="#">Tiện ích</a><a
                                            data-toggle="collapse" href="#collapseEight" role="button"
                                            aria-expanded="false" aria-controls="collapseEight"><i
                                                class="fas fa-chevron-down menu-arrow button-collapse"></i></a></div>
                                    <div class="collapse" id="collapseEight">
                                        <ul class="sub-menu">
                                            <li class="sub-item"><a class="item" href="#">Giấy in ấn</a></li>
                                            <li class="sub-item"><a class="item" href="#">Giấy in fax - liên tục</a>
                                            </li>
                                            <li class="sub-item"><a class="item" href="#">Giấy notes</a></li>
                                            <li class="sub-item"><a class="item" href="#">Giấy chuyên dụng</a></li>
                                            <li class="sub-item"><a class="item" href="#">Khăn giấy - Giấy vệ sinh</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu-category"><a class="menu-category-title" href="#">Mực - Ruban</a><a
                                            data-toggle="collapse" href="#collapseNine" role="button"
                                            aria-expanded="false" aria-controls="collapseNine"><i
                                                class="fas fa-chevron-down menu-arrow button-collapse"></i></a></div>
                                    <div class="collapse" id="collapseNine">
                                        <ul class="sub-menu">
                                            <li class="sub-item"><a class="item" href="#">Giấy in ấn</a></li>
                                            <li class="sub-item"><a class="item" href="#">Giấy in fax - liên tục</a>
                                            </li>
                                            <li class="sub-item"><a class="item" href="#">Giấy notes</a></li>
                                            <li class="sub-item"><a class="item" href="#">Giấy chuyên dụng</a></li>
                                            <li class="sub-item"><a class="item" href="#">Khăn giấy - Giấy vệ sinh</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-title">SẢN PHẨM</div>
                    <div class="sidebar-content">
                        <div class="widget-list-product">
                            <ul class="list">
                                <li class="list-item d-flex align-items-center"><a href="#"><img width="60" height="60"
                                            src="../../assets/images/Categories/MR/Panasonic-FA136-300x300.jpg"
                                            alt="" /></a><a href="#"><span class="name d-block">Ruban Panasonic
                                            FA136</span><span class="cost">170,000 ₫</span></a></li>
                                <li class="list-item d-flex align-items-center"><a href="#"><img width="60" height="60"
                                            src="../../assets/images/Categories/MR/muc-in-epson-300x300.jpg"
                                            alt="" /></a><a href="#"><span class="name d-block">Mực in Epson</span><span
                                            class="cost">350,000 ₫</span></a></li>
                                <li class="list-item d-flex align-items-center"><a href="#"><img width="60" height="60"
                                            src="../../assets/images/Categories/DCVP/bam_lo_978-300x300.jpg"
                                            alt="" /></a><a href="#"><span class="name d-block">Bấm 2 lổ 978 – 30
                                            tờ</span><span class="cost">90,000 ₫</span></a></li>
                                <li class="list-item d-flex align-items-center"><a href="#"><img width="60" height="60"
                                            src="../../assets/images/Categories/DCVP/YP003-300x300.jpg" alt="" /></a><a
                                        href="#"><span class="name d-block">Keo Khô</span><span class="cost">140,000
                                            ₫</span></a></li>
                                <li class="list-item d-flex align-items-center"><a href="#"><img width="60" height="60"
                                            src="../../assets/images/Categories/BV/stained-300x300.jpg" alt="" /></a><a
                                        href="#"><span class="name d-block">Bút viết lên áo – giày</span><span
                                            class="cost">100,000 ₫</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="products col-9 row">
                    <div class="col-sm-12 col-md-4 col-lg-3 product-item"><a href="#">
                            <div class="item-image"><img
                                    src="../../assets/images/Categories/DCVP/bam_lo_978-300x300.jpg" alt="" /></div>
                            <div class="item-text"><span class="name d-block">Bấm 2 lỗ 978 - 30 tờ</span><span
                                    class="cost d-block">25,000 ₫</span></div>
                        </a></div>
                    <div class="col-sm-12 col-md-4 col-lg-3 product-item"><a href="#">
                            <div class="item-image"><img src="../../assets/images/Categories/DCVP/bk-50la-300x300.jpg"
                                    alt="" /></div>
                            <div class="item-text"><span class="name d-block">Bấm kim 50LA – 210 tờ</span><span
                                    class="cost d-block">350,000 ₫</span></div>
                        </a></div>
                    <div class="col-sm-12 col-md-4 col-lg-3 product-item"><a href="#">
                            <div class="item-image"><img
                                    src="../../assets/images/Categories/DCVP/ban-cat-giay-a3-300x300.jpg" alt="" />
                            </div>
                            <div class="item-text"><span class="name d-block">Bàn cắt giấy A3</span><span
                                    class="cost d-block">210,000 ₫</span></div>
                        </a></div>
                    <div class="col-sm-12 col-md-4 col-lg-3 product-item"><a href="#">
                            <div class="item-image"><img
                                    src="../../assets/images/Categories/DCVP/scotch-magic-810-invisible-tape-19mm-x-33m-300x300.png"
                                    alt="" /></div>
                            <div class="item-text"><span class="name d-block">Băng keo dán tiền</span><span
                                    class="cost d-block">45,000 ₫</span></div>
                        </a></div>
                    <div class="col-sm-12 col-md-4 col-lg-3 product-item"><a href="#">
                            <div class="item-image"><img
                                    src="../../assets/images/Categories/DCVP/DraftingCompass-300x300.jpg" alt="" />
                            </div>
                            <div class="item-text"><span class="name d-block">Compa kỹ thuật</span><span
                                    class="cost d-block">50,000 ₫</span></div>
                        </a></div>
                    <div class="col-sm-12 col-md-4 col-lg-3 product-item"><a href="#">
                            <div class="item-image"><img src="../../assets/images/Categories/DCVP/rope-300x300.jpg"
                                    alt="" /></div>
                            <div class="item-text"><span class="name d-block">Dây thừng lớn</span><span
                                    class="cost d-block">8,000 ₫</span></div>
                        </a></div>
                    <div class="col-sm-12 col-md-4 col-lg-3 product-item"><a href="#">
                            <div class="item-image"><img
                                    src="../../assets/images/Categories/DCVP/jumbo-push-pins-100-count-colorful-clear-300x300.jpg"
                                    alt="" /></div>
                            <div class="item-text"><span class="name d-block">Đinh ấn màu</span><span
                                    class="cost d-block">10,000 ₫</span></div>
                        </a></div>
                    <div class="col-sm-12 col-md-4 col-lg-3 product-item"><a href="#">
                            <div class="item-image"><img src="../../assets/images/Categories/DCVP/Deli-7510-300x300.jpg"
                                    alt="" /></div>
                            <div class="item-text"><span class="name d-block">Đóng 10 số tự động</span><span
                                    class="cost d-block">800,000 ₫</span></div>
                        </a></div>
                    <div class="col-sm-12 col-md-4 col-lg-3 product-item"><a href="#">
                            <div class="item-image"><img src="../../assets/images/Categories/DCVP/YP003-300x300.jpg"
                                    alt="" /></div>
                            <div class="item-text"><span class="name d-block">Keo khô</span><span
                                    class="cost d-block">140,000 ₫</span></div>
                        </a></div>
                    <div class="col-sm-12 col-md-4 col-lg-3 product-item"><a href="#">
                            <div class="item-image"><img src="../../assets/images/Categories/DCVP/kb-23-23-300x300.jpg"
                                    alt="" /></div>
                            <div class="item-text"><span class="name d-block">Kim bấm 23/23 – 190 tờ</span><span
                                    class="cost d-block">30,000 ₫</span></div>
                        </a></div>
                </div>
            </div>
        </div>
    </div>
    @endsection