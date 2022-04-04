<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>

  <!-- General CSS Files -->
    @include('includes.style')
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      @include('includes.navbar')

      @include('includes.sidebar')

      @yield('content')

      @include('includes.footer')
    </div>
  </div>

  <!-- General JS Scripts -->
  @include('includes.script')
  @include('sweetalert::alert')
</body>
</html>
