@extends('admin.layout.main')

@section('title')
    Tạo mới tin tức
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Tạo tin tức</h5>
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
                            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Tiêu đề (VI)<span>*</span></h4>
                                    <input type="text" class="form-control" name="vi[title]" placeHolder="Nhập tiêu đề" value="{{ old('vi[title]') }}" required>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Tiêu đề (EN)<span>*</span></h4>
                                    <input type="text" class="form-control" name="en[title]" placeHolder="Nhập tiêu đề" value="{{ old('en[title]') }}" required>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Tiêu đề (CN)<span>*</span></h4>
                                    <input type="text" class="form-control" name="cn[title]" placeHolder="Nhập tiêu đề" value="{{ old('cn[title]') }}" required>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Ảnh bài viết <span>*</span></h4>
                                    <input type="file" class="form-control" name="images" required>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Tóm tắt (VI)<span>*</span></h4>
                                    <textarea id="short-detail" name="vi[short_detail]" placeHolder="Nhập tóm tắt" class="form-control">
                                        {{ old('vi[short_detail]') }}
                                    </textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Tóm tắt (EN)<span>*</span></h4>
                                    <textarea id="short-detail" name="en[short_detail]" placeHolder="Nhập tóm tắt" class="form-control">
                                        {{ old('en[short_detail]') }}
                                    </textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Tóm tắt (CN)<span>*</span></h4>
                                    <textarea id="short-detail" name="cn[short_detail]" placeHolder="Nhập tóm tắt" class="form-control">
                                        {{ old('cn[short_detail]') }}
                                    </textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Chi tiết (VI)<span>*</span></h4>
                                    <textarea id="summernote" name="vi[detail]" class="form-control"></textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Chi tiết (EN)<span>*</span></h4>
                                    <textarea id="summernote1" name="en[detail]" class="form-control"></textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Chi tiết (CN)<span>*</span></h4>
                                    <textarea id="summernote2" name="cn[detail]" class="form-control"></textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <div class="category-single border-checkbox-section">
                                        <div class="border-checkbox-group border-checkbox-group-primary">
                                            <input class="border-checkbox" name="is_recruitment" value="1" type="checkbox" id="checkbox1">
                                            <label class="border-checkbox-label" for="checkbox1">Tin tuyển dụng</label>
                                        </div>
                                    </div>
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
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <style>
        h4 span {
            color: red;
            font-size: 22px;
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

       /* #short-detail {
            height: 250px;
            min-height: 250px;
        }*/
    </style>
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
