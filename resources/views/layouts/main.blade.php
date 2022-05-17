<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.include.header')

<body>

    <!-- Header
        ================================================= -->

    <!--Header End-->

    <!-- Footer
            ================================================= -->
    <!-- Landing Page Contents
                ================================================= -->
    @yield('content')


    @include('layouts.include.footer')
</body>

</html>
