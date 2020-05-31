@extends('client.layout.main')

@section('title')
    Tin tức
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

    <section class="content-page content-tintuc pd-40">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="1.6s">

                    <div class="wp-tintuc-content">
                        <div class="tt-paget-tt">
                            <h3>Tin tức</h3>
                        </div>
                        <div class="wp-list-tintuc-page">
                            @if (count($news))
                                @foreach($news as $new)
                                <div class="wp-item-tt-page">
                                <div class="wp-img-ttpage">
                                    <a href="{{ route('client.news.detail', parseLink($new)) }}">
                                        <img
                                            src="{{ getImage($new->image) }}"
                                            alt="anh tin tuc"
                                        >
                                    </a>
                                </div>
                                <div class="wp-text-ttpage">
                                    <h4>
                                        <a href="{{ route('client.news.detail', parseLink($new)) }}">{{ $new->title }}</a>
                                    </h4>

                                    <p class="date-view">
                                        <span>{{ getDateCreated($new->created_at) }}</span>
                                    </p>

                                    <p class="text-ttpage">
                                        {{ getShortDetail($new->short_detail) }}
                                    </p>
                                </div>
                            </div>
                            @endforeach
                            @else
                                <p class="no-content">Chưa có tin tức nào</p>
                            @endif
                        </div>
                        <div class="phantrang">
                            {{ $news->links() }}
                        </div>
                    </div>
                </div>

                @include('client.layout.side-bar')
        </div>
    </section><!--end-->

@endsection
