@extends('admin.layout.main')

@section('title')
    Sửa tin tức
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Sửa tin tức</h5>
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
                            <form action="{{ route('posts.update', $news->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Tiêu đề (VI)<span>*</span></h4>
                                    <input type="text" class="form-control" name="vi[title]" placeHolder="Nhập tiêu đề" value="{{ $news->vi->title }}" required>
                                    <input type="hidden" value="{{ $news->vi->id }}" name="vi[id]">
                                </div>
                                 <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Tiêu đề (EN)<span>*</span></h4>
                                    <input type="text" class="form-control" name="en[title]" placeHolder="Nhập tiêu đề" value="{{ $news->en->title }}" required>
                                     <input type="hidden" value="{{ $news->en->id }}" name="en[id]">
                                 </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Tiêu đề (CN)<span>*</span></h4>
                                    <input type="text" class="form-control" name="cn[title]" placeHolder="Nhập tiêu đề" value="{{ $news->cn->title }}" required>
                                    <input type="hidden" value="{{ $news->cn->id }}" name="cn[id]">
                                </div>

                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Ảnh bài viết <span>*</span></h4>
                                    <img src="{{ getImage($news->image) }}" alt="" class="img m-b-10">
                                    <input type="file" class="form-control" name="images">
                                </div>

                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Tóm tắt (VI)<span>*</span></h4>
                                    <textarea id="short-detail" name="vi[short_detail]" placeHolder="Nhập tóm tắt" class="form-control short-detail">{{ $news->vi->short_detail }}</textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Tóm tắt (EN)<span>*</span></h4>
                                    <textarea id="short-detail1" name="en[short_detail]" placeHolder="Nhập tóm tắt" class="form-control short-detail">{{ $news->en->short_detail }}</textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Tóm tắt (CN)<span>*</span></h4>
                                    <textarea id="short-detail2" name="cn[short_detail]"  placeHolder="Nhập tóm tắt" class="form-control short-detail">{{ $news->cn->short_detail }}</textarea>
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
                                            <input class="border-checkbox" name="is_recruitment" value="1" {{ $news->is_recruitment == 1 ? 'checked' : ''}} type="checkbox" id="checkbox1">
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

        img {
            max-width: 100%;
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

        /*#short-detail {
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


            $('#summernote').summernote('code', {!! json_encode($news->vi->detail) !!});
            $('#summernote1').summernote('code', {!! json_encode($news->en->detail) !!});
            $('#summernote2').summernote('code', {!! json_encode($news->cn->detail) !!});
        });
    </script>
@endsection
