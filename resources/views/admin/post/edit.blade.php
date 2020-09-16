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
                                    <span class="input-group-btn">
                                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                            <i class="fa fa-picture-o"></i> Choose
                                        </a>
                                   </span>
                                    <input id="thumbnail" class="form-control" type="text" name="image" required value="{{ $news->image }}">
                                    <img id="holder" style="margin-top:15px;max-height:200px;" src="{{ $news->image }}">
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
                                    <textarea id="summernote" name="vi[detail]" class="form-control">{!! $news->vi->detail !!}</textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Chi tiết (EN)<span>*</span></h4>
                                    <textarea id="summernote1" name="en[detail]" class="form-control">{!! $news->en->detail !!}</textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Chi tiết (CN)<span>*</span></h4>
                                    <textarea id="summernote2" name="cn[detail]" class="form-control">{!! $news->cn->detail !!}</textarea>
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
@endsection

@section('script')
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#lfm').filemanager('image');
            CKEDITOR.replace('summernote', options);
            CKEDITOR.replace('summernote1', options);
            CKEDITOR.replace('summernote2', options);
        });
    </script>
@endsection
