@extends('client.layout.main')

@section('title')
    {{ $article->title }}
@endsection

@section('content')
    <section class="banner-page wow fadeInUp" data-wow-duration="1.6s"
             style="background-image: url({{ asset(config('media.client.other') . 'banner-gt.jpg') }});">
        <div class="container">
            <div class="wp-tt-bread-page">
                <h2 class="title-page">Tin tức</h2>

                <div class="wp-bread-page">
                    <div class="bread-page">
                        <ul>
                            <li><a href="/">Trang chủ</a></li>
                            <li>Tin tức</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ct-tin-content content-page content-tintuc pd-40">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="chi-tiet-tin">
                        <div class="tt-ct-tin">
                            <h1>{{ $article->title }}</h1>
                        </div>
                        <div class="wp-content-ct-tin">
                            <div class="wp-date-view-ct">
                                <div class="date-view-ct">
                                    <div class="date-ct">
                                        <p>Cập nhật: {{ getDateCreated($article->updated_at) }}</p>
                                    </div>
                                </div>

                            </div>
                            <div class="text-main-ct">
                                {!! $article->detail !!}
                            </div>
                        </div>
                    </div>
                </div>
                @include('client.layout.side-bar')
            </div>
        </div>
    </section><!--end-->

@endsection
