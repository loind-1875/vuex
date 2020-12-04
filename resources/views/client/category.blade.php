@extends('client.layout.main')

@section('title')
    {{ $category->name }}
@endsection

@section('meta')
    <meta property="og:url" content="{{ route('client.category', parseLink($category)) }}">
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $category->name }}" />
    <meta property="og:image" content="{{ $settings[6]['value'] }}">
    <meta property="og:description" content="{{ strip_tags($category->description) }}">
@endsection

@section('content')
    <div class="container">
        <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="text-dark font-weight-bold text-8 mt-4">{{ $category->name }}</h1>
                    </div>

                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb d-block text-center">
                            <li><a href="/">{{ __('home.header.home') }}</a></li>
                            <li class="active">{{ __('home.category') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-lg-9 col-sm-12">
                @if (count($products))
                    <div class="masonry-loader masonry-loader-showing">
                            <div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
                                @foreach ($products as $product)
                                    <div class="col-sm-6 col-lg-4 product">
                                        <span class="product-thumb-info border-0">
                                            <a href="{{ route('client.product', parseLink($product)) }}">
                                                <span class="product-thumb-info-image">
                                                    <img alt="" class="img-fluid" src="{{ ($product->image) }}">
                                                </span>
                                            </a>
                                            <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                                <a href="{{ route('client.product', parseLink($product)) }}">
                                                    <h4 class="text-4 text-primary">{{ $product->name }}</h4>
                                                </a>
                                            </span>
                                        </span>
                                    </div>
                                @endforeach
                            </div>
                        <div class="row">
                            <div class="col mt-4">
                                {{ $products->links() }}
                            </div>
                        </div>
                    </div>
                @else
                    <div>
                        <p class="text-center">{{ __('home.no_product') }}</p>
                    </div>
                @endif
            </div>
            @include('client.layout.sidebar')
        </div>
    </div>
@endsection

@section('style')
@endsection
