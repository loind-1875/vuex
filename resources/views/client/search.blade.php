@extends('client.layout.main')

@section('title')
    {{ __('home.search.index') }}
@endsection

@section('meta')
    <meta property="og:url" content="{{ route('client.recruitment') }}">
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ __('home.search.index') }}" />
    <meta property="og:image" content="{{ $settings[6]['banner1'] }}">
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
            <div class="col">

                <ul class="simple-post-list m-0">
                    @forelse($result as $value)
                        <li>
                            <div class="post-info">
                                <a href="{{ route('client.product', parseLink($value->product)) }}">
                                    {{ $value->name }}
                                </a>
                                <div class="post-meta">
                                    @forelse($value->product->categories as $cate)
                                        <span class="text-dark text-uppercase font-weight-semibold">
                                            {{ $cate->name }}
                                        </span>
                                    @empty
                                        <span class="text-dark text-uppercase font-weight-semibold">
                                        </span>
                                    @endforelse
                                    | {{ formatDate($value->updated_at) }}
                                </div>
                            </div>
                        </li>
                    @empty
                        <h4 class="text-center">{{ __('home.no_data') }}</h4>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
@endsection
