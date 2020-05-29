<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/polygon/admindek/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:07:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>@yield('title')</title>


    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="colorlib" />

    <link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/admin/css/admin.css">
    @yield('style')
</head>
<body>

<div class="loader-bg">
    <div class="loader-bar"></div>
</div>

<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        @include('admin.layout.header')

        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">

                @include('admin.layout.sidebar')

                <div class="pcoded-content">

                    <div class="page-header card">
{{--                        <div class="row align-items-end">--}}
{{--                            <div class="col-lg-8">--}}
{{--                                <div class="page-header-title">--}}
{{--                                    <i class="feather icon-box bg-c-blue"></i>--}}
{{--                                    <div class="d-inline">--}}
{{--                                        <h5>Buttons</h5>--}}
{{--                                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-4">--}}
{{--                                <div class="page-header-breadcrumb">--}}
{{--                                    <ul class=" breadcrumb breadcrumb-title">--}}
{{--                                        <li class="breadcrumb-item"><a href="#!">Basic Components</a>--}}
{{--                                        </li>--}}
{{--                                        <li class="breadcrumb-item">--}}
{{--                                            <a href="#!">Buttons</a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>

                    <div class="pcoded-inner-content">

                        <div class="main-body">
                            <div class="page-wrapper">

                                <div class="page-body button-page">
                                    @yield('content')
                                </div>

                            </div>
                        </div>

                        <div id="styleSelector">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="/admin/js/admin.js"></script>
{{--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="text/javascript"></script>--}}
{{--<script type="text/javascript">--}}
{{--  window.dataLayer = window.dataLayer || [];--}}
{{--  function gtag(){dataLayer.push(arguments);}--}}
{{--  gtag('js', new Date());--}}

{{--  gtag('config', 'UA-23581568-13');--}}
{{--</script>--}}
@yield('script')
</body>
</html>
