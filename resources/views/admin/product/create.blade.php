@extends('admin.layout.main')

@section('title')
    Tạo mới sản phẩm
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Tạo sản phẩm</h5>
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
                            @if (count($categories))
                            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Tên sản phẩm (VI)<span>*</span></h4>
                                    <input type="text" class="form-control" name="vi[name]" placeHolder="Nhập tên sản phẩm" value="{{ old('vi[name]') }}" required>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Tên sản phẩm (EN)<span>*</span></h4>
                                    <input type="text" class="form-control" name="en[name]" placeHolder="Nhập tên sản phẩm" value="{{ old('en[name]') }}" required>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Tên sản phẩm (CN)<span>*</span></h4>
                                    <input type="text" class="form-control" name="cn[name]" placeHolder="Nhập tên sản phẩm" value="{{ old('cn[name]') }}" required>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Ảnh sản phẩm<span>*</span></h4>
                                    <input type="file" name="images" class="form-control" value="{{ old('name') }}" required>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Danh mục<span>*</span></h4>
                                    <div class="row">
                                        @foreach ($categories as $cate)
                                            <div class="col-sm-4">
                                                <div class="category-list">
                                                    <div class="category-single border-checkbox-section">
                                                        <div class="border-checkbox-group border-checkbox-group-primary">
                                                            <input class="border-checkbox" name="category[]" value="{{ $cate->id }}" type="checkbox" id="{{ 'checkbox' . $cate->id }}">
                                                            <label class="border-checkbox-label" for="{{ 'checkbox' . $cate->id }}">{{ $cate->name }}</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Mô tả (VI)</h4>
                                    <textarea name="vi[short_detail]" id="des" cols="30" rows="10" placeHolder="Nhập mô tả ngắn sản phẩm"  class="form-control">{{ old('vi[short_detail]') }}</textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Mô tả (EN)</h4>
                                    <textarea name="en[short_detail]" id="" cols="30" rows="10" placeHolder="Nhập mô tả ngắn sản phẩm"  class="form-control">{{ old('en[short_detail]') }}</textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Mô tả (CN)</h4>
                                    <textarea name="cn[short_detail]" id="" cols="30" rows="10" placeHolder="Nhập mô tả ngắn sản phẩm"  class="form-control">{{ old('cn[short_detail]') }}</textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Chi tiết sản phẩm (VI) <span>*</span></h4>
                                    <textarea id="summernote" name="vi[detail]" class="form-control"></textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Chi tiết sản phẩm (EN) <span>*</span></h4>
                                    <textarea id="summernote1" name="en[detail]" class="form-control"></textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Chi tiết sản phẩm (CN) <span>*</span></h4>
                                    <textarea id="summernote2" name="cn[detail]" class="form-control"></textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit">Lưu</button>
                                </div>
                            </form>
                            @else
                                <p class="text-center">Bạn cần tạo danh mục trước <a href="{{ route('categories.create') }}" class="text-danger">Tạo mới</a></p>
                            @endif
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
        });
    </script>
@endsection
