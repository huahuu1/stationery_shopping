<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>@yield('title')</title>
    @include('partials.web.styles')
  </head>
  <body>
    <div class="container-fluid">
      <div class="wrapper-nav">
        @include('partials.web.navbar-others')
      </div>

      @yield('feature_item')

      @include('partials/web/footer')
    </div>
    @include('partials.web.scripts')
  </body>
  <script>
    $(window).resize(function(){
      var w = $(window).width();
      if(w < 768) {
        $('.banner').removeClass('container-fluid');
        $('.banner').addClass('container');
      } else {
        $('.banner').addClass('container-fluid');
        $('.banner').removeClass('container');
      }
    });
  </script>
</html>