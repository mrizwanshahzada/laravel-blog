<!DOCTYPE html>
<html lang="en">
<head>
  @include('admin.layouts.partials._head')
  @yield('head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  @include('admin.layouts.partials._header')

  @include('admin.layouts.partials._left-side-bar')

  @yield('content')

  @include('admin.layouts.partials._footer')


</div>
<!-- ./wrapper -->
  @include('admin.layouts.partials._js-assets')
  @yield('js-assets')
</body>
</html>
