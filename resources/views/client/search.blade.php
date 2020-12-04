@extends('client.layout.main')

@section('title')
    {{ __('home.search.index') }}
@endsection

@section('meta')
    <meta property="og:url" content="{{ route('client.search') }}">
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ __('home.search.index') }}" />
    <meta property="og:image" content="{{ $settings[6]['value'] }}">
    <meta property="og:description" content="{{ __('home.search.index') }}">
@endsection

@section('content')
    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7"
             style="background-image: url({{ asset('/client/img/slides/5.jpg') }}); background-position: bottom;"
    >
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold mt-4 mb-4">{{ __('home.search.index') }}</h1>
                    <span class="sub-title text-light">
                        {{ count($result) }} {{ __('home.search.search_result_for') }}:
                        <strong>{{ $keyword }}</strong>
                    </span>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="/">{{ __('home.header.home') }}</a></li>
                        <li class="active">{{ __('home.search.index') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <hr class="m-0">

    <div class="container py-5 mt-3">

        <div class="row">
            <div class="col">
                <h2 class="font-weight-normal text-7 mb-0">{{ __('home.search.show_result_for') }}
                    <strong class="font-weight-extra-bold">{{ $keyword }}</strong>
                </h2>
                <p class="lead mb-0">{{ count($result) }} {{ __('home.search.result_found') }}.</p>
            </div>
        </div>
        <div class="row">
            <div class="col pt-2 mt-1">
                <hr class="my-4">
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <div class="blog-posts">
                    @forelse($result as $value)
                        <article class="post post-medium">
                            <div class="row mb-3">
                                <div class="col-lg-5">
                                    <div class="post-image">
                                        <a href="{{ route('client.product', parseLink($value)) }}">
                                            <img src="{{ ($value->image) }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="{{ $value->name }}" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="post-content mt-0">
                                        <h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2">
                                            <a href="{{ route('client.product', parseLink($value)) }}">{{ $value->name }}</a>
                                        </h2>
                                        <div class="pb-2 clearfix">
                                            <div title="{{ $value->star }} of 5" class="float-left">
                                                <input
                                                    type="text"
                                                    class="d-none"
                                                    value="{{ $value->star }}"
                                                    title=""
                                                    data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">
                                            </div>
                                        </div>
                                        @forelse($value->categories as $key => $cate)
                                            <p class="mb-1">
                                                <a href="{{ route('client.category', parseLink($cate)) }}">
                                                    {{ $loop->last ? $cate->name : $cate->name . ',' }}
                                                </a>
                                            </p>
                                        @empty
                                        @endforelse
                                        <p class="mb-0">
                                            {{ mb_strlen($value->short_detail) > 150 ? substr($value->short_detail, 0, 150) . '...' : $value->short_detail }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="post-meta">
                                        <span><i class="far fa-calendar-alt"></i> {{ formatDate($value->updated_at) }}</span>
                                        <span class="d-block d-sm-inline-block float-sm-right mt-3 mt-sm-0">
                                            <a href="{{ route('client.post_detail', parseLink($value)) }}" class="btn btn-xs btn-light text-1 text-uppercase">
                                                {{ __('home.read_more') }}
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @empty
                        <h4 class="text-center">{{ __('home.no_data') }}</h4>
                    @endforelse
                </div>

                <div class="row">
                    <div class="col mt-4">
                        {{ $result->links() }}
                    </div>
                </div>
            </div>
            @include('client.layout.sidebar')
        </div>
    </div>
@endsection
