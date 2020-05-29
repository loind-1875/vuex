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
                                    <h4 class="sub-title">Tên danh mục<span>*</span></h4>
                                    <input type="text" class="form-control" name="name" placeHolder="Nhập tên danh mục" value="{{ $category->name }}" required>
                                </div>
                                <div class="col-sm-12 m-b-30">
                                    <h4 class="sub-title">Danh mục cha (Có thể rỗng)</h4>
                                    <div class="row">
                                        @foreach ($categories as $cate)
                                            <div class="col-sm-4">
                                                <div class="category-list form-radio">
                                                <div class="category-single">
                                                    <div class="radio radio-inline">
                                                        <label>
                                                            <input
                                                                type="radio"
                                                                name="parent_id"
                                                                value="{{ $cate->id }}"
                                                                {{ $cate->id === $category->parent_id ? 'checked' : '' }}
                                                            >
                                                            <i class="helper"></i>
                                                            {{ $cate->name }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

{{--                                <div class="col-sm-12 m-b-30">--}}
{{--                                    <h4 class="sub-title">Danh mục cha<span>*</span></h4>--}}
{{--                                    <div class="123">--}}
{{--                                        @foreach ($categories as $cate)--}}
{{--                                            <div class="category-list form-radio">--}}
{{--                                                <div class="category-single">--}}
{{--                                                    <div class="radio radio-inline">--}}
{{--                                                        <label>--}}
{{--                                                            <input--}}
{{--                                                                    type="radio"--}}
{{--                                                                    name="parent_id"--}}
{{--                                                                    value="{{ $cate->id }}"--}}
{{--                                                                    {{ $cate->id === $category->id ? 'checked' : '' }}--}}
{{--                                                            >--}}
{{--                                                            <i class="helper"></i>{{ $cate->name }}--}}
{{--                                                        </label>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                @foreach($cate->children as $value)--}}
{{--                                                    <div class="child-cate">--}}
{{--                                                        <div class="border-checkbox-group border-checkbox-group-primary">--}}
{{--                                                            <div class="radio radio-inline">--}}
{{--                                                                <label>--}}
{{--                                                                    <input--}}
{{--                                                                            type="radio"--}}
{{--                                                                            name="parent_id"--}}
{{--                                                                            value="{{ $value->id }}"--}}
{{--                                                                            {{ $value->id === $category->id ? 'checked' : '' }}--}}
{{--                                                                    >--}}
{{--                                                                    <i class="helper"></i>{{ $value->name }}--}}
{{--                                                                </label>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                @endforeach--}}
{{--                                            </div>--}}
{{--                                        @endforeach--}}
{{--                                    </div>--}}
{{--                                </div>--}}
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
