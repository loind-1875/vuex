<header class="">
    <div class="wp-header-pc hidden-sm hidden-xs">
        <div class="header-top" style="margin-bottom: 10px;">
            <div class="container">
                <div class="wp-social">
                    <div class="list-social animated bounceIn">
                        <ul>
                            <li><a href="https://www.facebook.com/PhuGiaSanXuatSon/"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.facebook.com/PhuGiaSanXuatSon/"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="Instagramhttps://www.facebook.com/PhuGiaSanXuatSon/"><i
                                        class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.facebook.com/PhuGiaSanXuatSon/"><i class="fa fa-youtube"></i></a>
                            </li>
                            <li><a href="Link%20to%20gg.html"><i
                                        class="fa fa-google"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="wp-header-top-main">
                    <div class="animated zoomIn wp-logo1">
                        <a href="http://congtyhft.com/">
                            <img src="{{ asset(config('media.client.other') . 'group-3.png') }}" alt="CÔNG TY TNHH TM & DV HÓA CHẤT H.F.T ">
                        </a>
                    </div>
                    <div class="wp-img-topheader animated pulse">
                        <img src="{{ asset(config('media.client.other') . '3.jpg') }}" alt="CÔNG TY TNHH TM & DV HÓA CHẤT H.F.T ">
                    </div>
                    <div class="wp-header-right">
                        <div class="wp-hotline-topsr animated fadeInRight">
                            <div class="hot-line-top">
                                <p>HOTLINE</p>
                                <h4>
                                    <a href="tel:01237281293">01237281293</a>
                                </h4>
                            </div>
                            <div class="search-top">
                                <div class="wp-sr-top">
                                    <form action="http://congtyhft.tamphat.edu.vn/tim-kiem.html" method="get">
                                        <input type="text" name="key" placeholder="Tìm kiếm...">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .fixed {
                position: fixed !important;
                width: 100%;
                top: 0px;
                z-index: 99999999999999999999999999999999999999;
            }
        </style>
        <div class="wp-menu-pc animated pulse header-fixel">
            <nav class="navbar navbar-default ">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
                        <ul class="nav navbar-nav">

                            <li class="">
                                <a href="index.html">Trang chủ</a>
                            </li>
                            <li class="">
                                <a href="gioi-thieu-chung.html">Giới thiệu</a>
                            </li>
                            <li class="">
                                <a href="hoa-chat.html">Hóa Chất</a>
                            </li>
                            <li class="">
                                <a href="dong-co.html">động cơ</a>
                            </li>
                            <li class="">
                                <a href="tuyen-dung.html">Tuyển Dụng</a>
                            </li>
                            <li class="">
                                <a href="tin-tuc.html">Tin tức</a>
                            </li>
                            <li class="">
                                <a href="bao-hanh.html">bảo hành</a>
                            </li>
                            <li class="">
                                <a href="lien-he.html">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="wp-header-mobile hidden-md hidden-lg">
        <div class="menu-bar hidden-md hidden-lg"
             style="position: relative;transform: translateY(0%);top:0px;right: 0px;">
            <a href="#nav-mobile">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <div class="wp-logo-mb">
            <a href="http://congtyhft.com/">
                <img src="{{ asset(config('media.client.other') . 'group-3.png') }}" alt="CÔNG TY TNHH TM & DV HÓA CHẤT H.F.T ">
            </a>
        </div>
        <div class="search-mobile">
            <button id="click-search-mb"><i class="fa fa-search"></i></button>
            <div class="fr-search-mb" style="display: none;">
                <div class="wp-fr-mobile">
                    <form action="http://congtyhft.tamphat.edu.vn/tim-kiem.html" method="get">
                        <input type="text" name="key" placeholder="Tìm kiếm...">
                        <button><i class="fa fa-search"></i></button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</header>
