<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    @include('partials.web.styles')
</head>

<body>
    <div class="container-fluid">
        @include('partials.web.navbar-others')

        @include('web.products.categories')

        @include('partials/web/footer')
      </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{asset('web/js/owl-carousel.js')}}"></script>
    <script type="text/javascript" src="{{asset('web/js/navigation.js')}}"></script>
    <script type="text/javascript" src="{{asset('web/js/product-detail.js')}}"></script>
    <script type="text/javascript" src="{{asset('web/js/product.js')}}"></script>
    <script type="text/javascript" src="{{asset('web/js/back-to-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('web/js/index.js')}}"></script>
</body>

</html>