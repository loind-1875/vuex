@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
            <div class="card-header">
                <h5>Danh sách sản phẩm</h5>
            </div>
                <div class="row">
                    <div class="col-sm-12 col-xl-6 offset-xl-3">
                        <div class="card-block table-border-style">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th width="50px" align="center">#</th>
                                        <th align="center">Tên</th>
                                        <th align="center">Giá</th>
                                        <th width="100px" align="center">Thao tác</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $index => $product)
                                            <tr>
                                                <th scope="row" align="center">{{ $index + 1 }}</th>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->price }}</td>
                                                <td align="center">
                                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"></i></a>
                                                    <a href="" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </div>
    </div>
@endsection

@section('style')
    <style>
        .card {
            margin-bottom: 100px;
            padding-bottom: 50px;
        }
        th {
            text-align: center;
        }
    </style>
@endsection
