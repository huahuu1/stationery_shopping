<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script src="{{asset('web/js/owl-carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('web/js/navigation.js')}}"></script>
<script type="text/javascript" src="{{asset('web/js/product-detail.js')}}"></script>
<script type="text/javascript" src="{{asset('web/js/product.js')}}"></script>
<script type="text/javascript" src="{{asset('web/js/back-to-top.js')}}"></script>
<script type="text/javascript" src="{{asset('web/js/category-detail.js')}}"></script>
<script type="text/javascript" src="{{asset('web/js/index.js')}}"></script>
@yield('scripts')
@yield('scripts-cart')
{{-- @yield('scripts-account') --}}
<script>
    // $(window).resize(function() {
    //     var w = $(window).width();
    //     if (w > 767) {
    //         $('#accountHover').show();
    //         $('#accountDropDown').hide();
    //         // $('#accountHover').css('display', 'block');
    //         // $('#accountDropDown').css('display', 'none');
    //     } else {
    //         $('#accountHover').hide();
    //         $('#accountDropDown').show();
    //         // $('#accountHover').css('display', 'none');
    //         // $('#accountDropDown').css('display', 'block');
    //     }
    // });
    // $(window).on('mouseover', function() {
    //     var w = $(window).width();
    //     if (w > 767) {
    //         $('#accountHover').show();
    //         $('#accountDropDown').hide();
    //         // $('#accountHover').css('display', 'block');
    //         // $('#accountDropDown').css('display', 'none');
    //     } else {
    //         $('#accountHover').hide();
    //         $('#accountDropDown').show();
    //         // $('#accountHover').css('display', 'none');
    //         // $('#accountDropDown').css('display', 'block');
    //     }
    // });

    $(window).on('mouseover', function() {
        var w = $(window).width();
        if (w > 599) {
            $('#accountHover').show();
            $('#accountDropDown').hide();
            $('.menuHover').show();
            $('.menuDropDown').hide();
        } else {
            $('#accountHover').hide();
            $('#accountDropDown').show();
            $('.menuHover').hide();
            $('.menuDropDown').show();
        }
    });
</script>