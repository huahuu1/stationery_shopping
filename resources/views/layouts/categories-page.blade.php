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
      @include('partials.web.scripts')
</body>

</html>