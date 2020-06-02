@extends('admin.layout.main')

@section('title')

@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Cài đặt tài khoản</h5>
                </div>
                <div class="card-block">
                    <div class="row">
                        <div class="col-sm-12 col-xs-6 m-b-30">
                            <div class="col-sm-12 p-30">
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                            </div>
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
                    <form id="second" action="{{ route('update.setting') }}" method="post" novalidate="">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ Auth::user()->email }}">
                                <span class="messages popover-valid"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tên</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Tên" value="{{ Auth::user()->name }}">
                                <span class="messages popover-valid"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2">Thay đổi mật khẩu</label>
                            <div class="col-sm-10 border-checkbox-section">
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="change_pass" id="change-pass">
                                    <label class="border-checkbox-label" for="change-pass"></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Mật khẩu cũ</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control password" id="password" name="current_password" placeholder="Nhập mật khẩu cũ">
                                <span class="messages popover-valid"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Mật khẩu mới</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control password" id="new-password" name="new_password" placeholder="Nhập mật khẩu mới">
                                <span class="messages popover-valid"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nhập lại mật khẩu</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control password" id="re-password" name="new_confirm_password" placeholder="Nhập lại mật khẩu">
                                <span class="messages popover-valid"></span>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2"></label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary m-b-0">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('style')
    <style>
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
@section('script')
    <script>
        changePass();
        $('#change-pass').click(function () {
            changePass();
        })

        function changePass() {
            if (!$('#change-pass').is(':checked')) {
                $('.password').attr('disabled', 'disabled');
            } else {
                $('.password').removeAttr('disabled');
            }
        }
    </script>
@endsection
