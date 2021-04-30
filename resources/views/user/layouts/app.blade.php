<!DOCTYPE html>
<html lang="en">
    <head>
        @include('user.layouts.partials._head')
    </head>
    <body>
        @include('user.layouts.partials._header')

        @yield('content')

        @include('user.layouts.partials._footer')
        @include('user.layouts.partials._js-assets')
    </body>
</html>
