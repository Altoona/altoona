<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('parts.global.head')

    <body>

        {{-- Header --}}
        @include('parts.global.header')

        {{-- Body --}}
        <main>
            @yield('body')
        </main>

        {{-- Footer --}}
        @include('parts.global.footer')

    </body>

</html>
