@extends('layouts.web-other-pages')

@section('title', 'Product Detail')

@section('feature_item')
@php
$categoriesAnother = App\Models\Category::where('id', $product->category_id)->get();
@endphp

<section class="container">
    <span id="status"></span>
    <div>
        {{-- @php
        echo $breadcrums;
        @endphp --}}
        <div class='category-page-title'>
            <div class='nav'><a href='{{route('home-page')}}'>Home</a><span class='divider'>/</span><a href='#'>@php echo $slug @endphp</a></div>
        </div>
    </div>

    <div class="productMain row">
        <div class="image col-sm-12 col-lg-6"><img src="{{asset($product->image)}}" /></div>
        <div class="content col-sm-12 col-lg-6">
            <div class="nameTag">
                <h1>{{$product->name}}</h1>
            </div>
            <div class="divideTag"></div>
            <div class="priceTag d-flex">
                <p>{{number_format($product->sell_price)}}</p><span>đ</span>
            </div>
            <div class="textTag">
                <p>{!! nl2br($product->short_description)!!}</p>
            </div>
            <form class="cartForm" action="{{route('carts.add_to_cart', $product->id)}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$product->id}}">
                <div class="quantityControl d-flex">
                    <input type='button' value='-' class='qtyminus btnMinus' field='updates_' />
                    <input type="number" min="1" name="quantity" id="updates_" class="quantity" value="1" />
                    <input type='button' value='+' class='qtyplus btnPlus' field='updates_' />
                    <input class="btn btn-primary" type="submit" id="" name="" value="Add To Cart" />
                    {{-- <p class="btn-holder"><a href="javascript:void(0);" data-id="{{ $product->id }}" class="btn btn-warning btn-block text-center add-to-cart" role="button">Add to cart</a>
                        <i class="fa fa-circle-o-notch fa-spin btn-loading" style="font-size:24px; display: none"></i>
                    </p> --}}
                </div>
            </form>
        </div>
    </div>
    <div class="productDetail">
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" href="#description" data-toggle="tab">Description</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="description">
                <div class="description">
                    <h3>{{$product->name}}</h3>
                    <p>{!! nl2br($product->description)!!}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="productOthers">
        <div class="container-fluid">
            <h3>SIMILAR PRODUCTS</h3>
            <div class="owl-carousel owl-theme slider-part banner-inner">
                @foreach ($categoriesAnother as $item)
                    @foreach ($item->getProductByCategoryId($item->id) as $row)
                    <div class="item">
                        <div class="product-item">
                            <div class="product-image"><a href="{{URL::to('products/'.$row->slug)}}"><img width="80" src="{{asset($row->image)}}" alt=""></a></div>
                            <div class="product-text">
                                <div class="title-wrapper"><a href="{{URL::to('products/'.$row->slug)}}">{{$row->name}}</a></div>
                                <div class="price-wrapper"><span class="price"><span
                                            class="woocommerce-price-amount">{{number_format($row->sell_price)}}&nbsp;</span><span
                                            class="woocommerce-price-currencySymbol">đ</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- @section('scripts')

    <script type="text/javascript">

        $(".add-to-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            ele.siblings('.btn-loading').show();

            $.ajax({
                url: '{{ url('carts/add-to-cart') }}' + '/' + ele.attr("data-id"),
                method: "get",
                data: {_token: '{{ csrf_token() }}'},
                dataType: "json",
                success: function (response) {

                    ele.siblings('.btn-loading').hide();

                    $("span#status").html('<div class="alert alert-success">'+response.msg+'</div>');
                    $("#header-bar").html(response.data);
                }
            });
        });
    </script>

@stop --}}
@endsection