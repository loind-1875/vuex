@extends('client.layout.main')

@section('title')
    {{ __('home.header.about') }}
@endsection

@section('content')
    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7"
         style="background-image: url({{ asset('/client/img/slides/5.jpg') }}); background-position: bottom;"
    >
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold mt-4">{{ __('home.header.contact') }}</h1>
                    <span class="sub-title mt-4">{{ __('home.company.name') }}</span>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="/">{{ __('home.header.home') }}</a></li>
                        <li class="active">{{ __('home.header.contact') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container mb-4">

        <div class="row py-4 mb-4">
            <div class="col-lg-6">

                <div class="overflow-hidden mb-1">
                    <h2 class="font-weight-normal text-7 mt-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
                        {{ __('home.contact') }}
                    </h2>
                </div>
                <div class="overflow-hidden mt-4 mb-2 pb-3">
                    <div class="row">
                        <div class="col-sm-12 p-30">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <form class="contact-form" action="{{ route('client.send_contact') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-lg-6">
                            <label class="required font-weight-bold text-dark text-2">{{ __('home.contact_us.name') }}</label>
                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="required font-weight-bold text-dark text-2">{{ __('home.contact_us.email') }}</label>
                            <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="font-weight-bold text-dark text-2">{{ __('home.contact_us.phone') }}</label>
                            <input type="number" value="" data-msg-required="Please enter the phone." maxlength="100" class="form-control" name="phone" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="required font-weight-bold text-dark text-2">{{ __('home.contact_us.message') }}</label>
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="message" required></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <input type="submit" value="{{ __('home.contact_us.send') }}" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-lg-6">

                <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                    <h4 class="mt-2 mb-1">{{ __('home.footer.hanoi') }}</h4>
                    <ul class="list list-icons list-icons-style-2 mt-2">
                        <li>
                            <i class="fas fa-map-marker-alt top-6"></i>
                            <strong class="text-dark">{{ __('home.footer.office_address') }}:</strong>
                            {{ __('home.footer.office_address_detail') }}
                        </li>
                        <li>
                            <i class="fas fa-phone top-6"></i>
                            <strong class="text-dark">{{ __('home.footer.tel') }}:</strong>
                            (+84) 024.33542250
                        </li>
                    </ul>
                </div>

                <div class="appear-animation mt-4" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                    <h4 class="mt-2 mb-1">{{ __('home.footer.hcm') }}</h4>
                    <ul class="list list-icons list-icons-style-2 mt-2">
                        <li>
                            <i class="fas fa-map-marker-alt top-6"></i>
                            <strong class="text-dark">{{ __('home.footer.office_address') }}:</strong>
                            {{ __('home.footer.office_address_detail2') }}
                        </li>
                        <li>
                            <i class="fas fa-phone top-6"></i>
                            <strong class="text-dark">{{ __('home.footer.tel') }}:</strong>
                            (+84) 028.35533922
                        </li>
                    </ul>
                </div>

                <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
                    <h4 class="pt-5">Business <strong>Hours</strong></h4>
                    <ul class="list list-icons list-dark mt-2">
                        <li><i class="far fa-clock top-6"></i> Monday - Friday - 9am to 5pm</li>
                        <li><i class="far fa-clock top-6"></i> Saturday - 9am to 2pm</li>
                        <li><i class="far fa-clock top-6"></i> Sunday - Closed</li>
                    </ul>
                </div>

                <h4 class="pt-5">Get in <strong>Touch</strong></h4>
                <p class="lead mb-0 text-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

            </div>

        </div>

    </div>
@endsection

@section('style')
    <style>
    </style><!--end-->
@endsection
