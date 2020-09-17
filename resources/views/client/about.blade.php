@extends('client.layout.main')

@section('title')
    {{ __('home.header.about') }}
@endsection

@section('meta')
    <meta property="og:url" content="{{ route('client.about') }}">
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ __('home.header.about') }}" />
    <meta property="og:image" content="{{ $settings[6]['banner1'] }}">
    <meta property="og:description" content="{{ __('home.header.about') }}">
@endsection

@section('content')
    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7"
         style="background-image: url({{ asset('/client/img/slides/5.jpg') }}); background-position: bottom;"
    >
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold mt-4">{{ __('home.header.about') }}</h1>
                    <span class="sub-title mt-4">{{ __('home.company.name') }}</span>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="/">{{ __('home.header.home') }}</a></li>
                        <li class="active">{{ __('home.header.about') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row pt-5">
            <div class="col">
                <div class="row text-center pb-5">
                    <div class="col-md-10 mx-md-auto">
                        <div class="overflow-hidden mb-3">
                            <h1 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">
                                <p>{{ __('home.company.name') }} </p>
                                <span>{{ __('home.company.we') }}</span>
                                <span class="word-rotator-words bg-primary">
                                    <b class="is-visible">{{ __('home.company.create') }}</b>
                                    <b>{{ __('home.company.develop') }}</b>
                                    <b>{{ __('home.company.build') }}</b>
                                </span>
                                <span> {{ __('home.company.solutions') }}</span>
                            </h1>
                        </div>
                        <div class="overflow-hidden mb-3">
                            <p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
                                {{ __('home.company.vision') }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row mt-3 mb-5">
                    <div class="col-md-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800">
                        <h3 class="font-weight-bold text-4 mb-2">{{ __('home.company.our_mission') }}</h3>
                        <p>{{ __('home.company.our_mission_detail') }}</p>
                    </div>
                    <div class="col-md-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
                        <h3 class="font-weight-bold text-4 mb-2">{{ __('home.company.our_vision') }}</h3>
                        <p>{{ __('home.company.our_mission_detail') }}.</p>
                    </div>
                    <div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
                        <h3 class="font-weight-bold text-4 mb-2">{{ __('home.company.why_us') }}</h3>
                        <p>{{ __('home.company.why_us_detail') }}</p>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <section class="section section-height-3 bg-color-grey-scale-1 m-0 border-0">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12 pb-sm-4 pb-lg-0 pr-lg-5 mb-sm-5 mb-lg-0 about-us-page">
                    {!! $settings[8]['detail'] !!}
                </div>
            </div>
        </div>
    </section>
@endsection
