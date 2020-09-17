@extends('admin.layout.main')

@section('title')
    Danh sách sản phẩm
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Danh sách danh mục</h5>
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
                                <a href="{{ route('categories.create') }}" class="btn btn-primary">Thêm mới</a>
                        </div>
                        <div class="card-block table-border-style">
                            @if (count($categories))
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover" id="datatable">
                                        <thead>
                                        <tr>
                                            <th width="50px" align="center">#</th>
                                            <th align="center">Tên</th>
                                            <th width="180px" align="center">Thao tác</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($categories as $index => $category)
                                            <tr>
                                                <td scope="row" align="center">{{ $index + 1 }}</td>
                                                <td>{{ $category->name }}</td>
                                                <td align="center">
                                                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm">
                                                        <i class="fa fa-pencil-square-o"></i>
                                                    </a>
                                                    @if (!in_array($category->id, [1, 2]))
                                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline-block;">
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
                                                    @endif
                                                    <a target="_blank" href="{{ route('client.category', parseLink($category)) }}" class="btn btn-success btn-sm">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="m-t-15">
                                        {{ $categories->links() }}
                                    </div>
                                </div>
                            @else
                                <p class="text-center">Không có danh mục nào</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('style')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
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

@section('script')
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#datatable').DataTable();
        });
    </script>
@endsection
