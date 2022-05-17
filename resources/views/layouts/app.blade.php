<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.include.header')

<body>

    <!-- Header
        ================================================= -->

    @include('layouts.include.nav')
    <!--Header End-->

    <!-- Footer
            ================================================= -->
    <!-- Landing Page Contents
                ================================================= -->
    @yield('content')


    @include('layouts.include.footer')
    @yield('script');
</body>

</html>
