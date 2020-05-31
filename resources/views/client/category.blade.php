@extends('client.layout.main')

@section('title')
    {{ $category->name }}
@endsection

@section('content')
    <section class="banner-page wow fadeInUp" data-wow-duration="1.6s"
             style="background-image: url({{ getImageOther('banner-gt.jpg') }});">
        <div class="container">
            <div class="wp-tt-bread-page">
                <h2 class="title-page">{{ $category->name }}</h2>
                <div class="wp-bread-page">
                    <div class="bread-page">
                        <ul>
                            <li><a href="/">Trang chủ</a></li>
                            <li>{{ $category->name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <h1 class="hidden">{{ $category->name }}</h1>

    <section class="content-danhsach content-page content-tintuc pd-40">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="1.6s">
                    <div class="wp-list-danhmuc wp-list-danhsach">
                        <div class="wp-item-danhmuc-sp wp-list-danhsach-001">
                            <div class="title-danhmuc-dm">
                                <h3>{{ $category->name }}</h3>
                            </div>
{{--                            <div class="product-filter">--}}
{{--                                <form action="http://congtyhft.tamphat.edu.vn/tim-kiem-nang-cao.html" method="get" class="form uk-form" id="filterform">--}}
{{--                                    <div class="uk-grid uk-grid-collapse uk-flex-middle">--}}

{{--                                        <div class="uk-width-xlarge-5-5">--}}
{{--                                            <div class="uk-grid lib-grid-5">--}}
{{--                                                <div class="uk-width-small-1-2 uk-width-medium-1-4 uk-width-xlarge-2-10">--}}
{{--                                                    <select name="cataloguesid" class="form-select uk-width-1-1" id="cataloguesid">--}}
{{--                                                        <option value="0">[Chọn danh mục]</option>--}}
{{--                                                        <option value="92" selected="selected">Hóa Chất</option>--}}
{{--                                                        <option value="107">Carmay Thường</option>--}}
{{--                                                        <option value="94">Phụ gia sản xuất sơn</option>--}}
{{--                                                        <option value="112">Phụ gia ổn định bề mặt</option>--}}
{{--                                                        <option value="108">Carmay Biến Sắc</option>--}}
{{--                                                        <option value="95">Carmay</option>--}}
{{--                                                        <option value="102">Phụ gia chống lắng</option>--}}
{{--                                                        <option value="96">Nhũ Nhôm</option>--}}
{{--                                                        <option value="99">Bột đồng</option>--}}
{{--                                                        <option value="97">Bột màu</option>--}}
{{--                                                        <option value="111">Phụ gia phân tán</option>--}}
{{--                                                        <option value="98">Màu nhuộm</option>--}}
{{--                                                        <option value="100">Phụ gia tăng bám dính</option>--}}
{{--                                                    </select>--}}
{{--                                                </div>--}}
{{--                                                <div class="uk-width-small-1-2 uk-width-medium-1-4 uk-width-xlarge-2-10">--}}
{{--                                                    <select name="attr[]" class="uk-width-1-1 form-select" id="static">--}}
{{--                                                        <option value="0">Trạng thái</option>--}}
{{--                                                        <option  value="46">Dung Dịch</option>--}}
{{--                                                        <option  value="47">Bột</option>--}}
{{--                                                    </select>--}}
{{--                                                </div>--}}
{{--                                                <div class="uk-width-small-1-2 uk-width-medium-1-4 uk-width-xlarge-2-10">--}}
{{--                                                    <select name="attr[]" class="uk-width-1-1 form-select" id="color">--}}
{{--                                                        <option value="0">Màu sắc</option>--}}
{{--                                                        <option  value="48">Màu xanh dương</option>--}}
{{--                                                        <option  value="49">Màu xanh lá</option>--}}
{{--                                                        <option  value="50">Màu đỏ</option>--}}
{{--                                                        <option  value="51">Màu vàng</option>--}}
{{--                                                        <option  value="52">Màu đen</option>--}}
{{--                                                        <option  value="60">Màu bạc</option>--}}
{{--                                                        <option  value="61">Màu tím</option>--}}
{{--                                                    </select>--}}
{{--                                                </div>--}}
{{--                                                <div class="uk-width-small-1-2 uk-width-medium-1-4 uk-width-xlarge-2-10">--}}
{{--                                                    <select name="attr[]" class="uk-width-1-1 form-select" id="size">--}}
{{--                                                        <option value="0">Kích thước</option>--}}
{{--                                                    </select>--}}
{{--                                                </div>--}}
{{--                                                <div class="uk-width-small-1-2 uk-width-medium-1-4 uk-width-xlarge-1-10">--}}
{{--                                                    <input type="submit" value="Tìm kiếm" name="submit" class="btn-submit uk-width-1-1" />--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                                <script type="text/javascript">--}}
{{--                                    $(function(){--}}
{{--                                        $('#filterform').on('submit',function(){--}}
{{--                                            var cataloguesid = $('#cataloguesid').val();--}}
{{--                                            var thuonghieu = $('#static').val();--}}
{{--                                            var khoanggia = $('#color').val();--}}
{{--                                            var size = $('#size').val();--}}
{{--                                            if(cataloguesid == 0 && thuonghieu == 0 && khoanggia == 0&& size == 0) {--}}
{{--                                                alert('Bạn phải nhập ít nhất 1 thông tin để tìm kiếm');--}}
{{--                                                return false;--}}
{{--                                            }--}}
{{--                                        });--}}
{{--                                    });--}}
{{--                                </script>--}}
{{--                            </div>--}}
                            <!-- .product-filter -->
                            <p>{{ $category->description }}</p>
                            <div class="wp-list-sp-dm wp-list-danhsach">
                                <div class="row row-edit-dm">
                                    @if (count($products) > 0)
                                        @foreach ($products as $product)
                                        <div class="col-md-3 col-sm-6 col-xs-6">
                                        <div class="wp-sp wp-sp-danhmuc">
                                            <div class="wp-img-sp">
                                                <a href="{{ route('client.product', parseLink($product)) }}">
                                                    <img src="{{ getImage($product->image) }}" alt="{{ $product->name }}">
                                                </a>
                                            </div>
                                            <div class="text-sp">
                                                <h4 class="ten-sp">
                                                    <a href="{{ route('client.product', parseLink($product)) }}">
                                                        {{ $product->name }}
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @else
                                        <p class="no-content">Không có sản phẩm nào</p>
                                    @endif
                                </div>
                                <div class="phantrang">
                                    <div class="pagination">
                                        {{ $products->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('client.layout.side-bar')
            </div>
        </div>
    </section><!--end-->
@endsection

@section('style')
    <link rel="stylesheet" href="/client/css/main.css">
@endsection
