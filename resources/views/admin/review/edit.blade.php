@extends('admin.layout.main')

@section('title')
    Sửa review
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Sửa review</h5>
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
                            <form action="{{ route('reviews.update', $review->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Tên</h4>
                                    <input type="text" class="form-control" name="name" placeHolder="Nhập tên" value="{{ $review->name }}" required>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Thông tin</h4>
                                    <input type="text" class="form-control" name="info" placeHolder="Nhập thông tin" value="{{ $review->info }}" required>
                                </div>

                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Ảnh</h4>
                                    <span class="input-group-btn">
                                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                            <i class="fa fa-picture-o"></i> Choose
                                        </a>
                                   </span>
                                    <input id="thumbnail" class="form-control" type="text" name="image" required value="{{ old('image') }}">
                                    <img id="holder" style="margin-top:15px;max-height:100px;">
                                </div>

                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Nội dung (VI)</h4>
                                    <textarea class="form-control" name="vi[content]" cols="100" rows="10" required>{{ $review->vi->content ?? '' }}</textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Nội dung (EN)</h4>
                                    <textarea class="form-control" name="en[content]" cols="100" rows="10" required>{{ $review->en->content ?? '' }}</textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Nội dung (CN)</h4>
                                    <textarea class="form-control" name="cn[content]" cols="100" rows="10" required>{{ $review->cn->content ?? '' }}</textarea>
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
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $(document).ready(function() {
            $('#lfm').filemanager('image');
        });
    </script>
@endsection
