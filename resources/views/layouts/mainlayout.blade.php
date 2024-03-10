<!DOCTYPE html>
<html lang="en">

<head>
  @include('partials.header')

  @include('partials.css')
</head>

<body>

  <!-- ======= Header ======= -->
  @include('partials.topbar')

  <!-- ======= Sidebar ======= -->
  @include('partials.sidebar')

  {{-- Call Body From Other Page --}}
  @yield('body')

  <!-- ======= Footer ======= -->
  @include('partials.footer')

  @include('partials.script')

</body>

</html>