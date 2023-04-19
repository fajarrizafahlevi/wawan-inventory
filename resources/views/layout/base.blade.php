<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('sash/assets/images/brand/favicon.ico')}}" />

    <!-- TITLE -->
    <title>@yield('title')</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{asset('sash/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{asset('sash/assets/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('sash/assets/css/dark-style.css')}}" rel="stylesheet" />
    <link href="{{asset('sash/assets/css/transparent-style.css')}}" rel="stylesheet">
    <link href="{{asset('sash/assets/css/transparent-style.css')}}" rel="stylesheet" />
    <link href="{{asset('sash/assets/css/skin-modes.css')}}" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{asset('sash/assets/css/icons.css')}}" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('sash/assets/colors/color1.css')}}" />
    @yield('style')
</head>

<body class="app sidebar-mini ltr">

<!-- GLOBAL-LOADER -->
<div id="global-loader">
    <img src="{{asset('sash/assets/images/loader.svg')}}" class="loader-img" alt="Loader">
</div>
<!-- /GLOBAL-LOADER -->

<!-- PAGE -->
<div class="page">
    <div class="page-main">

        @include('layout.header')
        @include('layout.sidebar')

        <!--app-content open-->
        <div class="main-content app-content mt-0">
            <div class="side-app">

                <!-- CONTAINER -->
                <div class="main-container container-fluid">
                    <div class="container">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">@yield('page-title')</h1>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ini content -->
                        @yield('content')

                    </div>
                </div>
                <!-- CONTAINER CLOSED-->
            </div>
        </div>
        <!--app-content closed-->
    </div>

    @include('layout.footer')
</div>

<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- JQUERY JS -->
<script src="{{asset('sash/assets/js/jquery.min.js')}}"></script>

<!-- BOOTSTRAP JS -->
<script src="{{asset('sash/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('sash/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- SPARKLINE JS-->
<script src="{{asset('sash/assets/js/jquery.sparkline.min.js')}}"></script>

<!-- CHART-CIRCLE JS-->
<script src="{{asset('sash/assets/js/circle-progress.min.js')}}"></script>

<!-- INPUT MASK JS-->
<script src="{{asset('sash/assets/plugins/input-mask/jquery.mask.min.js')}}"></script>

<!--SIDEMENU JS -->
<script src="{{asset('sash/assets/plugins/sidemenu/sidemenu.js')}}"></script>

<!-- COUNTERS JS-->
<script src="{{asset('sash/assets/plugins/counters/counterup.min.js')}}"></script>
<script src="{{asset('sash/assets/plugins/counters/waypoints.min.js')}}"></script>
<script src="{{asset('sash/assets/plugins/counters/counters-1.js')}}"></script>

<!-- SIDEBAR JS -->
<script src="{{asset('sash/assets/plugins/sidebar/sidebar.js')}}"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="{{asset('sash/assets/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
<script src="{{asset('sash/assets/plugins/p-scroll/pscroll.js')}}"></script>
<script src="{{asset('sash/assets/plugins/p-scroll/pscroll-1.js')}}"></script>

<!-- Color Theme js -->
<script src="{{asset('sash/assets/js/themeColors.js')}}"></script>

<!-- Sticky js -->
<script src="{{asset('sash/assets/js/sticky.js')}}"></script>

<!-- CUSTOM JS -->
<script src="{{asset('sash/assets/js/custom.js')}}"></script>
@yield('script')

</body>

</html>
