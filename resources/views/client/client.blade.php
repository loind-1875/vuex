@extends('client.layout.main')

@section('title')
    {{ __('home.company.name') }}
@endsection

@section('content')
    <div class="slider-container rev_slider_wrapper" style="height: 670px;">
        <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 670, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': true }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
            <ul>
                <li class="slide-overlay" data-transition="fade">
                    <img src="client/img/slides/3.jpg"
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
                         data-transform_idle="opacity:0.2;s:500;">
                        <img src="/client/img/slides/slide-title-border.png" alt=""></div>

                    <div class="tp-caption text-color-light font-weight-normal"
                         data-x="center"
                         data-y="center" data-voffset="['-80','-80','-80','-130']"
                         data-start="700"
                         data-fontsize="['16','16','16','40']"
                         data-lineheight="['25','25','25','45']"
                         data-transform_in="y:[-50%];opacity:0;s:500;">{{ __('home.slide.company') }}</div>

                    <div class="tp-caption"
                         data-x="center" data-hoffset="['145','145','145','320']"
                         data-y="center" data-voffset="['-80','-80','-80','-130']"
                         data-start="1000"
                         data-transform_in="x:[300%];opacity:0;s:500;"
                         data-transform_idle="opacity:0.2;s:500;">
                        <img src="/client/img/slides/slide-title-border.png" alt=""></div>

                    <div class="tp-caption font-weight-extra-bold text-color-light"
                         data-frames='[{"delay":1300,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-hoffset="['-155','-155','-155','-255']"
                         data-y="center"
                         data-fontsize="['145','145','145','250']"
                         data-lineheight="['150','150','150','260']">H</div>

                    <div class="tp-caption font-weight-extra-bold text-color-light"
                         data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-hoffset="['-80','-80','-80','-130']"
                         data-y="center"
                         data-fontsize="['145','145','145','250']"
                         data-lineheight="['150','150','150','260']">.</div>

                    <div class="tp-caption font-weight-extra-bold text-color-light"
                         data-frames='[{"delay":1700,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-x="center"
                         data-y="center"
                         data-fontsize="['145','145','145','250']"
                         data-lineheight="['150','150','150','260']">F</div>

                    <div class="tp-caption font-weight-extra-bold text-color-light"
                         data-frames='[{"delay":1900,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-hoffset="['65','65','65','115']"
                         data-y="center"
                         data-fontsize="['145','145','145','250']"
                         data-lineheight="['150','150','150','260']">.</div>

                    <div class="tp-caption font-weight-extra-bold text-color-light"
                         data-frames='[{"delay":2100,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-hoffset="['139','139','139','240']"
                         data-y="center"
                         data-fontsize="['145','145','145','250']"
                         data-lineheight="['150','150','150','260']">T</div>

                    <div class="tp-caption font-weight-light text-color-light"
                         data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2300,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                         data-x="center"
                         data-y="center" data-voffset="['85','85','85','140']"
                         data-fontsize="['18','18','18','40']"
                         data-lineheight="['26','26','26','45']">{{ __('home.slide.chosen') }}</div>

                </li>
                <li class="slide-overlay" data-transition="fade">
                    <img src="/client/img/slides/5.jpg"
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
                         data-transform_idle="opacity:0.2;s:500;">
                        <img src="/client/img/slides/slide-title-border.png" alt=""></div>

                    <div class="tp-caption text-color-light font-weight-normal"
                         data-x="center"
                         data-y="center" data-voffset="['-50','-50','-50','-75']"
                         data-start="700"
                         data-fontsize="['16','16','16','40']"
                         data-lineheight="['25','25','25','45']"
                         data-transform_in="y:[-50%];opacity:0;s:500;">{{ __('home.slide.we_provider') }}</div>

                    <div class="tp-caption"
                         data-x="center" data-hoffset="['170','170','170','350']"
                         data-y="center" data-voffset="['-50','-50','-50','-75']"
                         data-start="1000"
                         data-transform_in="x:[300%];opacity:0;s:500;"
                         data-transform_idle="opacity:0.2;s:500;">
                        <img src="/client/img/slides/slide-title-border.png" alt=""></div>

                    <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1"
                         data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-x="center"
                         data-y="center"
                         data-fontsize="['50','50','50','90']"
                         data-lineheight="['55','55','55','95']">{{ __('home.slide.engine') }}</div>

                    <div class="tp-caption font-weight-light ws-normal text-center text-color-light"
                         data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                         data-x="center"
                         data-y="center" data-voffset="['60','60','60','105']"
                         data-width="['530','530','530','1100']"
                         data-fontsize="['18','18','18','40']"
                         data-lineheight="['26','26','26','45']"
                         >
                        {{ __('home.slide.engine_slogan') }}
                    </div>

                </li>
                <li class="slide-overlay" data-transition="fade">
                    <img src="{{ asset('/client/img/slides/4.jpg') }}"
                         alt=""
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         class="rev-slidebg">

                    <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1"
                         data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-x="center"
                         data-y="center"
                         data-fontsize="['50','50','50','90']"
                         data-lineheight="['55','55','55','95']">{{ __('home.slide.quality') }}</div>

                    <div class="tp-caption font-weight-light ws-normal text-center text-color-light mt-4"
                         data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                         data-x="center"
                         data-y="center" data-voffset="['60','60','60','105']"
                         data-width="['530','530','530','1100']"
                         data-fontsize="['18','18','18','40']"
                         data-lineheight="['26','26','26','45']"
                         style="color: #b5b5b5;">{{ __('home.slide.quality_slogan') }}</div>

                </li>
                <li class="slide-overlay" data-transition="fade">
                    <img src="/client/img/slides/2.jpg"
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
                         data-transform_idle="opacity:0.2;s:500;">
                        <img src="/client/img/slides/slide-title-border.png" alt=""></div>

                    <div class="tp-caption text-color-light font-weight-normal"
                         data-x="center"
                         data-y="center" data-voffset="['-50','-50','-50','-75']"
                         data-start="700"
                         data-fontsize="['16','16','16','40']"
                         data-lineheight="['25','25','25','45']"
                         data-transform_in="y:[-50%];opacity:0;s:500;">{{ __('home.slide.we_provider') }}</div>

                    <div class="tp-caption"
                         data-x="center" data-hoffset="['170','170','170','350']"
                         data-y="center" data-voffset="['-50','-50','-50','-75']"
                         data-start="1000"
                         data-transform_in="x:[300%];opacity:0;s:500;"
                         data-transform_idle="opacity:0.2;s:500;">
                        <img src="/client/img/slides/slide-title-border.png" alt=""></div>

                    <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1"
                         data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-x="center"
                         data-y="center"
                         data-fontsize="['50','50','50','90']"
                         data-lineheight="['55','55','55','95']">{{ __('home.slide.chemistry') }}</div>

                    <div class="tp-caption font-weight-light ws-normal text-center text-color-light"
                         data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                         data-x="center"
                         data-y="center" data-voffset="['60','60','60','105']"
                         data-width="['530','530','530','1100']"
                         data-fontsize="['18','18','18','40']"
                         data-lineheight="['26','26','26','45']"
                         style="color: #b5b5b5;">
                        {{ __('home.slide.chemistry_slogan') }}
                    </div>

                </li>
                <li class="slide-overlay" data-transition="fade">
                    <img src="/client/img/slides/1.jpg"
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
                         data-transform_idle="opacity:0.2;s:500;">
                        <img src="/client/img/slides/slide-title-border.png" alt=""></div>

                    <div class="tp-caption text-color-light font-weight-normal"
                         data-x="center"
                         data-y="center" data-voffset="['-50','-50','-50','-75']"
                         data-start="700"
                         data-fontsize="['16','16','16','40']"
                         data-lineheight="['25','25','25','45']"
                         data-transform_in="y:[-50%];opacity:0;s:500;">{{ __('home.slide.caring') }}</div>

                    <div class="tp-caption"
                         data-x="center" data-hoffset="['170','170','170','350']"
                         data-y="center" data-voffset="['-50','-50','-50','-75']"
                         data-start="1000"
                         data-transform_in="x:[300%];opacity:0;s:500;"
                         data-transform_idle="opacity:0.2;s:500;">
                        <img src="/client/img/slides/slide-title-border.png" alt=""></div>

                    <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1"
                         data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-x="center"
                         data-y="center"
                         data-fontsize="['50','50','50','90']"
                         data-lineheight="['55','55','55','95']">{{ __('home.slide.trust') }}</div>

                    <div class="tp-caption font-weight-light ws-normal text-center text-color-light mt-3"
                         data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                         data-x="center"
                         data-y="center" data-voffset="['60','60','60','105']"
                         data-width="['530','530','530','1100']"
                         data-fontsize="['18','18','18','40']"
                         data-lineheight="['26','26','26','45']"
                         style="color: #b5b5b5;">
                        {{ __('home.slide.trust_slogan') }}
                    </div>

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
                                        {{ __('home.quality_detail') }}
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

    <section class="section section-default border-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">
        <div class="container py-4">

            <div class="row align-items-center">
                <div class="col-md-6 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                    <div class="owl-carousel owl-theme nav-inside mb-0" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}">
                        <div>
                            <img alt="" class="img-fluid" src="/client/img/generic/generic-corporate-3-2-full.jpg">
                        </div>
                        <div>
                            <img alt="" class="img-fluid" src="/client/img/generic/generic-corporate-3-3-full.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="overflow-hidden mb-2">
                        <h2 class="text-color-dark text-center font-weight-normal text-5 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">
                            {{ __('home.header.about') }}
                        </h2>
                    </div>
                    <p class="appear-animation mb-0" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                        <strong>{{ __('home.company.name') }}</strong>
                        {{ __('home.company.detail1') }}
                    </p>
                    <p class="mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
                        {{ __('home.company.detail2') }}
                    </p>
                    <p class="mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                        <strong>{{ __('home.company.detail3') }}</strong>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="col text-center" data-appear-animation="fadeInRight">
                    <h2 class="font-weight-semibold text-6 mb-0"> {{ __('home.header.engine') }}</h2>
                    <p class="lead text-4 pt-2 font-weight-normal"></p>
                </div>
                <div class="masonry-loader masonry-loader-loaded" data-appear-animation="fadeInLeft">
                    <div class="row products product-thumb-info-list">
                        @if (!empty($engine->products))
                            @foreach ($engine->products as $item)
                                <div class="product col-sm-6 col-lg-4">
                                    <span class="product-thumb-info border-0">
                                        <a href="{{ route('client.product', parseLink($item)) }}">
                                            <span class="product-thumb-info-image">
                                                <img alt="" class="img-fluid" src="{{ ($item->image) }}">
                                            </span>
                                        </a>
                                        <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                            <a href="{{ route('client.product', parseLink($item)) }}">
                                                <h4 class="text-4 text-primary text-center">{{ $item->name }}</h4>
                                            </a>
                                        </span>
                                    </span>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="col text-center" data-appear-animation="fadeInLeft">
                    <h2 class="font-weight-semibold text-6 mb-0">{{ __('home.header.chemistry') }}</h2>
                    <p class="lead text-4 pt-2 font-weight-normal"></p>
                </div>
                <div class="masonry-loader masonry-loader-loaded" data-appear-animation="fadeInRight">
                    <div class="row products product-thumb-info-list">
                        @if (!empty($chemistry->products))
                            @foreach ($chemistry->products as $ches)
                                <div class="product col-sm-6 col-lg-4">
                                    <span class="product-thumb-info border-0">
                                        <a href="{{ route('client.product', parseLink($ches)) }}">
                                            <span class="product-thumb-info-image">
                                                <img alt="" class="img-fluid" src="{{ ($ches->image) }}">
                                            </span>
                                        </a>
                                        <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                            <a href="{{ route('client.product', parseLink($ches)) }}">
                                                <h4 class="text-4 text-primary text-center">{{ $ches->name }}</h4>
                                            </a>
                                        </span>
                                    </span>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section appear-animation" data-appear-animation="fadeInUpShorter">
        <section class=" appear-animation" data-appear-animation="fadeInUpShorter">
            <div class="container">
                <div class="col text-center">
                    <h2 class="font-weight-semibold text-6 mb-0">{{ __('home.header.news') }}</h2>
                </div>
                <div class="row mt-5 appear-animation" data-appear-animation="fadeInUpShorter">
                    @foreach ($news as $item)
                        <div class="col-lg-4 mb-4">
                            <article class="post post-large pb-5">
                                <div class="post-image">
                                    <a href="{{ route('client.post_detail', parseLink($item)) }}">
                                        <img src="{{ ($item->image) }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
                                    </a>
                                </div>
                                <div class="post-date">
                                    <span class="day">{{ getDay($item->updated_at) }}</span>
                                    <span class="month">{{ getMonth($item->updated_at) }}</span>
                                </div>
                                <div class="post-content">
                                    <h4>
                                        <a href="{{ route('client.post_detail', parseLink($item)) }}" class="text-decoration-none">{{ $item->title }}</a>
                                    </h4>
                                    <p class="mb-1">{{ $item->short_detail }}</p>
                                    <a href="{{ route('client.post_detail', parseLink($item)) }}" class="btn btn-light text-uppercase text-primary text-1 py-2 px-3 mb-1 mt-2">
                                        <strong>{{ __('home.read_more') }}</strong>
                                        <i class="fas fa-chevron-right text-2 pl-2"></i>
                                    </a>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>

    </section>
@endsection

@section('style')
   <style>
       .rev_slider li.slide-overlay .slotholder:after {
           opacity: 0.4;
       }
   </style>
@endsection
