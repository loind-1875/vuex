<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title')</title>

    <meta name="keywords" content="{{ $settings[0]['detail'] }}" />
    <meta name="description" content="{!! $settings[1]['detail'] !!}">
    <meta name="author" content="{{ $settings[0]['detail'] }}">

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
    <a rel="nofollow" target="_blank" href="http://zalo.me/123" title="Zalo 123" id="floating-sms-zalo"></a>
    <a rel="nofollow" target="_blank" href="tel:0984282942" title="Gửi tin nhắn cho chúng tôi qua Facebook" class="ctrlq fb-button"><i class="fa fa-phone" aria-hidden="true"></i></a>
</div>

<script src="/client/js/client.js"></script>

@yield('script')

</body>
</html>
