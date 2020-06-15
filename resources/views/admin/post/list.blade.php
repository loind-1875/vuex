@extends('admin.layout.main')

@section('title')
    Danh sách tin tức
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Danh sách tin tức </h5>
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
                        <div class="card-block table-border-style">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th width="50px" align="center">#</th>
                                        <th align="center">Tiêu đề</th>
                                        <th width="100px" align="center">Thao tác</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($news as $index => $new)
                                        <tr>
                                            <td scope="row" align="center">{{ $index + 1 }}</td>
                                            <td>{{ $new->title }}</td>
                                            <td align="center">
                                                <a href="{{ route('posts.edit', $new->id) }}" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                <form action="{{ route('posts.destroy', $new->id) }}" method="POST" style="display: inline-block;">
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
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="m-t-15">
                                    {{ $news->links() }}
                                </div>
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
