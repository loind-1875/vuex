<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title')</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="{{ __('home.company.name') }}">
    <meta name="author" content="danhloimta">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="/client/css/client.css">
    @yield('style')

</head>

<div class="body">
    @include('client.layout.header')

    <div role="main" class="main">
        @yield('content')
    </div>

    @include('client.layout.footer')
</div>

<script src="/client/js/client.js"></script>

@yield('script')

</body>
</html>
