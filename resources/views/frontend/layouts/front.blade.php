<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    @include('frontend.includes.style')

    <title>@yield('title')</title>
  </head>
  <body>

    <!-- Navbar -->
    @include('frontend.includes.navbar-home')

    <!-- Content -->
    @yield('content')

    <!-- Footer-->
    @include('frontend.includes.footer')

    <!-- Bootstrap Javascript -->
  @include('frontend.includes.script')

  </body>
</html>