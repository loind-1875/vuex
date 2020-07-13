@extends('admin.layout.main')

@section('title')
    Danh sách sản phẩm
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
            <div class="card-header">
                <h5>Danh sách sản phẩm</h5>
            </div>
                <div class="row">
                    <div class="col-sm-12 p-30">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xl-12">
                         <div class="pl-4">
                                <a href="{{ route('products.create') }}" class="btn btn-primary">Thêm mới</a>
                        </div>
                        <div class="card-block table-border-style">
                            @if (count($products))
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th width="50px" align="center">#</th>
                                            <th align="center">Tên</th>
                                            <th width="50px" align="center">Sao</th>
                                            <th align="center">Danh mục</th>
                                            <th width="100px" align="center">Thao tác</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $index => $product)
                                                <tr>
                                                    <td scope="row" align="center">{{ $index + 1 }}</td>
                                                    <td>{{ $product->name }}</td>
                                                    <td>{{ $product->star }}</td>
                                                    <td>
                                                        @foreach ($product->categories as $cate)
                                                            <span>{{ $cate->name }}</span>
                                                            @if (!$loop->last),@endif
                                                        @endforeach
                                                    </td>
                                                    <td align="center">
                                                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-pencil-square-o"></i>
                                                        </a>
                                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button
                                                                class="btn btn-danger btn-sm"
                                                                type="submit"
                                                                onclick="return confirm(' Bạn có chắc chắn?');"
                                                            >
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </form>
                                                        <a target="_blank" href="{{ route('client.product', parseLink($product)) }}" class="btn btn-success btn-sm">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="m-t-15">
                                        {{ $products->links() }}
                                    </div>
                                </div>
                            @else
                                <p class="text-center">Không có sản phẩm nào</p>
                            @endif
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
        .button-page .card-block a {
            margin-bottom: 0;
        }
        tr {
            line-height: 32px;
        }
        .button-page .btn {
            margin-bottom: 0;
        }
    </style>
@endsection
