@extends('admin.layout.main')

@section('title')
    Tạo mới slider
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Tạo slider</h5>
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
                            <form action="{{ route('sliders.store') }}" method="POST">
                                @csrf
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Url</h4>
                                    <input type="text" class="form-control" name="url" placeHolder="Nhập tên url" value="{{ old('url') }}">
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Order</h4>
                                    <input type="text" class="form-control" name="order" placeHolder="Nhập thứ tự sắp xếp" value="{{ old('order') }}">
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Ảnh<span>*</span></h4>
                                    <span class="input-group-btn">
                                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                            <i class="fa fa-picture-o"></i> Choose
                                        </a>
                                   </span>
                                    <input id="thumbnail" class="form-control" type="text" name="image" required value="{{ old('image') }}">
                                    <img id="holder" style="margin-top:15px;max-height:100px;">
                                </div>
                                {{-- Text 1 --}}
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Text 1 (VI)</h4>
                                    <input type="text" class="form-control" name="vi[text1]" placeHolder="Nhập text" value="">
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Text 1 (EN)</h4>
                                    <input type="text" class="form-control" name="en[text1]" placeHolder="Nhập text" value="">
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Text 1 (CN)</h4>
                                    <input type="text" class="form-control" name="cn[text1]" placeHolder="Nhập text" value="">
                                </div>
                                {{--  Text 2 --}}
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Text 2 (VI)</h4>
                                    <input type="text" class="form-control" name="vi[text2]" placeHolder="Nhập text" value="">
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Text 2 (EN)</h4>
                                    <input type="text" class="form-control" name="en[text2]" placeHolder="Nhập text" value="">
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Text 2 (CN)</h4>
                                    <input type="text" class="form-control" name="cn[text2]" placeHolder="Nhập text" value="">
                                </div>
                                {{-- Text 3 --}}
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Text 3 (VI)</h4>
                                    <input type="text" class="form-control" name="vi[text3]" placeHolder="Nhập text" value="">
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Text 3 (EN)</h4>
                                    <input type="text" class="form-control" name="en[text3]" placeHolder="Nhập text" value="">
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Text 3 (CN)</h4>
                                    <input type="text" class="form-control" name="cn[text3]" placeHolder="Nhập text" value="">
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
