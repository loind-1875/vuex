@extends('client.layout.main')

@section('content')
    <div class="slider-container rev_slider_wrapper" style="height: 670px;">
        <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 670, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': true }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
            <ul>
                <li data-transition="fade">
                    <img src="img/slides/slide-bg.jpg"
                         alt=""
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         class="rev-slidebg">

                    <div class="tp-caption tp-resizeme"
                         data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"opacity:0;x:100%;y:-100%;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-type="image"
                         data-x="right"
                         data-y="top"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-basealign="slide"><img src="img/slides/slide-devices.jpg" alt=""></div>

                    <div class="tp-caption tp-resizeme"
                         data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"opacity:0;x:-100%;y:-100%;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-type="image"
                         data-x="left"
                         data-y="center"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-basealign="slide"><img src="img/slides/slide-laptop.jpg" alt=""></div>

                    <div class="tp-caption tp-resizeme rs-parallaxlevel-7"
                         data-frames='[{"delay":2500,"speed":1500,"frame":"0","from":"opacity:0;x:-50%;y:-50%;","to":"opacity:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-type="image"
                         data-x="-500"
                         data-y="-700"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-basealign="slide"><img src="img/slides/slide-parallax-porto-symbol.png" alt=""></div>

                    <div class="tp-caption"
                         data-x="center" data-hoffset="['-150','-150','-150','-240']"
                         data-y="center" data-voffset="['-50','-50','-50','-75']"
                         data-start="1000"
                         data-transform_in="x:[-300%];opacity:0;s:500;"
                         data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                    <div class="tp-caption text-color-light font-weight-normal"
                         data-x="center"
                         data-y="center" data-voffset="['-50','-50','-50','-75']"
                         data-start="700"
                         data-fontsize="['22','22','22','40']"
                         data-lineheight="['25','25','25','45']"
                         data-transform_in="y:[-50%];opacity:0;s:500;">DO YOU NEED A NEW</div>

                    <div class="tp-caption d-none d-md-block"
                         data-frames='[{"delay":2400,"speed":500,"frame":"0","from":"opacity:0;x:10%;","to":"opacity:1;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-hoffset="['80','80','80','135']"
                         data-y="center" data-voffset="['-33','-33','-33','-55']"><img src="img/slides/slide-blue-line.png" alt=""></div>

                    <div class="tp-caption"
                         data-x="center" data-hoffset="['150','150','150','240']"
                         data-y="center" data-voffset="['-50','-50','-50','-75']"
                         data-start="1000"
                         data-transform_in="x:[300%];opacity:0;s:500;"
                         data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                    <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
                         data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-x="center"
                         data-y="center"
                         data-fontsize="['50','50','50','90']"
                         data-lineheight="['55','55','55','95']">WEB DESIGN?</div>

                    <div class="tp-caption font-weight-light"
                         data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                         data-x="center"
                         data-y="center" data-voffset="['40','40','40','80']"
                         data-fontsize="['18','18','18','50']"
                         data-lineheight="['20','20','20','55']"
                         style="color: #b5b5b5;">Check out our options and features</div>

                </li>
                <li class="slide-overlay" data-transition="fade">
                    <img src="img/slides/slide-bg-2.jpg"
                         alt=""
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         class="rev-slidebg">

                    <div class="tp-caption"
                         data-x="center" data-hoffset="['-170','-170','-170','-350']"
                         data-y="center" data-voffset="['-50','-50','-50','-75']"
                         data-start="1000"
                         data-transform_in="x:[-300%];opacity:0;s:500;"
                         data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                    <div class="tp-caption text-color-light font-weight-normal"
                         data-x="center"
                         data-y="center" data-voffset="['-50','-50','-50','-75']"
                         data-start="700"
                         data-fontsize="['16','16','16','40']"
                         data-lineheight="['25','25','25','45']"
                         data-transform_in="y:[-50%];opacity:0;s:500;">WE WORK HARD AND PORTO HAS</div>

                    <div class="tp-caption"
                         data-x="center" data-hoffset="['170','170','170','350']"
                         data-y="center" data-voffset="['-50','-50','-50','-75']"
                         data-start="1000"
                         data-transform_in="x:[300%];opacity:0;s:500;"
                         data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                    <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1"
                         data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-x="center"
                         data-y="center"
                         data-fontsize="['50','50','50','90']"
                         data-lineheight="['55','55','55','95']">THE BEST DESIGN</div>

                    <div class="tp-caption font-weight-light ws-normal text-center"
                         data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                         data-x="center"
                         data-y="center" data-voffset="['60','60','60','105']"
                         data-width="['530','530','530','1100']"
                         data-fontsize="['18','18','18','40']"
                         data-lineheight="['26','26','26','45']"
                         style="color: #b5b5b5;">Trusted by over <strong class="text-color-light">30,000</strong> satisfied users, Porto is a huge success in the one of largest world's MarketPlace.</div>

                </li>
                <li class="slide-overlay slide-overlay-primary" data-transition="fade">
                    <img src="img/slides/slide-bg-6.jpg"
                         alt=""
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         class="rev-slidebg">

                    <div class="tp-caption"
                         data-x="center" data-hoffset="['-145','-145','-145','-320']"
                         data-y="center" data-voffset="['-80','-80','-80','-130']"
                         data-start="1000"
                         data-transform_in="x:[-300%];opacity:0;s:500;"
                         data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                    <div class="tp-caption text-color-light font-weight-normal"
                         data-x="center"
                         data-y="center" data-voffset="['-80','-80','-80','-130']"
                         data-start="700"
                         data-fontsize="['16','16','16','40']"
                         data-lineheight="['25','25','25','45']"
                         data-transform_in="y:[-50%];opacity:0;s:500;">WE CREATE DESIGNS, WE ARE</div>

                    <div class="tp-caption"
                         data-x="center" data-hoffset="['145','145','145','320']"
                         data-y="center" data-voffset="['-80','-80','-80','-130']"
                         data-start="1000"
                         data-transform_in="x:[300%];opacity:0;s:500;"
                         data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                    <div class="tp-caption font-weight-extra-bold text-color-light"
                         data-frames='[{"delay":1300,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-hoffset="['-155','-155','-155','-255']"
                         data-y="center"
                         data-fontsize="['145','145','145','250']"
                         data-lineheight="['150','150','150','260']">P</div>

                    <div class="tp-caption font-weight-extra-bold text-color-light"
                         data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-hoffset="['-80','-80','-80','-130']"
                         data-y="center"
                         data-fontsize="['145','145','145','250']"
                         data-lineheight="['150','150','150','260']">O</div>

                    <div class="tp-caption font-weight-extra-bold text-color-light"
                         data-frames='[{"delay":1700,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-x="center"
                         data-y="center"
                         data-fontsize="['145','145','145','250']"
                         data-lineheight="['150','150','150','260']">R</div>

                    <div class="tp-caption font-weight-extra-bold text-color-light"
                         data-frames='[{"delay":1900,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-hoffset="['65','65','65','115']"
                         data-y="center"
                         data-fontsize="['145','145','145','250']"
                         data-lineheight="['150','150','150','260']">T</div>

                    <div class="tp-caption font-weight-extra-bold text-color-light"
                         data-frames='[{"delay":2100,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-hoffset="['139','139','139','240']"
                         data-y="center"
                         data-fontsize="['145','145','145','250']"
                         data-lineheight="['150','150','150','260']">O</div>

                    <div class="tp-caption font-weight-light text-color-light"
                         data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2300,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                         data-x="center"
                         data-y="center" data-voffset="['85','85','85','140']"
                         data-fontsize="['18','18','18','40']"
                         data-lineheight="['26','26','26','45']">The best choice for your new website</div>

                </li>
            </ul>
        </div>
    </div>

    <div class="container mb-5 pb-4">

        <div class="row">
            <div class="col">
                <hr class="my-5">
            </div>
        </div>

        <div class="row pb-3">
            <div class="col-lg-12">
                <div class="col text-center">
                    <h2 class="font-weight-semibold text-6 mb-0">{{ __('home.choose_me') }}</h2>
                </div>
                <div class="featured-boxes featured-boxes-style-3 featured-boxes-flat">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="featured-box featured-box-secondary featured-box-effect-3">
                                <div class="box-content box-content-border-0">
                                    <i class="icon-featured far fa-check-square"></i>
                                    <h4 class="font-weight-normal text-5 mt-3">
                                        {{ __('home.quality') }}
                                    </h4>
                                    <p class="mb-2 mt-2 text-2">
                                        Tạo ra được những sản phẩm tốt nhất ngay trên đất nước Việt Nam
                                        và cho chính người Việt Nam sử dụng.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="featured-box featured-box-secondary featured-box-effect-3">
                                <div class="box-content box-content-border-0">
                                    <i class="icon-featured fas fa-location-arrow"></i>
                                    <h4 class="font-weight-normal text-5 mt-3">
                                        {{ __('home.technology') }}
                                    </h4>
                                    <p class="mb-2 mt-2 text-2">
                                        {{ __('home.tech_detail') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="featured-box featured-box-secondary featured-box-effect-3">
                                <div class="box-content box-content-border-0">
                                    <i class="icon-featured far fa-heart"></i>
                                    <h4 class="font-weight-normal text-5 mt-3">
                                        {{ __('home.trust') }}
                                    </h4>
                                    <p class="mb-2 mt-2 text-2">
                                        {{ __('home.trust_detail') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="featured-box featured-box-secondary featured-box-effect-3">
                                <div class="box-content box-content-border-0">
                                    <i class="icon-featured fas fa-tools"></i>
                                    <h4 class="font-weight-normal text-5 mt-3">{{ __('home.warranty') }}</h4>
                                    <p class="mb-2 mt-2 text-2">
                                        {{ __('home.warranty_detail') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section section-default border-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="750">
        <div class="container py-4">

            <div class="row align-items-center">
                <div class="col-md-6 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1000">
                    <div class="owl-carousel owl-theme nav-inside mb-0" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}">
                        <div>
                            <img alt="" class="img-fluid" src="img/generic/generic-corporate-3-2-full.jpg">
                        </div>
                        <div>
                            <img alt="" class="img-fluid" src="img/generic/generic-corporate-3-3-full.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="overflow-hidden mb-2">
                        <h2 class="text-color-dark text-center font-weight-normal text-5 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1200">
                            {{ __('home.about_us') }}
                        </h2>
                    </div>
                    <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">
                        <strong>{{ __('home.company.name') }}</strong>
                        {{ __('home.company.detail1') }}
                    </p>
                    <p class="mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">
                        {{ __('home.company.detail2') }}
                    </p>
                    <p class="mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">
                        {{ __('home.company.detail3') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="col text-center">
                    <h2 class="font-weight-semibold text-6 mb-0"> {{ __('home.engine') }}</h2>
                    <p class="lead text-4 pt-2 font-weight-normal"></p>
                </div>
                <div class="masonry-loader masonry-loader-loaded">
                    <div class="row products product-thumb-info-list">
                        <div class="owl-carousel owl-theme manual" id="carousel">

                            <div class="product">
                                <span class="product-thumb-info border-0">
                                    <a href="shop-product-sidebar-left.html">
                                        <span class="product-thumb-info-image">
                                            <img alt="" class="img-fluid" src="img/projects/project-34.jpg">
                                        </span>
                                    </a>
                                    <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                        <a href="shop-product-sidebar-left.html">
                                            <h4 class="text-4 text-primary text-center">Photo Camera</h4>
                                        </a>
                                    </span>
                                </span>
                            </div>

                            <div class="product">
                                <span class="product-thumb-info border-0">
                                    <a href="shop-product-sidebar-left.html">
                                        <span class="product-thumb-info-image">
                                            <img alt="" class="img-fluid" src="img/projects/project-34.jpg">
                                        </span>
                                    </a>
                                    <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                        <a href="shop-product-sidebar-left.html">
                                            <h4 class="text-4 text-primary text-center">Photo Camera</h4>
                                        </a>
                                    </span>
                                </span>
                            </div>

                            <div class="product">
                                <span class="product-thumb-info border-0">
                                    <a href="shop-product-sidebar-left.html">
                                        <span class="product-thumb-info-image">
                                            <img alt="" class="img-fluid" src="img/projects/project-34.jpg">
                                        </span>
                                    </a>
                                    <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                        <a href="shop-product-sidebar-left.html">
                                            <h4 class="text-4 text-primary text-center">Photo Camera</h4>
                                        </a>
                                    </span>
                                </span>
                            </div>

                            <div class="product">
                                <span class="product-thumb-info border-0">
                                    <a href="shop-product-sidebar-left.html">
                                        <span class="product-thumb-info-image">
                                            <img alt="" class="img-fluid" src="img/projects/project-34.jpg">
                                        </span>
                                    </a>
                                    <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                        <a href="shop-product-sidebar-left.html">
                                            <h4 class="text-4 text-primary text-center">Photo Camera</h4>
                                        </a>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="col text-center">
                    <h2 class="font-weight-semibold text-6 mb-0">{{ __('home.chemistry') }}</h2>
                    <p class="lead text-4 pt-2 font-weight-normal"></p>
                </div>
                <div class="masonry-loader masonry-loader-loaded">
                    <div class="row products product-thumb-info-list">
                        <div class="owl-carousel owl-theme manual dots-morphing" id="carousel2">

                            <div class="product">
                                <span class="product-thumb-info border-0">
                                    <a href="shop-product-sidebar-left.html">
                                        <span class="product-thumb-info-image">
                                            <img alt="" class="img-fluid" src="img/projects/project-34.jpg">
                                        </span>
                                    </a>
                                    <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                        <a href="shop-product-sidebar-left.html">
                                            <h4 class="text-4 text-primary text-center">Photo Camera</h4>
                                        </a>
                                    </span>
                                </span>
                            </div>

                            <div class="product">
                                <span class="product-thumb-info border-0">
                                    <a href="shop-product-sidebar-left.html">
                                        <span class="product-thumb-info-image">
                                            <img alt="" class="img-fluid" src="img/projects/project-34.jpg">
                                        </span>
                                    </a>
                                    <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                        <a href="shop-product-sidebar-left.html">
                                            <h4 class="text-4 text-primary text-center">Photo Camera</h4>
                                        </a>
                                    </span>
                                </span>
                            </div>

                            <div class="product">
                                <span class="product-thumb-info border-0">
                                    <a href="shop-product-sidebar-left.html">
                                        <span class="product-thumb-info-image">
                                            <img alt="" class="img-fluid" src="img/projects/project-34.jpg">
                                        </span>
                                    </a>
                                    <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                        <a href="shop-product-sidebar-left.html">
                                            <h4 class="text-4 text-primary text-center">Photo Camera</h4>
                                        </a>
                                    </span>
                                </span>
                            </div>

                            <div class="product">
                                <span class="product-thumb-info border-0">
                                    <a href="shop-product-sidebar-left.html">
                                        <span class="product-thumb-info-image">
                                            <img alt="" class="img-fluid" src="img/projects/project-34.jpg">
                                        </span>
                                    </a>
                                    <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                        <a href="shop-product-sidebar-left.html">
                                            <h4 class="text-4 text-primary text-center">Photo Camera</h4>
                                        </a>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section appear-animation" data-appear-animation="fadeInUpShorter">

            <div class="container">
                <div class="col text-center">
                    <h2 class="font-weight-semibold text-6 mb-0">{{ __('home.news') }}</h2>
                </div>
                <div class="row mt-5 appear-animation" data-appear-animation="fadeInUpShorter">
                    <div class="col-lg-4 mb-4">
                        <article class="post post-large pb-5">
                            <div class="post-image">
                                <a href="blog-post.html">
                                    <img src="img/blog/medium/blog-11.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
                                </a>
                            </div>
                            <div class="post-date">
                                <span class="day">15</span>
                                <span class="month">Jan</span>
                            </div>
                            <div class="post-content">
                                <h4>
                                    <a href="blog-post.html" class="text-decoration-none">This is a stardard post with preview image</a>
                                </h4>
                                <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquam nisi ultricies nisi luctus, sed fermentum.</p>
                                <a href="blog-post.html" class="btn btn-light text-uppercase text-primary text-1 py-2 px-3 mb-1 mt-2">
                                    <strong>READ MORE</strong><i class="fas fa-chevron-right text-2 pl-2"></i>
                                </a>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <article class="post post-large pb-5">
                            <div class="post-image">
                                <a href="blog-post.html">
                                    <img src="img/blog/medium/blog-11.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
                                </a>
                            </div>
                            <div class="post-date">
                                <span class="day">15</span>
                                <span class="month">Jan</span>
                            </div>
                            <div class="post-content">
                                <h4>
                                    <a href="blog-post.html" class="text-decoration-none">This is a stardard post with preview image</a>
                                </h4>
                                <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquam nisi ultricies nisi luctus, sed fermentum.</p>
                                <a href="blog-post.html" class="btn btn-light text-uppercase text-primary text-1 py-2 px-3 mb-1 mt-2">
                                    <strong>READ MORE</strong><i class="fas fa-chevron-right text-2 pl-2"></i>
                                </a>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <article class="post post-large pb-5">
                            <div class="post-image">
                                <a href="blog-post.html">
                                    <img src="img/blog/medium/blog-11.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
                                </a>
                            </div>
                            <div class="post-date">
                                <span class="day">15</span>
                                <span class="month">Jan</span>
                            </div>
                            <div class="post-content">
                                <h4>
                                    <a href="blog-post.html" class="text-decoration-none">This is a stardard post with preview image</a>
                                </h4>
                                <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquam nisi ultricies nisi luctus, sed fermentum.</p>
                                <a href="blog-post.html" class="btn btn-light text-uppercase text-primary text-1 py-2 px-3 mb-1 mt-2">
                                    <strong>READ MORE</strong><i class="fas fa-chevron-right text-2 pl-2"></i>
                                </a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

    </section>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            var caroul = ['#carousel', '#carousel2'];

            caroul.forEach((item) => {
                $(item).owlCarousel({
                    loop: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        479: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        979: {
                            items: 3
                        },
                        1199: {
                            items: 3
                        }
                    },
                    navText: false,
                    dots: true,
                    margin: 10,
                    autoWidth: false,
                    items: 3,
                    // rtl: ( $('html').attr('dir') == 'rtl' ) ? true : false
                });
            })

        });
    </script>
@endsection
