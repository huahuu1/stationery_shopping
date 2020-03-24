@php
    $productsAnother = App\Models\Product::whereBetween('id', [1, 5])->get();

    $categories = App\Models\Category::where('parent_id', 0)->get();
@endphp

<section class="container">
    <div>
        @php
        echo $breadcrums;
        if(!$keyword) {
            $count = $products->total();
            if($count < 2) {
                echo "$count product found";
            } else {
                echo "$count products found";
            }
        } else {
            if($count < 2) {
                echo "$count product found";
            } else {
                echo "$count products found";
            }
        }
        @endphp
    </div>
    <div class="detail-product">
        <div class="row">
            <div class="sidebar col-3">
                <div class="sidebar-title">CATEGORY OF PRODUCTS</div>
                <div class="sidebar-content">
                    <div class="widget-list-product d-flex">
                        <ul class="menu">
                            <li><i class="fas fa-star"></i><span><a href="{{route('categories.all')}}">Help you choose</a></span></li>
                            @foreach ($categories as $item)
                            <li>
                                <div class="menu-category">
                                    <a class="menu-category-title" href="{{URL::to('categories/'.$item->slug)}}">{{$item->name}}
                                    </a>
                                    <a data-toggle="collapse" href="#collapse{{$loop->iteration}}" role="button" aria-expanded="false" aria-controls="collapse{{$loop->iteration}}">
                                        <i class="fas fa-chevron-down menu-arrow button-collapse">
                                        </i>
                                    </a>
                                </div>
                                <div class="collapse" id="collapse{{$loop->iteration}}">
                                    <ul class="sub-menu">
                                        @foreach ($item->getCategoriesByParentId($item->id) as $row)
                                        <li class="sub-item">
                                            <a class="item" href="{{URL::to('categories/'.$row->slug)}}">{{$row->name}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                            @endforeach
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
                                        alt="" /></a><a href="#"><span class="name d-block">{{$item->name}}</span><span class="cost">{{number_format($item->sell_price)}} ₫</span></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="products col-9 row">
                @foreach ($products as $item)
                <div class="col-lg-3 product-item">
                    <a href="{{URL::to('products/'.$item->slug)}}">
                        <div class="item-image"><img src="{{asset($item->image)}}"
                                alt="" /></div>
                        <div class="item-text">
                            <span class="name d-block">{{$item->name}}</span>
                            <span class="cost d-block">{{number_format($item->sell_price)}} ₫</span>
                        </div>
                    </a>
                </div>
                @endforeach
                <div class="pagination col-lg-12 justify-content-center">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</section>