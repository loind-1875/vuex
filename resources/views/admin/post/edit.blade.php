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
                                    <h4 class="sub-title">Tiêu đề <span>*</span></h4>
                                    <input type="text" class="form-control" name="title" placeHolder="Nhập tiêu đề" value="{{ $news->title }}" required>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Ảnh bài viết <span>*</span></h4>
                                    <img src="{{ getImage($news->image) }}" alt="" class="img m-b-10">
                                    <input type="file" class="form-control" name="images">
                                </div>

                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Tóm tắt<span>*</span></h4>
                                    <textarea id="short-detail" name="short_detail" class="form-control" rows="8" cols="20">
                                        {{ $news->short_detail }}
                                    </textarea>
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

        img {
            max-width: 100%;
        }

        #short-detail {
            /*height: 250px;*/
            /*min-height: 250px;*/
        }
    </style>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Nhập chi tiết sản phẩm',
                height: 350,
                maximumImageFileSize: 2097152
            });
            $('#summernote').summernote('code', {!! json_encode($news->detail) !!});
            $('textarea#short-detail').html($('textarea#short-detail').html().trim());
        });
    </script>
@endsection
