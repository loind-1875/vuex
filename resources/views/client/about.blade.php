@extends('client.layout.main')

@section('title')

@endsection

@section('content')
    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(img/page-header/page-header-about-us.jpg);">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold mt-4">{{ __('home.header.about') }}</h1>
                    <span class="sub-title mt-4">{{ __('home.company.name') }}</span>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="#">{{ __('home.header.home') }}</a></li>
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
                    <div class="col-md-9 mx-md-auto">
                        <div class="overflow-hidden mb-3">
                            <h1 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">
                                <span>{{ __('home.company.name') }}, {{ __('home.company.we') }} </span>
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
                        <h3 class="font-weight-bold text-4 mb-2">Our Mission</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu.</p>
                    </div>
                    <div class="col-md-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
                        <h3 class="font-weight-bold text-4 mb-2">Our Vision</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nulla vel pellentesque consequat, ante nulla hendrerit arcu.</p>
                    </div>
                    <div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
                        <h3 class="font-weight-bold text-4 mb-2">Why Us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel consequat, ante nulla hendrerit arcu.</p>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <section class="section section-height-3 bg-color-grey-scale-1 m-0 border-0">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 pb-sm-4 pb-lg-0 pr-lg-5 mb-sm-5 mb-lg-0">
                    <h2 class="text-color-dark font-weight-normal text-6 mb-2">Who <strong class="font-weight-extra-bold">We Are</strong></h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc. </p>
                    <p class="pr-5 mr-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget</p>
                </div>
                <div class="col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-md-4 offset-lg-2 mt-sm-5" style="top: 1.7rem;">
                    <img src="img/generic/generic-corporate-3-1.jpg" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="300" style="top: 10%; left: -50%;" alt="" />
                    <img src="img/generic/generic-corporate-3-2.jpg" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" style="top: -33%; left: -29%;" alt="" />
                    <img src="img/generic/generic-corporate-3-3.jpg" class="img-fluid position-relative appear-animation mb-2" data-appear-animation="expandIn" data-appear-animation-delay="600" alt="" />
                </div>
            </div>
        </div>
    </section>

    <div class="container appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
        <div class="row pt-5 pb-4 my-5">
            <div class="col-md-6 order-2 order-md-1 text-center text-md-left">
                <div class="owl-carousel owl-theme nav-style-1 nav-center-images-only stage-margin mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 2}, '1200': {'items': 2}}, 'margin': 25, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
                    <div>
                        <img class="img-fluid rounded-0 mb-4" src="img/team/team-1.jpg" alt="" />
                        <h3 class="font-weight-bold text-color-dark text-4 mb-0">John Doe</h3>
                        <p class="text-2 mb-0">CEO</p>
                    </div>
                    <div>
                        <img class="img-fluid rounded-0 mb-4" src="img/team/team-2.jpg" alt="" />
                        <h3 class="font-weight-bold text-color-dark text-4 mb-0">Jessica Doe</h3>
                        <p class="text-2 mb-0">CEO</p>
                    </div>
                    <div>
                        <img class="img-fluid rounded-0 mb-4" src="img/team/team-3.jpg" alt="" />
                        <h3 class="font-weight-bold text-color-dark text-4 mb-0">Chris Doe</h3>
                        <p class="text-2 mb-0">DEVELOPER</p>
                    </div>
                    <div>
                        <img class="img-fluid rounded-0 mb-4" src="img/team/team-4.jpg" alt="" />
                        <h3 class="font-weight-bold text-color-dark text-4 mb-0">Julie Doe</h3>
                        <p class="text-2 mb-0">SEO ANALYST</p>
                    </div>
                    <div>
                        <img class="img-fluid rounded-0 mb-4" src="img/team/team-5.jpg" alt="" />
                        <h3 class="font-weight-bold text-color-dark text-4 mb-0">Robert Doe</h3>
                        <p class="text-2 mb-0">DESIGNER</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 order-1 order-md-2 text-center text-md-left mb-5 mb-md-0">
                <h2 class="text-color-dark font-weight-normal text-6 mb-2 pb-1">Meet <strong class="font-weight-extra-bold">Our Team</strong></h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget.</p>
            </div>
        </div>
    </div>
@endsection
