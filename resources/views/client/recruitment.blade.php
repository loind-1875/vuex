@extends('client.layout.main')

@section('title')
    {{ __('home.recruitment') }}
@endsection

@section('meta')
    <meta property="og:url" content="{{ route('client.recruitment') }}">
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ __('home.recruitment') }}" />
    <meta property="og:image" content="{{ $settings[6]['banner1'] }}">
    <meta property="og:description" content="{{ __('home.recruitment') }}">
@endsection

@section('content')
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-dark font-weight-bold text-8 mt-3">{{ __('home.recruitment') }}</h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb d-block text-center">
                        <li><a href="/"></a>{{ __('home.header.home') }}</li>
                        <li class="active">{{ __('home.header.recruitment') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container py-4">
        <div class="row">
            <div class="col-lg-9">
                <div class="blog-posts">
                    @if (count($recruitments))
                        @foreach($recruitments as $rec)
                            <article class="post post-medium">
                                <div class="row mb-3">
                                    <div class="col-lg-5">
                                        <div class="post-image">
                                            <a href="{{ route('client.rec_detail', parseLink($rec)) }}">
                                                <img src="{{ ($rec->image) }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="{{ $rec->title }}" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="post-content">
                                            <h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2">
                                                <a href="{{ route('client.rec_detail', parseLink($rec)) }}">{{ $rec->title }}</a>
                                            </h2>
                                            <p class="mb-0">
                                                {{ $rec->short_detail }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="post-meta">
                                            <span><i class="far fa-calendar-alt"></i> {{ formatDate($rec->updated_at) }}</span>
                                            <span class="d-block d-sm-inline-block float-sm-right mt-3 mt-sm-0">
                                                <a href="{{ route('client.rec_detail', parseLink($rec)) }}" class="btn btn-xs btn-light text-1 text-uppercase">
                                                    {{ __('home.read_more') }}
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                            <div class="mt-4 mb-4">
                                {{ $recruitments->links() }}
                            </div>
                    @else
                        <p class="text-center">{{ __('home.no_data') }}</p>
                    @endif
                </div>
            </div>
            @include('client.layout.sidebar')
        </div>

@endsection
