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
                                    <h4 class="sub-title">Sao<span>*</span></h4>
                                    <input type="number" min="0" max="5" class="form-control" name="star" value="{{ $product->star }}" placeHolder="Nhập số sao của sản phẩm" required>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Ảnh sản phẩm<span>*</span></h4>
                                    <span class="input-group-btn">
                                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                            <i class="fa fa-picture-o"></i> Choose
                                        </a>
                                   </span>
                                    <input id="thumbnail" class="form-control" type="text" name="image" required value="{{ $product->image }}">
                                    <img id="holder" style="margin-top:15px;max-height:200px;" src="{{ $product->image }}">
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
                                    <h4 class="sub-title">Mô tả (VI)</h4>
                                    <textarea name="vi[short_detail]" id="des" cols="30" rows="10" placeHolder="Nhập mô tả ngắn sản phẩm"  class="form-control">{{ $product->vi->short_detail }}</textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Mô tả (EN)</h4>
                                    <textarea name="en[short_detail]" id="" cols="30" rows="10" placeHolder="Nhập mô tả ngắn sản phẩm"  class="form-control">{{ $product->en->short_detail }}</textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Mô tả (CN)</h4>
                                    <textarea name="cn[short_detail]" id="" cols="30" rows="10" placeHolder="Nhập mô tả ngắn sản phẩm"  class="form-control">{{ $product->cn->short_detail }}</textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Chi tiết sản phẩm (VI) </h4>
                                    <textarea id="summernote" name="vi[detail]" class="form-control">{{ $product->vi->detail }}</textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Chi tiết sản phẩm (EN) </h4>
                                    <textarea id="summernote1" name="en[detail]" class="form-control">{{ $product->en->detail }}</textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Chi tiết sản phẩm (CN) </h4>
                                    <textarea id="summernote2" name="cn[detail]" class="form-control">{{ $product->cn->detail }}</textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <div class="form-group row has-success">
                                        <label class="col-sm-2">Public</label>
                                        <div class="col-sm-10">
                                            <div class="form-radio">
                                                <div class="radio radiofill radio-primary radio-inline">
                                                    <label>
                                                        <input type="radio" name="public" value="1" data-bv-field="public" {{ $product->public == 1 ? 'checked' : '' }} />
                                                        <i class="helper"></i>Show
                                                    </label>
                                                </div>
                                                <div class="radio radiofill radio-primary radio-inline">
                                                    <label>
                                                        <input type="radio" name="public" value="0" data-bv-field="public" {{ $product->public == 0 ? 'checked' : '' }} />
                                                        <i class="helper"></i>Ẩn
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <div class="form-group row has-success">
                                        <label class="col-sm-2">Hiển thị trang chủ</label>
                                        <div class="col-sm-10">
                                            <div class="form-radio">
                                                <div class="radio radiofill radio-primary radio-inline">
                                                    <label>
                                                        <input type="radio" name="show_home" value="1" data-bv-field="public" {{ $product->show_home == 1 ? 'checked' : '' }} />
                                                        <i class="helper"></i>Show
                                                    </label>
                                                </div>
                                                <div class="radio radiofill radio-primary radio-inline">
                                                    <label>
                                                        <input type="radio" name="show_home" value="0" data-bv-field="public" {{ $product->show_home == 0 ? 'checked' : '' }} />
                                                        <i class="helper"></i>Ẩn
                                                    </label>
                                                </div>
                                            </div>
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
