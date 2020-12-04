@extends('client.layout.main')

@section('title')
    {{ $product->name }}
@endsection

@section('meta')
    <meta property="og:url" content="{{ route('client.product', parseLink($product)) }}">
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $product->name }}" />
    <meta property="og:image" content="{{ $product->image }}">
    <meta property="og:description" content="{{ strip_tags($product->short_detail) ?? $product->name }}">
@endsection

@section('content')
    <div class="container">
         <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 align-self-center p-static order-2 text-center">

                        <h1 class="text-dark font-weight-bold text-8 mt-4">{{ $product->name }}</h1>
                    </div>

                    <div class="col-md-12 align-self-center order-1">

                        <ul class="breadcrumb d-block text-center">
                            <li><a href="/">{{ __('home.header.home') }}</a></li>
                            <li class="active">{{ __('home.product') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="row" id="detail-page">
            <div class="col-lg-9 col-sm-12">
                <div class="row mb-4">
                    <div class="col-lg-6">
                        <div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'margin': 10}">
                            <div class="text-center">
                                <img alt="" height="300" class="img-fluid br-15" src="{{ ($product->image) }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="summary entry-summary">
                            <h1 class="mb-0 font-weight-bold text-7">{{ $product->name }}</h1>
                            <div class="pb-0 clearfix">
                                <div title="{{ $product->star }} of 5" class="float-left">
                                    <input
                                        type="text"
                                        class="d-none"
                                        value="{{ $product->star }}"
                                        title=""
                                        data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">
                                </div>
                            </div>
                            <div class="product-meta mt-4">
                                <p>{{ $product->short_detail }}</p>
                            </div>
                            <div class="product-meta mt-4">
                                <span class="posted-in">
                                    {{ __('home.categories') }}:
                                    @foreach ($product->categories as $cate)
                                        <a rel="tag" href="{{ route('client.category', parseLink($cate)) }}">
                                            {{ $loop->last ? $cate->name : $cate->name . ',' }}
                                        </a>
                                    @endforeach
                                </span>
                            </div>

                        </div>


                    </div>
                </div>

                <div class="row mt-4 pt-4">
                    <div class="col">
                        <div class="tabs tabs-product mb-2">
                            <ul class="nav nav-tabs">
                                <li class="nav-item active">
                                    <a class="nav-link py-3 px-4" href="#productDescription" data-toggle="tab">{{ __('home.detail') }}</a>
                                </li>
                            </ul>
                            <div class="tab-content p-0">
                                <div class="tab-pane p-4 active" id="productDescription">
                                    {!! $product->detail !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="solid my-5">

                <h4 class="mb-3">{{ __('home.other_product') }}</h4>
                <div class="owl-carousel owl-theme pb-4 mb-4" data-plugin-options="{'items': 4, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false, 'margin': 30}">
                    @foreach ($otherProducts as $pro)
                        <span class="product-thumb-info border-0 mr-2">
                            <a href="{{ route('client.product', parseLink($pro)) }}">
                                <span class="product-thumb-info-image">
                                    <img alt="" class="img-fluid br-15" src="{{ ($pro->image) }} ">
                                </span>
                            </a>
                            <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                <a href="{{ route('client.product', parseLink($pro)) }}">
                                    <h4 class="text-4 text-primary">{{ $pro->name }}</h4>
                                </a>
                            </span>
                        </span>
                    @endforeach
                </div>
            </div>
            @include('client.layout.sidebar')
        </div>
    </div>

@endsection

@section('style')
    <style>

    </style>
@endsection

@section('script')
    <script>
    </script>
@endsection
