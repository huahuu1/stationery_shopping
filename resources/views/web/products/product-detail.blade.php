@extends('layouts.web')
@section('product-detail')
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
        <div class="breadCrumb"><a href="#">Trang Chủ</a><span class="divider">/</span><a href="#">Dụng cụ văn
                phòng</a><span class="divider">/</span><a href="#">Bấm kim</a></div>
        <div class="productMain row">
            <div class="image col-sm-12 col-lg-6"><img src="../../../dist/assets/images/bk-50la-600x600.jpg" /></div>
            <div class="content col-sm-12 col-lg-6">
                <div class="nameTag">
                    <h1>Bấm Kim 50LA - 240 Tờ</h1>
                </div>
                <div class="divideTag"></div>
                <div class="priceTag d-flex">
                    <p>350,000</p><span>đ</span>
                </div>
                <div class="textTag">
                    <p></p>- Bấm kim lớn KW Trio lớn 50LA (240 TỜ) CHÍNH HÃNG<br />- Văn phòng phẩm giá rẻ và tốt nhất
                    tại HCM<br />- Chuyên cung cấp văn phòng phẩm giá sỉ, Đồ dùng văn phòng tại thành phố Hồ Chí
                    Minh<br />- Chúng tôi chuyên cung cấp văn phòng phẩm, thiết bị văn phòng, thiết bị bảo hộ giá rẻ
                    nhất tại Hồ Chí Minh, với phương châm giá rẻ nhất, dịch vụ tốt nhất, cung cấp nhanh tại các quận
                    huyện trong thành phố Hồ Chí Minh
                </div>
                <form class="cartForm" action="" method="">
                    <div class="quantityControl d-flex">
                        <input class="btnMinus" type="button" id="btnMinus" name="btnMinus" value="-" />
                        <input class="txtQuantity" type="text" id="txtQuantity" name="txtQuantity" size="3" value="0" />
                        <input class="btnPlus" type="button" id="btnPlus" name="btnPlus" value="+" />
                        <input class="btn btn-primary" type="submit" id="" name="" value="Thêm Vào Giỏ" />
                    </div>
                </form>
            </div>
        </div>
        <div class="productDetail">
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" href="#description" data-toggle="tab">Mô Tả</a></li>
                <li class="nav-item"><a class="nav-link" href="#evaluation" data-toggle="tab">Đánh Giá</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="description">
                    <div class="description">
                        <h3>Dập Kim 50LA, KW TRIO</h3>
                        <p>– KW trio là thương hiệu văn phòng phẩm uy tín tại Đài Loan trong lĩnh vực sản xuất các loại
                            máy bấm kim, bấm lổ, kim bấm văn phòng<br />– Thân máy inox, dạng đẩy, bấm 240 tờ, chất
                            lượng ưu việt<br />– Chức năng: lưu trữ tài liệu và chứng từ, đóng sách<br />– Đáp ứng tiêu
                            chuẩn sức khỏe người dùng văn phòng<br />– NSX: Đài Loan<br />– Quy cách: 1 cái/hộp<br />–
                            Tiết kiệm hơn khi chọn mua theo nhóm<br />– Chương trình khuyến mãi chỉ áp dụng cho các đơn
                            hàng trực tuyến<br />– Vận chuyển miễn phí dựa trên giá trị đơn hàng<br />– Mẫu mã và thông
                            tin sản phẩm có thể thay đổi theo chính sách nhà sản xuất<br />– Đơn vị tính: cái<br /></p>
                    </div>
                </div>
                <div class="tab-pane fade" id="evaluation">
                    <div class="evaluation">
                        <h1>Đánh Giá</h1>
                        <p>Chưa có đánh giá nào</p>
                        <div class="comment">
                            <h3>Đánh giá của bạn</h3>
                            <div class="stars">
                                <form action="">
                                    <input class="star star-5" id="star-5" type="radio" name="star" />
                                    <label class="star star-5" for="star-5" title="Awesome - 5 stars"></label>
                                    <input class="star star-4" id="star-4" type="radio" name="star" />
                                    <label class="star star-4" for="star-4" title="Pretty good - 4 stars"></label>
                                    <input class="star star-3" id="star-3" type="radio" name="star" />
                                    <label class="star star-3" for="star-3" title="Meh - 3 stars"></label>
                                    <input class="star star-2" id="star-2" type="radio" name="star" />
                                    <label class="star star-2" for="star-2" title="Kinda bad - 2 stars"></label>
                                    <input class="star star-1" id="star-1" type="radio" name="star" />
                                    <label class="star star-1" for="star-1" title="Sucks big time - 1 star"></label>
                                </form>
                            </div>
                            <h3>Nhận xét của bạn</h3>
                            <textarea style="width: 100%; height: 20rem"></textarea>
                            <form>
                                <div class="form-row">
                                    <div class="col-6 col-sm-6 form-group">
                                        <label for="">Tên*</label>
                                        <input class="form-control" type="text" id="" name="" maxlength="" />
                                    </div>
                                    <div class="col-6 col-sm-6 form-group">
                                        <label for="">Email*</label>
                                        <input class="form-control" type="email" id="" name="" maxlength="" />
                                    </div>
                                </div>
                                <input class="btn btn-info form-control" type="submit" value="Gửi Đi"
                                    style="width: 7.5rem" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="productOthers">
            <div class="container-fluid">
                <h3>SẢN PHẨM TƯƠNG TỰ</h3>
                <div class="owl-carousel owl-theme slider-part banner-inner">
                    <div class="item">
                        <div class="product-item">
                            <div class="product-image"><img src="../../../dist/assets/images/Deli-7510-600x600.jpg"
                                    alt="" /></div>
                            <div class="product-text">
                                <div class="title-wrapper"><a href="#">Đóng số 10 tự động</a></div>
                                <div class="price-wrapper"><span class="price"><span
                                            class="woocommerce-price-amount">800,000&nbsp;</span><span
                                            class="woocommerce-price-currencySymbol">đ</span></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">
                            <div class="product-image"><img
                                    src="../../../dist/assets/images/DraftingCompass-600x600.jpg" alt="" /></div>
                            <div class="product-text">
                                <div class="title-wrapper"><a href="#">Đóng số 10 tự động</a></div>
                                <div class="price-wrapper"><span class="price"><span
                                            class="woocommerce-price-amount">800,000&nbsp;</span><span
                                            class="woocommerce-price-currencySymbol">đ</span></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">
                            <div class="product-image"><img src="../../../dist/assets/images/YP003-600x600.jpg"
                                    alt="" /></div>
                            <div class="product-text">
                                <div class="title-wrapper"><a href="#">Đóng số 10 tự động</a></div>
                                <div class="price-wrapper"><span class="price"><span
                                            class="woocommerce-price-amount">800,000&nbsp;</span><span
                                            class="woocommerce-price-currencySymbol">đ</span></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">
                            <div class="product-image"><img src="../../../dist/assets/images/kb-23-23-600x600.jpg"
                                    alt="" /></div>
                            <div class="product-text">
                                <div class="title-wrapper"><a href="#">Đóng số 10 tự động</a></div>
                                <div class="price-wrapper"><span class="price"><span
                                            class="woocommerce-price-amount">800,000&nbsp;</span><span
                                            class="woocommerce-price-currencySymbol">đ</span></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">
                            <div class="product-image"><img
                                    src="../../../dist/assets/images/ban-cat-giay-a3-600x600.jpg" alt="" /></div>
                            <div class="product-text">
                                <div class="title-wrapper"><a href="#">Đóng số 10 tự động</a></div>
                                <div class="price-wrapper"><span class="price"><span
                                            class="woocommerce-price-amount">800,000&nbsp;</span><span
                                            class="woocommerce-price-currencySymbol">đ</span></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">
                            <div class="product-image"><img
                                    src="../../../dist/assets/images/scotch-magic-810-invisible-tape-19mm-x-33m-600x600.jpg"
                                    alt="" /></div>
                            <div class="product-text">
                                <div class="title-wrapper"><a href="#">Đóng số 10 tự động</a></div>
                                <div class="price-wrapper"><span class="price"><span
                                            class="woocommerce-price-amount">800,000&nbsp;</span><span
                                            class="woocommerce-price-currencySymbol">đ</span></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">
                            <div class="product-image"><img
                                    src="../../../dist/assets/images/jumbo-push-pins-100-count-colorful-clear-600x600.jpg"
                                    alt="" /></div>
                            <div class="product-text">
                                <div class="title-wrapper"><a href="#">Đóng số 10 tự động</a></div>
                                <div class="price-wrapper"><span class="price"><span
                                            class="woocommerce-price-amount">800,000&nbsp;</span><span
                                            class="woocommerce-price-currencySymbol">đ</span></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection