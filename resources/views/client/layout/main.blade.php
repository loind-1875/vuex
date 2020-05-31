<!DOCTYPE html>
<html>
<head>
    <base />
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="content-language" content="vi"/>
    <link rel="alternate" href="index.html" hreflang="vi-vn"/>
    <meta name="robots" content="index,follow"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="HFT"/>
    <meta name="copyright" content="HFT"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"/>
    <meta http-equiv="refresh" content="1800"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- for Google -->
    <title>@yield('title')</title>
    <meta name="keywords" content=""/>
    <meta name="description"
          content="hóa chất là gì, hóa chất công nghiệp, định nghĩa hóa chất, bán hóa chất công nghiệp, hóa chất thí nghiệm, công ty hóa chất, mua hóa chất thí nghiệm, hóa chất công nghiệp là gì"/>
    <meta name="revisit-after" content="1 days">
    <meta name="rating" content="general">

    <!-- for Facebook -->
    <meta property="og:title"
          content="HFT Hóa Chất và Động cơ "/>
    <meta property="og:type" content="article"/>
    <meta property="og:image"
          content="index.html"/>
    <meta property="og:description"
          content="hóa chất là gì, hóa chất công nghiệp, định nghĩa hóa chất, bán hóa chất công nghiệp, hóa chất thí nghiệm, công ty hóa chất, mua hóa chất thí nghiệm, hóa chất công nghiệp là gì"/>
    <meta property="og:site_name" content="HFT"/>
    <meta property="fb:admins" content=""/>
    <meta property="fb:app_id" content=""/>

    <!-- for Twitter -->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:title" content="HFT Hóa Chất và Động cơ "/>
    <meta name="twitter:description"
          content="hóa chất là gì, hóa chất công nghiệp, định nghĩa hóa chất, bán hóa chất công nghiệp, hóa chất thí nghiệm, công ty hóa chất, mua hóa chất thí nghiệm, hóa chất công nghiệp là gì"/>
    <meta name="twitter:image"
          content="index.html"/>
    <link rel="icon" href="{{ getImageOther('group-3.png') }}" type="image/png" sizes="30x30">

    <!--load css js của trang-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i&amp;subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="/client/css/client.css">
    <script src="/client/js/client.js"></script>
    <style>
        .no-content {
            font-size: 17px;
            text-align: center;
            margin: 20px;
        }
    </style>
    @yield('style')
</head>
<body>
<div class="page-body"> <!-- div body -->

    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0&appId=548945608802089&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    @include('client.layout.header')

    <!--viết thân trang-->
    @yield('content')
<!--end-->
    @include('client.layout.footer')
</div>
<!-- js menu mobile -->
<script type="text/javascript">
    $(document).ready(function () {

        if (window.innerWidth > 768) {
            $(window).scroll(function () {
                if ($(window).scrollTop() >= 100) {
                    $('.header-fixel').addClass('fixed');
                } else {
                    $('.header-fixel').removeClass('fixed');
                }
            });
        }


        new WOW().init();

        var BASE_URL = '/';

        // function setActive() {
        //     var aObj = document.getElementById('menu2').getElementsByTagName('a');
        //     for (i = 0; i < aObj.length; i++) {
        //         if (aObj[i].href == document.location.href)
        //             aObj[i].className = 'is-active';
        //     }
        // }
        // window.onload = setActive;

        <!-- js menu sidebar danh mục sản phẩm -->
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight){
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }

        function awe_menumobile() {
            $('.menu-bar').click(function (e) {
                e.preventDefault();
                $('#nav').toggleClass('open');
            });
            $('#nav .fa').click(function (e) {
                e.preventDefault();
                $(this).parent().parent().toggleClass('open');
            });
        }
        window.awe_menumobile = awe_menumobile;

        $("#nav-mobile").mmenu();
    });
</script>

<!-- js back to top -->
<script type="text/javascript">
    if ($('#back-to-top').length) {
        var scrollTrigger = 800, // px
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('#back-to-top').addClass('show');
                } else {
                    $('#back-to-top').removeClass('show');
                }
            };
        backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });
        $('#back-to-top').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }
</script>

@yield('script')

<!-- menu mobile -->
<nav id="nav-mobile" class="hidden-md hidden-lg">
    <div>
        <ul class="ul-1">
            <li><a href="index.html">Trang chủ</a>

            </li>
            <li><a href="gioi-thieu-chung.html">Giới thiệu</a>

            </li>
            <li><a href="hoa-chat.html">Hóa Chất</a>

            </li>
            <li><a href="dong-co.html">động cơ</a>

            </li>
            <li><a href="tuyen-dung.html">Tuyển Dụng</a>

            </li>
            <li><a href="tin-tuc.html">Tin tức</a>

            </li>
            <li><a href="bao-hanh.html">bảo hành</a>

            </li>
            <li><a href="lien-he.html">Liên hệ</a>

            </li>

        </ul>
    </div>
</nav></div>
</body>
</html>
