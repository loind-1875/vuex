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
                    <h1 class="text-dark font-weight-bold text-8  mt-3">{{ __('home.detail_news') }}</h1>
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
            <div class="col-lg-3">
                <aside class="sidebar">
                    <div class="tabs tabs-dark mb-4 pb-2">
                        <ul class="nav nav-tabs">
                            <li class="nav-item active">
                                <a class="nav-link show active text-1 font-weight-bold text-uppercase" href="#popularPosts" data-toggle="tab">
                                    {{ __('home.recently') }}
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="popularPosts">
                                <ul class="simple-post-list">
                                    @if (count($recently))
                                        @foreach ($recently as $n)
                                            <li>
                                                <div class="post-image">
                                                    <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                        <a href="{{ route('client.post_detail', parseLink($n)) }}">
                                                            <img src="{{ $n->image }}" width="50" height="50" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-info">
                                                    <a href="{{ route('client.post_detail', parseLink($n)) }}">
                                                        {{ $n->title }}
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
                </aside>
            </div>
            <div class="col-lg-9">
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
            </div>
        </div>

@endsection
