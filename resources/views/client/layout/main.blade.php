<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title')</title>

    <meta name="keywords" content="{{ $settings[0]['value'] }}" />
    <meta name="description" content="{{ $settings[1]['value'] }}">
    <meta name="author" content="{{ $settings[0]['value'] }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ $settings[3]['value'] }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ $settings[3]['value'] }}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="/client/css/client.css">
    @yield('style')
    @yield('meta')

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
