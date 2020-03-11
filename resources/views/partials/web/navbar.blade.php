<section class="menu-nav">
    <div class="container">
        <div class="top-navbar flex-row">
            <div class="logo"><a class="nav-brand" href="{{URL::to('home-page')}}" alt="logo"><img
                        src="{{asset('web/images/logo/logo-officemona.png')}}" alt="logo" /></a></div>
            <div class="search-form-wrapper">
                <div class="search-form">
                    <form action="" method="get">
                        <div class="nav-search flex-row">
                            <div class="flex-col flex-grow">
                                <input class="search-field mb-0" type="search" placeholder="Tìm nhanh sản phẩm ..." />
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
                    <li class="account-item"><a class="nav-top-link nav-top-not-logged-in"><span>đăng ký</span></a></li>
                    <li class="header-divider"></li>
                    <li class="account-item"><a class="nav-top-link nav-top-not-logged-in"><span>đăng nhập</span></a>
                    </li>
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
                <li class="hover-nav"><a href="#"><span>giấy</span><i class="fas fa-chevron-down arrow-down"></i></a>
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