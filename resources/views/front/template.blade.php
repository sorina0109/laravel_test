@include('front.partials.head')

<body>

    <!-- Top Start -->
    <section class="top bg-white ">
        <div class="container-fluid px-xl-5  ">
            <div class="row px-xl-5 ">
                @include('front.partials.topbar')
                @include('front.partials.navbar')

            </div>
        </div>
    </section>
    <!-- Top End -->

    <!-- Content Start -->
    <section class="content">

        @yield('content')
    </section>
    <!-- Content End -->

    <!-- Footer Start -->
    <section class="footer bg-dark pt-5">

        @include('front.partials.footer')
    </section>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    @include('front.partials.scripts')

    @livewireScripts

</body>

</html>