@php
    $productsAnother = App\Models\Product::whereBetween('id', [1, 5])->get();
@endphp

<section class="container">
    <div>
        @php
        echo $breadcrums;
        @endphp
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
                                        data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false"
                                        aria-controls="collapseTwo"><i
                                            class="fas fa-chevron-down menu-arrow button-collapse"></i></a></div>
                                <div class="collapse" id="collapseTwo">
                                    <ul class="sub-menu">
                                        <li class="sub-item"><a class="item" href="#">Giấy in ấn</a></li>
                                        <li class="sub-item"><a class="item" href="#">Giấy in fax - liên tục</a></li>
                                        <li class="sub-item"><a class="item" href="#">Giấy notes</a></li>
                                        <li class="sub-item"><a class="item" href="#">Giấy chuyên dụng</a></li>
                                        <li class="sub-item"><a class="item" href="#">Khăn giấy - Giấy vệ sinh</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="menu-category"><a class="menu-category-title" href="#">Bìa hồ sơ</a><a
                                        data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false"
                                        aria-controls="collapseThree"><i
                                            class="fas fa-chevron-down menu-arrow button-collapse"></i></a></div>
                                <div class="collapse" id="collapseThree">
                                    <ul class="sub-menu">
                                        <li class="sub-item"><a class="item" href="#">Giấy in ấn</a></li>
                                        <li class="sub-item"><a class="item" href="#">Giấy in fax - liên tục</a></li>
                                        <li class="sub-item"><a class="item" href="#">Giấy notes</a></li>
                                        <li class="sub-item"><a class="item" href="#">Giấy chuyên dụng</a></li>
                                        <li class="sub-item"><a class="item" href="#">Khăn giấy - Giấy vệ sinh</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="menu-category"><a class="menu-category-title" href="#">Bút viết</a><a
                                        data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false"
                                        aria-controls="collapseFour"><i
                                            class="fas fa-chevron-down menu-arrow button-collapse"></i></a></div>
                                <div class="collapse" id="collapseFour">
                                    <ul class="sub-menu">
                                        <li class="sub-item"><a class="item" href="#">Giấy in ấn</a></li>
                                        <li class="sub-item"><a class="item" href="#">Giấy in fax - liên tục</a></li>
                                        <li class="sub-item"><a class="item" href="#">Giấy notes</a></li>
                                        <li class="sub-item"><a class="item" href="#">Giấy chuyên dụng</a></li>
                                        <li class="sub-item"><a class="item" href="#">Khăn giấy - Giấy vệ sinh</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="menu-category"><a class="menu-category-title" href="#">Tập sổ</a><a
                                        data-toggle="collapse" href="#collapseFive" role="button" aria-expanded="false"
                                        aria-controls="collapseFive"><i
                                            class="fas fa-chevron-down menu-arrow button-collapse"></i></a></div>
                                <div class="collapse" id="collapseFive">
                                    <ul class="sub-menu">
                                        <li class="sub-item"><a class="item" href="#">Giấy in ấn</a></li>
                                        <li class="sub-item"><a class="item" href="#">Giấy in fax - liên tục</a></li>
                                        <li class="sub-item"><a class="item" href="#">Giấy notes</a></li>
                                        <li class="sub-item"><a class="item" href="#">Giấy chuyên dụng</a></li>
                                        <li class="sub-item"><a class="item" href="#">Khăn giấy - Giấy vệ sinh</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="menu-category"><a class="menu-category-title" href="#">Lưu trữ</a><a
                                        data-toggle="collapse" href="#collapseSix" role="button" aria-expanded="false"
                                        aria-controls="collapseSix"><i
                                            class="fas fa-chevron-down menu-arrow button-collapse"></i></a></div>
                                <div class="collapse" id="collapseSix">
                                    <ul class="sub-menu">
                                        <li class="sub-item"><a class="item" href="#">Giấy in ấn</a></li>
                                        <li class="sub-item"><a class="item" href="#">Giấy in fax - liên tục</a></li>
                                        <li class="sub-item"><a class="item" href="#">Giấy notes</a></li>
                                        <li class="sub-item"><a class="item" href="#">Giấy chuyên dụng</a></li>
                                        <li class="sub-item"><a class="item" href="#">Khăn giấy - Giấy vệ sinh</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="menu-category"><a class="menu-category-title" href="#">Thiết bị</a><a
                                        data-toggle="collapse" href="#collapseSeven" role="button" aria-expanded="false"
                                        aria-controls="collapseSeven"><i
                                            class="fas fa-chevron-down menu-arrow button-collapse"></i></a></div>
                                <div class="collapse" id="collapseSeven">
                                    <ul class="sub-menu">
                                        <li class="sub-item"><a class="item" href="#">Giấy in ấn</a></li>
                                        <li class="sub-item"><a class="item" href="#">Giấy in fax - liên tục</a></li>
                                        <li class="sub-item"><a class="item" href="#">Giấy notes</a></li>
                                        <li class="sub-item"><a class="item" href="#">Giấy chuyên dụng</a></li>
                                        <li class="sub-item"><a class="item" href="#">Khăn giấy - Giấy vệ sinh</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="menu-category"><a class="menu-category-title" href="#">Tiện ích</a><a
                                        data-toggle="collapse" href="#collapseEight" role="button" aria-expanded="false"
                                        aria-controls="collapseEight"><i
                                            class="fas fa-chevron-down menu-arrow button-collapse"></i></a></div>
                                <div class="collapse" id="collapseEight">
                                    <ul class="sub-menu">
                                        <li class="sub-item"><a class="item" href="#">Giấy in ấn</a></li>
                                        <li class="sub-item"><a class="item" href="#">Giấy in fax - liên tục</a></li>
                                        <li class="sub-item"><a class="item" href="#">Giấy notes</a></li>
                                        <li class="sub-item"><a class="item" href="#">Giấy chuyên dụng</a></li>
                                        <li class="sub-item"><a class="item" href="#">Khăn giấy - Giấy vệ sinh</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="menu-category"><a class="menu-category-title" href="#">Mực - Ruban</a><a
                                        data-toggle="collapse" href="#collapseNine" role="button" aria-expanded="false"
                                        aria-controls="collapseNine"><i
                                            class="fas fa-chevron-down menu-arrow button-collapse"></i></a></div>
                                <div class="collapse" id="collapseNine">
                                    <ul class="sub-menu">
                                        <li class="sub-item"><a class="item" href="#">Giấy in ấn</a></li>
                                        <li class="sub-item"><a class="item" href="#">Giấy in fax - liên tục</a></li>
                                        <li class="sub-item"><a class="item" href="#">Giấy notes</a></li>
                                        <li class="sub-item"><a class="item" href="#">Giấy chuyên dụng</a></li>
                                        <li class="sub-item"><a class="item" href="#">Khăn giấy - Giấy vệ sinh</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="sidebar-title">PRODUCTS</div>
                <div class="sidebar-content">
                    <div class="widget-list-product">
                        <ul class="list">
                            @foreach ($productsAnother as $item)
                            <li class="list-item d-flex align-items-center"><a href="#"><img width="60" height="60"
                                        src="{{asset($item->image)}}"
                                        alt="" /></a><a href="#"><span class="name d-block">{{$item->name}}</span><span class="cost">{{$item->sell_price}} ₫</span></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="products col-9 row">
                @foreach ($products as $item)
                <div class="col-lg-3 product-item">
                    <a href="#">
                        <div class="item-image"><img src="{{asset($item->image)}}"
                                alt="" /></div>
                        <div class="item-text">
                            <span class="name d-block">{{$item->name}}</span>
                            <span class="cost d-block">{{$item->sell_price}} ₫</span>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>