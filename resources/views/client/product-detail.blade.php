@extends('client.layout.main')

@section('title')
    {{ $product->name }}
@endsection

@section('content')
    <div class="container">
         <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 align-self-center p-static order-2 text-center">

                        <h1 class="text-dark font-weight-bold text-8 mt-4">{{ __('home.product_detail') }}</h1>
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
        <div class="row">
            <div class="col-lg-3">
                <aside class="sidebar">
                    <h5 class="font-weight-bold pt-3">{{ __('home.categories') }}</h5>
                        <ul class="nav nav-list flex-column">
                            @foreach ($categories as $category)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('client.category', parseLink($category)) }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                <div class="row mb-5">
                    <div class="col">
                        <h5 class="font-weight-bold pt-5">{{ __('home.new_product') }}</h5>
                        <ul class="simple-post-list">
                            @foreach ($newProduct as $pro)
                                <li>
                                    <div class="post-image">
                                        <div class="d-block">
                                            <a href="{{ route('client.product', parseLink($pro)) }}">
                                                <img alt="" width="60" height="60" class="img-fluid" src="{{ ($pro->image) }}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-info">
                                        <a href="{{ route('client.product', parseLink($pro)) }}">{{ $pro->name }}</a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                </aside>
            </div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'margin': 10}">
                            <div>
                                <img alt="" height="300" class="img-fluid" src="{{ ($product->image) }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="summary entry-summary">
                            <h1 class="mb-0 font-weight-bold text-7">{{ $product->name }}</h1>
                            <div class="pb-0 clearfix">
                                <div title="Rated 3 out of 5" class="float-left">
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
                                        <a rel="tag" href="{{ route('client.category', parseLink($cate)) }}">{{ $cate->name }}</a>,
                                    @endforeach
                                </span>
                            </div>

                        </div>


                    </div>
                </div>

                <div class="row">
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
                <div class="masonry-loader masonry-loader-showing">
                    <div class="row products product-thumb-info-list mt-3" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
                        @foreach ($otherProducts as $pro)
                        <div class="col-12 col-sm-6 col-lg-3 product">
                            <span class="product-thumb-info border-0">
                                <a href="{{ route('client.product', parseLink($pro)) }}">
                                    <span class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="{{ ($pro->image) }} ">
                                    </span>
                                </a>
                                <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                    <a href="{{ route('client.product', parseLink($pro)) }}">
                                        <h4 class="text-4 text-primary">{{ $pro->name }}</h4>
                                    </a>
                                </span>
                            </span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
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
