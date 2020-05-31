@extends('client.layout.main')

@section('title')
    Tin tuyển dụng
@endsection

@section('content')
    <section class="banner-page wow fadeInUp" data-wow-duration="1.6s"
             style="background-image: url({{ asset(config('media.client.other') . 'banner-gt.jpg') }});">
        <div class="container">
            <div class="wp-tt-bread-page">
                <h2 class="title-page">Tin tuyển dụng</h2>

                <div class="wp-bread-page">
                    <div class="bread-page">
                        <ul>
                            <li><a href="/">Trang chủ</a></li>
                            <li>Tin tuyển dụng</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-page content-tintuc pd-40">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="1.6s">

                    <div class="wp-tintuc-content">
                        <div class="tt-paget-tt">
                            <h3>Tin tuyển dụng</h3>
                        </div>
                        <div class="wp-list-tintuc-page">
                            @if (count($recruitments))
                                @foreach($recruitments as $recruitment)
                                <div class="wp-item-tt-page">
                                    <div class="wp-img-ttpage">
                                        <a href="{{ route('client.news.detail', parseLink($recruitment)) }}">
                                            <img
                                                src="{{ getImage($recruitment->image) }}"
                                                alt="anh tin tuc"
                                            >
                                        </a>
                                    </div>
                                    <div class="wp-text-ttpage">
                                        <h4>
                                            <a href="{{ route('client.news.detail', parseLink($recruitment)) }}">{{ $recruitment->title }}</a>
                                        </h4>

                                        <p class="date-view">
                                            <span>{{ getDateCreated($recruitment->created_at) }}</span>
                                        </p>

                                        <p class="text-ttpage">
                                            {{ getShortDetail($recruitment->short_detail) }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                            @else
                                <p class="no-content">Chưa có tin tuyển dụng nào</p>
                            @endif
                        </div>
                        <div class="phantrang">
                            {{ $recruitments->links() }}
                        </div>
                    </div>
                </div>

                @include('client.layout.side-bar')
            </div>
        </div>
    </section><!--end-->

@endsection
