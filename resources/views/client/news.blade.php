@extends('client.layout.main')

@section('title')
    {{ __('home.header.news') }}
@endsection

@section('meta')
    <meta property="og:url" content="{{ route('client.post') }}">
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ __('home.header.news') }}" />
    <meta property="og:image" content="{{ $settings[6]['value'] }}">
    <meta property="og:description" content="{{ __('home.header.news') }}">
@endsection


@section('content')
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container">
            <div class="row">

                <div class="col-md-12 align-self-center p-static order-2 text-center">

                    <h1 class="text-dark font-weight-bold text-8  mt-3">{{ __('home.header.news') }}</h1>
                </div>

                <div class="col-md-12 align-self-center order-1">

                    <ul class="breadcrumb d-block text-center">
                        <li><a href="/">{{ __('home.header.home') }}</a></li>
                        <li class="active">{{ __('home.list_news') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row">
            <div class="col">
                <div class="blog-posts mb-4">

                    <div class="row px-3">
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <div class="row">
                                @if (count($news))
                                    @foreach ($news as $n)
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <article class="post post-medium border-0 pb-0 mb-5">
                                                <div class="post-image">
                                                    <a href="{{ route('client.post_detail', parseLink($n)) }}">
                                                        <img src="{{ ($n->image) }}" class="br-15 img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                                    </a>
                                                </div>

                                                <div class="post-content">

                                                    <h2 class="font-weight-semibold text-4 line-height-6 mt-3 mb-2">
                                                        <a href="{{ route('client.post_detail', parseLink($n)) }}">{{ $n->title }}</a>
                                                    </h2>
                                                    <p>{{ $n->short_detail }}</p>
                                                </div>
                                            </article>
                                        </div>
                                    @endforeach
                                @else
                                    <p class="text-center">{{ __('home.no_data') }}</p>
                                @endif
                            </div>

                            <div class="row px-3">
                                <div class="col mt-4">
                                    {{ $news->links() }}
                                </div>
                            </div>
                        </div>
                        @include('client.layout.sidebar')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
