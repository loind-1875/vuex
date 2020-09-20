@extends('client.layout.main')

@section('title')
    {{ $news->title }}
@endsection

@section('meta')
    <meta property="og:url" content="{{ route('client.post_detail', parseLink($news)) }}">
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $news->title }}" />
    <meta property="og:image" content="{{ $news->image }}">
    <meta property="og:description" content="{{ $news->title }}">
@endsection

@section('content')
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-dark font-weight-bold text-8  mt-3">{{ $news->title }}</h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb d-block text-center">
                        <li><a href="/"></a>{{ __('home.header.home') }}</li>
                        <li class="active">{{ __('home.header.news') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container py-4">
        <div class="row">
            <div class="col-lg-9 col-sm-12">
                <div class="blog-posts single-post">
                    <article class="post post-large blog-single-post border-0 m-0 p-0">
                        <div class="post-image ml-0">
                            <a href="#">
                                <img src="{{ ($news->image) }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="{{ $news->title }}" />
                            </a>
                        </div>

                        <div class="post-date ml-0">
                            <span class="day">{{ getDay($news->updated_at) }}</span>
                            <span class="month">{{ getMonth($news->updated_at) }}</span>
                        </div>

                        <div class="post-content ml-0 mt-4 mb-4">

                            <h2 class="font-weight-bold">
                                <a href="">{{ $news->title }}</a>
                            </h2>
                            <div class="post-meta"></div>
                            <div class="post-content">
                                {!! $news->detail !!}
                            </div>
                        </div>
                    </article>

                </div>
                <hr class="solid my-5">

                <h4 class="mb-3">{{ __('home.same_category') }}</h4>
                <div class="owl-carousel owl-theme" data-plugin-options="{'items': 4, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
                    @foreach ($recently as $n)
                        <span class="product-thumb-info border-0 mr-2">
                            <a href="{{ route('client.post', parseLink($n)) }}">
                                <span class="product-thumb-info-image">
                                    <img alt="{{ $n->title }}" class="img-fluid" src="{{ ($n->image) }} ">
                                </span>
                            </a>
                            <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                <a href="{{ route('client.post', parseLink($n)) }}">
                                    <h4 class="text-4 text-primary">{{ $n->title }}</h4>
                                </a>
                            </span>
                        </span>
                    @endforeach
                </div>
            </div>
            @include('client.layout.sidebar')
        </div>

@endsection
