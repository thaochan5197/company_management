<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from demo.hasthemes.com/adomx-preview/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jul 2019 07:23:23 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Adomx - Responsive Bootstrap 4 Admin Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/images/favicon.ico') }}">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/css/vendor/bootstrap.min.css')  }}">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('/css/vendor/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/vendor/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/vendor/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/vendor/cryptocurrency-icons.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('/css/plugins/plugins.css') }}">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="{{ asset('/css/helper.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    <!-- Custom Style CSS Only For Demo Purpose -->
    <link id="cus-style" rel="stylesheet" href="{{ asset('/css/style-primary.css') }}">

</head>



<body>
<div class="main-wrapper">


@include('include.header')
<!-- Content Body Start -->
    <div class="content-body">

    @include('include.breadcum')

    @yield('content')
    </div><!-- Content Body End -->

    <!-- Footer Section Start -->
    <div class="footer-section">
        <div class="container-fluid">

            <div class="footer-copyright text-center">
                <p class="text-body-light">2019 &copy; <a href="https://themeforest.net/user/codecarnival">Codecarnival</a></p>
            </div>

        </div>
    </div><!-- Footer Section End -->

</div>
<!-- JS
============================================ -->

<!-- Global Vendor, plugins & Activation JS -->
<script src="{{ asset('/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('/js/vendor/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('/js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('/js/vendor/bootstrap.min.js') }}"></script>
<!--Plugins JS-->
<script src="{{ asset('/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('/js/plugins/tippy4.min.js.js') }}"></script>
<!--Main JS-->
<script src="{{ asset('/js/main.js') }}"></script>

<!-- Plugins & Activation JS For Only This Page -->

<!--Moment-->
<script src="{{ asset('/js/plugins/moment/moment.min.js') }}"></script>

<!--Daterange Picker-->
<script src="{{ asset('/js/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('/js/plugins/daterangepicker/daterangepicker.active.js') }}"></script>

<!--Echarts-->
<script src="{{ asset('/js/plugins/chartjs/Chart.min.js') }}"></script>
<script src="{{ asset('/js/plugins/chartjs/chartjs.active.js') }}"></script>

<!--VMap-->
<script src="{{ asset('/js/plugins/vmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('/js/plugins/vmap/maps/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('/js/plugins/vmap/maps/samples/jquery.vmap.sampledata.js') }}"></script>
<script src="{{ asset('/js/plugins/vmap/vmap.active.js') }}"></script>

</body>


<!-- Mirrored from demo.hasthemes.com/adomx-preview/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jul 2019 07:24:22 GMT -->
</html>