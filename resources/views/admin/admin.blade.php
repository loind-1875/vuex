@extends('admin.layout.main')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card prod-p-card card-red">
                <div class="card-body">
                    <div class="row align-items-center m-b-30">
                        <div class="col">
                            <h6 class="m-b-5 text-white">Tổng số sản phẩm</h6>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-product-hunt text-c-red f-18"></i>
                        </div>
                    </div>
                    <h3 class="m-b-0 f-w-700 text-white text-center">{{ $countProduct }}</h3>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card prod-p-card card-blue">
                <div class="card-body">
                    <div class="row align-items-center m-b-30">
                        <div class="col">
                            <h6 class="m-b-5 text-white">Tổng số danh mục</h6>
                        </div>
                        <div class="col-auto">
                            <i class="feather icon-package text-c-blue f-18"></i>
                        </div>
                    </div>
                    <h3 class="m-b-0 f-w-700 text-white text-center">{{ $countCate }}</h3>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card prod-p-card card-green">
                <div class="card-body">
                    <div class="row align-items-center m-b-30">
                        <div class="col">
                            <h6 class="m-b-5 text-white">Tổng số tin tức</h6>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-newspaper-o text-c-green f-18"></i>
                        </div>
                    </div>
                    <h3 class="m-b-0 f-w-700 text-white text-center">{{ $countNews }}</h3>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card prod-p-card card-yellow">
                <div class="card-body">
                    <div class="row align-items-center m-b-30">
                        <div class="col">
                            <h6 class="m-b-5 text-white">Tổng số tin tuyển dụng</h6>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-bullhorn text-c-yellow f-18"></i>
                        </div>
                    </div>
                    <h3 class="m-b-0 f-w-700 text-white text-center">{{ $countRec }}</h3>
                </div>
            </div>
        </div>
    </div>
@endsection
