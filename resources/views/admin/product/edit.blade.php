@extends('admin.layout.main')

@section('title')
    Sửa sản phẩm
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Sửa sản phẩm</h5>
                </div>
                <div class="card-block">
                    <div class="row">
                        <div class="col-sm-12 col-xs-6 m-b-30">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-xs-6 m-b-30">
                            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Tên sản phẩm (VI)<span>*</span></h4>
                                    <input type="hidden" name="vi[id]" value="{{ $product->vi->id }}">
                                    <input type="text" class="form-control" name="vi[name]" placeHolder="Nhập tên sản phẩm" value="{{ $product->vi->name }}" required>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Tên sản phẩm (EN)<span>*</span></h4>
                                    <input type="hidden" name="en[id]" value="{{ $product->en->id }}">
                                    <input type="text" class="form-control" name="en[name]" placeHolder="Nhập tên sản phẩm" value="{{ $product->en->name }}" required>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Tên sản phẩm (CN)<span>*</span></h4>
                                    <input type="hidden" name="cn[id]" value="{{ $product->cn->id }}">
                                    <input type="text" class="form-control" name="cn[name]" placeHolder="Nhập tên sản phẩm" value="{{ $product->cn->name }}" required>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Ảnh sản phẩm<span>*</span></h4>
                                    <img src="{{ getImage($product->image) }}" alt="" class="img m-b-10">
                                    <input type="file" name="images" class="form-control">
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Danh mục<span>*</span></h4>
                                    <div class="row">
                                        @foreach ($categories as $cate)
                                            <div class="col-sm-4">
                                                <div class="category-list">
                                                    <div class="category-single border-checkbox-section">
                                                        <div class="border-checkbox-group border-checkbox-group-primary">
                                                            <input
                                                                class="border-checkbox"
                                                                name="category[]"
                                                                value="{{ $cate->id }}"
                                                                type="checkbox"
                                                                id="{{ 'checkbox' . $cate->id }}"
                                                                {{ in_array($cate->id, $productCategory) ? 'checked' : '' }}
                                                            >
                                                            <label class="border-checkbox-label" for="{{ 'checkbox' . $cate->id }}">{{ $cate->name }}</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Chi tiết sản phẩm (VI) </h4>
                                    <textarea id="summernote" name="vi[detail]" class="form-control"></textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Chi tiết sản phẩm (EN) </h4>
                                    <textarea id="summernote1" name="en[detail]" class="form-control"></textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Chi tiết sản phẩm (CN) </h4>
                                    <textarea id="summernote2" name="cn[detail]" class="form-control"></textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit">Lưu</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('style')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <style>
        h4 span {
            color: red;
            font-size: 22px;
        }

        .child-cate {
            margin-left: 22px;
        }

        .category-single .border-checkbox-group.border-checkbox-group-primary {
            margin-bottom: 10px;
        }

        .button-page .card-block ul li {
            display: list-item;
            float: none;
            margin-bottom: 20px;
        }

        .button-page .card-block ul {
            list-style-type: disc;
            padding-left: 25px;
        }
        img {
            max-width: 100%;
        }
    </style>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Nhập chi tiết sản phẩm',
                height: 350,
                maximumImageFileSize: 2097152
            });
            $('#summernote1').summernote({
                placeholder: 'Nhập chi tiết sản phẩm',
                height: 350,
                maximumImageFileSize: 2097152
            });
            $('#summernote2').summernote({
                placeholder: 'Nhập chi tiết sản phẩm',
                height: 350,
                maximumImageFileSize: 2097152
            });

            $('#summernote').summernote('code', {!! json_encode($product->vi->detail) !!});
            $('#summernote1').summernote('code', {!! json_encode($product->en->detail) !!});
            $('#summernote2').summernote('code', {!! json_encode($product->cn->detail) !!});
        });
    </script>
@endsection
