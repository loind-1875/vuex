@extends('client.layout.main')

@section('title')
    {{ $product->name }}
@endsection

@section('content')
    <section class="banner-page wow fadeInUp" data-wow-duration="1.6s"
             style="background-image: url({{ getImageOther('banner-gt.jpg') }});">
        <div class="container">
            <div class="wp-tt-bread-page">
                <h2 class="title-page">{{ $product->name }}</h2>
                <div class="wp-bread-page">
                    <div class="bread-page">
                        <ul>
                            <li><a href="/">Trang chủ</a></li>
                            <li>Sản phẩm</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-chitiet-sp content-page content-tintuc pd-40">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="wp-content-ctsp">
                        <div class="row row-edit-ctsp">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <input type="hidden" id="__VIEWxSTATE"/>
                                <ul id='zoom1' class='gc-start'>
                                    <li>
                                        <img src="{{ getImage($product->image) }}" alt="{{ $product->name }}"/>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="wp-text-ctsp1">
                                    <h1>{{ $product->name }}</h1>
                                    <p>{{ $product->name }}</p>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="wp-mota-ctsp">
                            <div class="tt-ctsp-002">
                                <h4>Chi tiết sản phẩm</h4>
                            </div>
                            <div class="text-ctsp-d">
                                <p>{!! $product->detail !!}</p>
                            </div>
                        </div>
                        <div class="sp-khac-ctsp">
                            <div class="tt-ctsp-002">
                                <h4>Sản phẩm khác</h4>
                            </div>
                            <div class="wp-list-cpkhac">
                                <div id="sl-spkhac" class="owl-carousel owl-theme">
                                    @foreach($otherProducts as $other)
                                        <div class="item">
                                            <div class="wp-item-sl-spkhac">
                                                <div class="item-sl-spkhac">
                                                    <div class="wp-sp wp-sp-danhmuc">
                                                        <div class="wp-img-sp">
                                                            <a href="{{ route('client.product', parseLink($other)) }}">
                                                                <img src="{{ getImage($other->image) }}" alt="{{ $other->name }}" >
                                                            </a>
                                                        </div>
                                                        <div class="text-sp">
                                                            <h4 class="ten-sp">
                                                                <a href="{{ route('client.product', parseLink($other)) }}">{{ $other->name }}</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="sp-khac-ctsp">
                            <div class="tt-ctsp-002">
                                <h4>Sản phẩm đã xem</h4>
                            </div>
                            <div class="wp-list-cpkhac">
                                <div id="sl-spdaxem" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="wp-item-sl-spkhac">
                                            <div class="item-sl-spkhac">
                                                <div class="wp-sp wp-sp-danhmuc">
                                                    <div class="wp-img-sp">
                                                        <a href="cp-a-0975ad.html"> <img src="templates/not-found.png" alt="CP-A 0975AD" > </a>
                                                    </div>
                                                    <div class="text-sp">
                                                        <h4 class="ten-sp"><a href="cp-a-0975ad.html">CP-A 0975AD</a></h4> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @include('client.layout.side-bar')
                </div>
        </div>
    </section>

@endsection

@section('style')
    <link rel="stylesheet" href="/client/css/glasscase.css">
    <style>
        .gc-start img {
            max-width: 100%;
        }
        .wp-text-ctsp1 h1 {
            text-align: center;
        }
    </style>
@endsection

@section('script')
    <script src="/client/js/modernizr.custom.js"></script>
    <script src="/client/js/jquery.glasscase.js"></script>
    <script>
        $(document).ready(function () {
            $(function () {
                //ZOOM
                $("#zoom1").glassCase({
                    'widthDisplay': 500,
                    'heightDisplay': 315,
                    'nrThumbsPerRow': 3,
                    'isSlowZoom': true,
                    'colorIcons': '#F15129',
                    'colorActiveThumb': '#F15129'
                });
                <!-- js slider sp đã xem -->
                    $('#sl-spdaxem').owlCarousel({
                        loop: false,
                        margin: 20,
                        nav:true,
                        responsive:{
                            0:{
                                items:2
                            },
                            600:{
                                items:3
                            },
                            1000:{
                                items:4
                            }
                        }
                    })
                // <!-- js slider sp khac -->
                $('#sl-spkhac').owlCarousel({
                loop: false,
                margin: 20,
                nav:true,
                responsive:{
                    0:{
                        items:2
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:4
                    }
                }
            })
                });
        });
    </script>
        }
    </script>
@endsection
