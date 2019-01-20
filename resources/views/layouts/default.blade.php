<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('parts.global.head')

    <body>
        @yield('body')
    </body>

</html>
