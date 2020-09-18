@extends('admin.layout.main')

@section('title')
    Cài đặt chung
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Cài đặt chung</h5>
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
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-xs-6 m-b-30">
                            <form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Tên công ty (VI)</h4>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="company_name[vi]"
                                        placeHolder="Nhập tên"
                                        value="{{ $settings[0]->vi->detail  ?? ''}}" 
                                    >
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Tên công ty (EN)</h4>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="company_name[en]"
                                        placeHolder="Nhập tên"
                                        value="{{ $settings[0]->en->detail ?? '' }}"
                                    >
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Tên công ty (CN)</h4>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="company_name[cn]"
                                        placeHolder="Nhập tên"
                                        value="{{ $settings[0]->cn->detail ?? '' }}"
                                    >
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Logo </h4>
                                    <span class="input-group-btn">
                                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                            <i class="fa fa-picture-o"></i> Choose
                                        </a>
                                    </span>
                                    <input id="thumbnail" class="form-control" type="text" name="logo"  value="{{ $settings[2]->value ?? '' }}">
                                    <img id="holder" style="margin-top:15px;max-height:100px;" src="{{ $settings[2]->value ?? '' }}">
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Favicon </h4>
                                    <span class="input-group-btn">
                                        <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary">
                                            <i class="fa fa-picture-o"></i> Choose
                                        </a>
                                    </span>
                                    <input id="thumbnail1" class="form-control" type="text" name="favicon"  value="{{ $settings[3]->value ?? '' }}">
                                    <img id="holder1" style="margin-top:15px;max-height:100px;" src="{{ $settings[3]->value ?? '' }}">
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Banner 1 </h4>
                                    <span class="input-group-btn">
                                        <a id="lfm2" data-input="thumbnail2" data-preview="holder2" class="btn btn-primary">
                                            <i class="fa fa-picture-o"></i> Choose
                                        </a>
                                    </span>
                                    <input id="thumbnail2" class="form-control" type="text" name="banner1"  value="{{ $settings[6]->value ?? '' }}">
                                    <img id="holder2" style="margin-top:15px;max-height:100px;" src="{{ $settings[6]->value ?? '' }}">
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Banner 2 </h4>
                                    <span class="input-group-btn">
                                        <a id="lfm3" data-input="thumbnail3" data-preview="holder3" class="btn btn-primary">
                                            <i class="fa fa-picture-o"></i> Choose
                                        </a>
                                    </span>
                                    <input id="thumbnail3" class="form-control" type="text" name="banner2"  value="{{ $settings[7]->value ?? '' }}">
                                    <img id="holder3" style="margin-top:15px;max-height:100px;" src="{{ $settings[7]->value ?? '' }}">
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Giới thiệu (VI)</h4>
                                    <textarea id="short-detail" name="about[vi]" placeHolder="Nhập giới thiệu" class="form-control">{{ $settings[1]->vi->detail ?? '' }}</textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Giới thiệu (EN)</h4>
                                    <textarea id="short-detail1" name="about[en]" placeHolder="Nhập giới thiệu" class="form-control">{{ $settings[1]->en->detail ?? '' }}</textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Giới thiệu (CN)</h4>
                                    <textarea id="short-detail2" name="about[cn]" placeHolder="Nhập giới thiệu" class="form-control">{{ $settings[1]->cn->detail ?? '' }}</textarea>
                                </div>

                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Giới thiệu chi tiết (VI)</h4>
                                    <textarea id="short-detail3" name="about2[vi]" placeHolder="Nhập giới thiệu chi tiết" class="form-control">{{ $settings[8]->vi->detail ?? '' }}</textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Giới thiệu chi tiết (EN)</h4>
                                    <textarea id="short-detail4" name="about2[en]" placeHolder="Nhập giới thiệu chi tiết" class="form-control">{{ $settings[8]->en->detail ?? '' }}</textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Giới thiệu chi tiết (CN)</h4>
                                    <textarea id="short-detail5" name="about2[cn]" placeHolder="Nhập giới thiệu chi tiết" class="form-control">{{ $settings[8]->cn->detail ?? '' }}</textarea>
                                </div>

                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Email</h4>
                                    <input type="text" class="form-control" name="email" placeHolder="Nhập email" value="{{ $settings[4]->value ?? '' }}" >
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Phone</h4>
                                    <input type="text" class="form-control" name="phone" placeHolder="Nhập số điện thoại" value="{{ $settings[5]->value ?? '' }}" >
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
            $('#lfm1').filemanager('image');
            $('#lfm2').filemanager('image');
            $('#lfm3').filemanager('image');
            CKEDITOR.replace('short-detail', options);
            CKEDITOR.replace('short-detail1', options);
            CKEDITOR.replace('short-detail2', options);
            CKEDITOR.replace('short-detail3', options);
            CKEDITOR.replace('short-detail4', options);
            CKEDITOR.replace('short-detail5', options);
        });
    </script>
@endsection
