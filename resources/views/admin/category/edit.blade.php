@extends('admin.layout.main')

@section('title')
    Sửa danh mục
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Sửa danh mục</h5>
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
                            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Tên danh mục (VI)<span>*</span></h4>
                                    <input type="text" class="form-control" name="vi[name]" placeHolder="Nhập tên danh mục" value="{{ $category->vi->name }}" required>
                                    <input type="hidden" name="vi[id]" value="{{ $category->vi->id }}">
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Tên danh mục (EN)<span>*</span></h4>
                                    <input type="hidden" name="en[id]" value="{{ $category->en->id }}">
                                    <input type="text" class="form-control" name="en[name]" placeHolder="Nhập tên danh mục" value="{{ $category->en->name }}" required>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Tên danh mục (CN)<span>*</span></h4>
                                    <input type="hidden" name="cn[id]" value="{{ $category->cn->id }}">
                                    <input type="text" class="form-control" name="cn[name]" placeHolder="Nhập tên danh mục" value="{{ $category->cn->name }}" required>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Mô tả (VI)<span>*</span></h4>
                                    <textarea name="vi[description]" id="des" cols="30" rows="10" placeHolder="Nhập mô tả danh mục"  class="form-control" required>{{ $category->vi->description }}</textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Mô tả (EN)<span>*</span></h4>
                                    <textarea name="en[description]" id="" cols="30" rows="10" placeHolder="Nhập mô tả danh mục"  class="form-control" required>{{ $category->en->description }}</textarea>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Mô tả (CN)<span>*</span></h4>
                                    <textarea name="cn[description]" id="" cols="30" rows="10" placeHolder="Nhập mô tả danh mục"  class="form-control" required>{{ $category->cn->description }}</textarea>
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
