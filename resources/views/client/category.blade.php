@extends('client.layout.main')

@section('title')
    {{ $category->name }}
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
            <div class="col-lg-3">
                <aside class="sidebar">
                    <h5 class="font-weight-bold pt-3">{{ __('home.categories') }}</h5>
                        <ul class="nav nav-list flex-column">
                            @foreach ($categories as $category)
                                <li class="nav-item">
                                    <a class="nav-link" href="#">{{ $category->name }}</a>
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
                                                <img alt="" width="60" height="60" class="img-fluid" src="{{ getImage($pro->image) }}">
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
                <div class="masonry-loader masonry-loader-showing">
                    <div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
                        @if (count($products))
                            @foreach ($products as $product)
                                <div class="col-sm-6 col-lg-4 product">
                                    <span class="product-thumb-info border-0">
                                        <a href="{{ route('client.product', parseLink($product)) }}">
                                            <span class="product-thumb-info-image">
                                                <img alt="" class="img-fluid" src="{{ getImage($product->image) }}">
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
                        @else
                            <p class="text-center">{{ __('home.no_product') }}</p>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col mt-4">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('style')
@endsection
