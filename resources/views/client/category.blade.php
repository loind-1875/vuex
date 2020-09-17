@extends('client.layout.main')

@section('title')
    {{ $category->name }}
@endsection

@section('meta')
    <meta property="og:url" content="{{ route('client.category', parseLink($category)) }}">
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $category->name }}" />
    <meta property="og:image" content="{{ $settings[6]['banner1'] }}">
    <meta property="og:description" content="{{ $category->description }}">
@endsection

@section('content')
        <div class="container">
         <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 align-self-center p-static order-2 text-center">

                        <h1 class="text-dark font-weight-bold text-8 mt-4">{{ __('home.category') }}</h1>
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
            <div class="col-lg-3 col-sm-12">
                <aside class="sidebar">
                    <div class="row">
                        <div class="col-sm-12">
                            <h5 class="font-weight-bold pt-3">{{ __('home.categories') }}</h5>
                            <ul class="nav nav-list flex-column">
                                @foreach ($categories as $category)
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('client.category', parseLink($category)) }}">{{ $category->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <hr class="solid my-3">
                    <div class="row mb-5">
                        <div class="col">
                            <div class="tabs tabs-dark mb-4 pb-2">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item active">
                                        <a class="nav-link show active text-1 font-weight-bold text-uppercase" href="#popularPosts" data-toggle="tab">
                                            {{ __('home.new_product') }}
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="popularPosts">
                                        <ul class="simple-post-list">
                                            @if (count($newProduct))
                                                @foreach ($newProduct as $n)
                                                    <li>
                                                        <div class="post-image">
                                                            <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                                <a href="{{ route('client.product', parseLink($n)) }}">
                                                                    <img src="{{ ($n->image) }}" width="50" height="50" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="post-info">
                                                            <a href="{{ route('client.product', parseLink($n)) }}">
                                                                {{ $n->name }}
                                                            </a>
                                                            <div class="post-meta">
                                                                {{ formatDate($n->updated_at) }}
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            @else
                                                <li><p>{{ __('home.no_data') }}</p></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection

@section('style')
@endsection
