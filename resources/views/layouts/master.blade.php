@include('includes.default-header')

<body>

<!-- ==================== Start Loading ==================== -->

<div id="preloader">
</div>

<!-- ==================== End Loading ==================== -->



<!-- ==================== Start progress-scroll-button ==================== -->

<div class="progress-wrap cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>

<!-- ==================== End progress-scroll-button ==================== -->



<!-- ==================== Start cursor ==================== -->

<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>

<!-- ==================== End cursor ==================== -->



<!-- ==================== Start Navbar ==================== -->

@include('includes.navbar')

<!-- ==================== End Navbar ==================== -->



<!-- ==================== Start Slider ==================== -->

@yield('slider')

<!-- ==================== End Slider ==================== -->

<!-- ==================== Start header ==================== -->

@yield('header')

<!-- ==================== End header ==================== -->

<div class="main-content">


    <!-- ==================== Start about ==================== -->

    @yield('about')

    <!-- ==================== End about ==================== -->



    <!-- ==================== Start Services ==================== -->

    @yield('services')

    <!-- ==================== End Services ==================== -->



    <!-- ==================== Start numbers ==================== -->

    @yield('number-sec')

    <!-- ==================== End numbers ==================== -->



    <!-- ==================== Start works ==================== -->

    @yield('work-carousel')

    <!-- ==================== End works ==================== -->



    <!-- ==================== Start block-sec ==================== -->

    @yield('block-sec')

    <!-- ==================== End block-sec ==================== -->



    <!-- ==================== Start Skills Circle ==================== -->

    @yield('skills-circle')

    <!-- ==================== End Skills Circle ==================== -->



    <!-- ==================== Start clients Brands ==================== -->

    @yield('clients')

    <!-- ==================== End clients Brands ==================== -->



    <!-- ==================== Start Blog ==================== -->

    @yield('blog-curs')

    <!-- ==================== End Blog ==================== -->



    <!-- ==================== Start call-to-action ==================== -->

    @yield('call-to-action')

    <!-- ==================== End call-to-action ==================== -->



    <!-- ==================== Start Footer ==================== -->

    @yield('footer-half')

    <!-- ==================== End Footer ==================== -->

</div>

@include('includes.default-footer')
