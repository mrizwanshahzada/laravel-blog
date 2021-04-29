<!DOCTYPE html>
<html lang="en">
    @include('user.layouts.head')
    <body>
        @include('user.layouts.header')

        @yield('content')

        @include('user.layouts.footer')
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('user/js/scripts.js') }}"></script>
    </body>
</html>
