@extends('client.layout.main')

@section('title')
    {{ $product->name }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <aside class="sidebar">
                    <h5 class="font-weight-bold pt-3">Categories</h5>
                        <ul class="nav nav-list flex-column">
                            @foreach ($categories as $category)
                                <li class="nav-item">
                                    <a class="nav-link" href="#">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                <div class="row mb-5">
                    <div class="col">
                        <h5 class="font-weight-bold pt-5">Top Rated Products</h5>
                        <ul class="simple-post-list">
                            @foreach ($newProduct as $pro)
                                <li>
                                    <div class="post-image">
                                        <div class="d-block">
                                            <a href="{{ route('client.product', parseLink($pro)) }}">
                                                <img alt="" width="60" height="60" class="img-fluid" src="{{ getImage($pro->image) }}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-info">
                                        <a href="{{ route('client.product', parseLink($pro)) }}">{{ $pro->name }}</a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                </aside>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'margin': 10}">
                            <div>
                                <img alt="" height="300" class="img-fluid" src="{{ getImage($product->image) }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="summary entry-summary">
                            <h1 class="mb-0 font-weight-bold text-7">{{ $product->name }}</h1>

                            <div class="pb-0 clearfix">
                                <div title="Rated 3 out of 5" class="float-left">
                                    <input type="text" class="d-none" value="3" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">
                                </div>
                            </div>

                            <div class="product-meta mt-4">
                                <span class="posted-in">
                                    Categories:
                                    @foreach ($product->categories as $cate)
                                        <a rel="tag" href="#">{{ $cate->name }}</a>,
                                    @endforeach
                                </span>
                            </div>

                        </div>


                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="tabs tabs-product mb-2">
                            <ul class="nav nav-tabs">
                                <li class="nav-item active">
                                    <a class="nav-link py-3 px-4" href="#productDescription" data-toggle="tab">Description</a>
                                </li>
                            </ul>
                            <div class="tab-content p-0">
                                <div class="tab-pane p-4 active" id="productDescription">
                                    {!! $product->detail !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="solid my-5">

                <h4 class="mb-3">Related <strong>Products</strong></h4>
                <div class="masonry-loader masonry-loader-showing">
                    <div class="row products product-thumb-info-list mt-3" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
                        @foreach ($otherProducts as $pro)
                        <div class="col-12 col-sm-6 col-lg-3 product">
                            <span class="product-thumb-info border-0">
                                <a href="{{ route('client.product', parseLink($pro)) }}">
                                    <span class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="{{ getImage($pro->image) }} ">
                                    </span>
                                </a>
                                <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                    <a href="{{ route('client.product', parseLink($pro)) }}">
                                        <h4 class="text-4 text-primary">{{ $pro->name }}</h4>
                                    </a>
                                </span>
                            </span>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('style')
    <style>

    </style>
@endsection

@section('script')

@endsection
