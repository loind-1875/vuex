<div class="col-md-3 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-duration="1.6s">
    <div class="wp-sidebar page-dm-tin sidebar-danhmuc">
        <div class="title-sidebar">
            <h4>Danh mục sản phẩm</h4>
        </div>
        <div id="mainnav">
            <ul>
                @foreach($categories as $category)
                    <li>
                        <a href="{{ route('client.category', parseLink($category)) }}">{{ $category->name }}</a>
                        @if ($category->children)
                            <ul class="sub-menu">
                                @foreach ($category->children as $cateChild)
                                    <li>
                                        <a href="{{ route('client.category', parseLink($cateChild)) }}">{{ $cateChild->name }}</a>
                                        @if ($cateChild->children)
                                            <ul class="sub-menu2">
                                                @foreach($cateChild->children as $child)
                                                    <li>
                                                        <a href="{{ route('client.category', parseLink($child)) }}">{{ $child->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
        <style>

            #mainnav {
                margin-bottom: 20px;
            }

            #mainnav ul {
                background: #0069b4;
                list-style: none;
                padding: 0px;
                text-align: left;
            }

            #mainnav ul li {
                position: relative;
                padding: 15px;
                border-bottom: 1px dashed #fff;
            }

            #mainnav ul li:last-child {
                border-bottom: none;
            }

            #mainnav ul li a {
                text-decoration: none;
                color: #fff;
                padding: 0 16px;
                display: block;
            }

            #mainnav li:hover {
                background: #17306E;
            }

            #mainnav .sub-menu {
                position: absolute;
                left: 270px;
                top: 0px;
                width: 200px;
                display: none;
                text-align: left;
                border-left: 1px solid #fff;
                font-size: 90%;
                border-radius: 0px 10px 10px 0px;
            }

            #mainnav li:hover .sub-menu {
                display: block;
                background: #3B5998;
                color: red;
            }

            #mainnav .sub-menu2 {
                position: absolute;
                left: 200px;
                top: 0;
                width: 200px;
                border-left: 1px solid #fff;
                border-radius: 0px 10px 10px 0px;
                display: none;
            }

            #mainnav .sub-menu li:hover .sub-menu2 {
                display: block;
            }

            #mainnav .sub-menu3 {
                position: absolute;
                left: 200px;
                top: 0;
                width: 200px;
                border-left: 1px solid #fff;
                border-radius: 0px 10px 10px 0px;
                display: none;
            }

            #mainnav .sub-menu4 {
                position: absolute;
                left: 200px;
                top: 0;
                width: 200px;
                border-left: 1px solid #fff;
                border-radius: 0px 10px 10px 0px;
                display: none;
            }

            #mainnav .sub-menu2 li:hover .sub-menu3 {
                display: block;
            }

            #mainnav .sub-menu3 li:hover .sub-menu4 {
                display: block;
            }
        </style>

        <div class="wp-yk-kh">
            <div class="title-ykkh">
                <h4>Ý kiến khách hàng</h4>
            </div>
            <div class="slider-ykkh">
                <div class="ykkh-sl owl-carousel owl-theme">
                </div>
            </div>
        </div>
        <div class="fanpage-fb">

            <div class="fb-page" data-href="https://www.facebook.com/PhuGiaSanXuatSon/" data-tabs="timeline"
                 data-width="270"
                 data-height="220" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
                 data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/PhuGiaSanXuatSon/" class="fb-xfbml-parse-ignore"><a
                        href="https://www.facebook.com/PhuGiaSanXuatSon/">Facebook</a></blockquote>
            </div>
        </div>

        <div class="div-ktv">
            <div class="tt-ktv-1">
                <h4 class="tt-ktv">Hỗ trợ trực tuyến</h4>
            </div>
            <div class="img-ktv">
                <img src="{{ asset(config('media.client.other') . 'img-ktv.png') }}">
            </div>
            <div class="hot-line-ktv">
                <p>Hotline</p>
                <a href="tel:01237281293">01237281293</a>
            </div>
            <hr>
            <div class="nv-tuvan">
                <div class="item-nv-tuvan">
                    <p>Vũ Đức Hồ</p>

                    <p>
                        <span>
                            <a href="#">
                                <img
                                    src="{{ asset(config('media.client.other') . 'img-fb.png') }}"
                                    alt="Vũ Đức Hồ">
                            </a>
                        </span>
                        <span>
                            <a
                                href="tel:">
                                <img
                                    src="{{ asset(config('media.client.other') . 'hotline.png') }}"
                                    alt="Vũ Đức Hồ" style="width: 80px;height: 24px;">
                            </a>
                        </span>
                    </p>
                </div>
                <div class="item-nv-tuvan">
                    <p>Nguyễn Ngọc Linh</p>

                    <p>
                        <span>
                            <a href="#">
                                <img
                                    src="{{ asset(config('media.client.other') . 'img-fb.png') }}"
                                    alt="Nguyễn Ngọc Linh">
                            </a>
                        </span>
                        <span>
                            <a
                                href="tel:tungdao1803">
                                <img
                                    src="{{ asset(config('media.client.other') . 'hotline.png') }}"
                                    alt="Nguyễn Ngọc Linh" style="width: 80px;height: 24px;">
                            </a>
                        </span>
                    </p>
                </div>
                <div class="item-nv-tuvan">
                    <p>Lưu Như Thảo</p>

                    <p>
                        <span>
                            <a href="C%c3%a1n%20b%e1%bb%99%20ph%c3%b2ng%20th%e1%bb%8b%20tr%c6%b0%e1%bb%9dng.html">
                                <img
                                    src="{{ asset(config('media.client.other') . 'img-fb.png') }}"
                                    alt="Lưu Như Thảo">
                            </a>
                        </span>
                        <span>
                            <a
                                href="tel:tungdao1803">
                                <img
                                    src="{{ asset(config('media.client.other') . 'hotline.png') }}"
                                    alt="Lưu Như Thảo" style="width: 80px;height: 24px;">
                            </a>
                        </span>
                    </p>
                </div>
            </div>
        </div>

        <ul style="margin-top: 10px">
            <li style="margin-bottom: 10px;">
                <a href="#" class="cta">
                    <img
                        src="{{ asset(config('media.client.other') . 'banner-doc12.png') }}"
                         alt=""
                         class="img banner-large"
                        style="width: 100% !important;"
                    >
                </a>

            </li>
        </ul>
    </div>
</div>
