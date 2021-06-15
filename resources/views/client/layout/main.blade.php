<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title')</title>

    <meta name="keywords" content="{{ strip_tags($settings[1]['detail']) }}" />
    <meta name="description" content="{{ strip_tags($settings[1]['detail']) }}">
    <meta name="author" content="{{ strip_tags($settings[1]['detail']) }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ $settings[3]['value'] }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ $settings[3]['value'] }}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600&display=swap" rel="stylesheet">

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

    <div class="contact-action">
        <a rel="nofollow" target="_blank" href="http://zalo.me/0943863377" title="Zalo 0943 863 377" id="floating-sms-zalo"></a>
        <div class="phonering-alo-phone phonering-alo-green phonering-alo-show" id="phonering-alo-phoneIcon">
            <div class="phonering-alo-ph-circle"></div>
            <div class="phonering-alo-ph-circle-fill"></div>
            <a href="tel:0943863377" class="pps-btn-img" title="Call">
                <div class="phonering-alo-ph-img-circle"></div>
            </a>
        </div>
    </div>
</div>

<script src="/client/js/client.js"></script>

@yield('script')

</body>
</html>
