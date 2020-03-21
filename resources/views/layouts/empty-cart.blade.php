<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    @include('partials.web.styles')
</head>

<body>
    <div class="container-fluid">
        @include('partials.web.navbar-others')

        <div class="container">
            <div class="text-center return-to-shop">
                <p>No products in the cart</p><a class="btn btn-danger" href="{{url('/')}}">back to the store</a>
            </div>
        </div>

        @include('partials/web/footer')
      </div>
      @include('partials.web.scripts')
</body>

</html>