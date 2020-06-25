@extends('admin.layout.main')

@section('title')
    Danh sách người dùng liên hệ
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Danh sách người dùng liên hệ </h5>
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
                            @if (count($contacts))
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th width="50px" align="center">#</th>
                                        <th align="center">Tên</th>
                                        <th align="center">Email</th>
                                        <th align="center">Phone</th>
                                        <th align="center">Lời nhắn</th>
                                        <th width="100px" align="center">Thao tác</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($contacts as $index => $contact)
                                        <tr>
                                            <td scope="row" align="center">{{ $index + 1 }}</td>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->phone }}</td>
                                            <td>{{ $contact->message }}</td>
                                            <td align="center">
                                                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display: inline-block;">
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
                                    {{ $contacts->links() }}
                                </div>
                            </div>
                            @else
                                <p class="text-center"> Chưa có liên hệ nào</p>
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
