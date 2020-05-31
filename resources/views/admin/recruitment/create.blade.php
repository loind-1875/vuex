@extends('admin.layout.main')

@section('title')
    Tạo mới tin tuyển dụng
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Tạo tin tuyển dụng</h5>
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
                            <form action="{{ route('recruitment.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Tiêu đề <span>*</span></h4>
                                    <input type="text" class="form-control" name="title" placeHolder="Nhập tiêu đề" value="{{ old('name') }}" required>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Ảnh bài viết <span>*</span></h4>
                                    <input type="file" class="form-control" name="images" required>
                                </div>
                                <div class="col-sm-12 m-b-30 d-none">
                                    <input type="text" class="form-control" name="is_recruitment" value="1">
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Tóm tắt<span>*</span></h4>
                                    <textarea id="short-detail" name="short_detail" class="form-control"></textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Chi tiết<span>*</span></h4>
                                    <textarea id="summernote" name="detail" class="form-control"></textarea>
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

        #short-detail {
            height: 250px;
            min-height: 250px;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Nhập chi tiết sản phẩm',
                height: 350,
                maximumImageFileSize: 2097152
            });
        });
    </script>
@endsection
