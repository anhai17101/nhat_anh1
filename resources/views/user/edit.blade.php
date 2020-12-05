@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="card-header no-padding">
                        <div class="card-image">
                            <img src="{{ asset('img/'.$login1)}}" alt="image-back">
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="author">
                            <a href="#">
                                <img class="avatar border-gray" src="{{ asset('img/'.$login1)}}" alt="img-poli">
                            </a>
                            <p class="card-description">
                                <h4>{{ $login }}</h4>
                            </p>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="button-container text-center">
                            <button href="#" class="btn btn-simple btn-link btn-icon">
                                <i class="fa fa-facebook-square"></i>
                            </button>
                            <button href="#" class="btn btn-simple btn-link btn-icon">
                                <i class="fa fa-twitter"></i>
                            </button>
                            <button href="#" class="btn btn-simple btn-link btn-icon">
                                <i class="fa fa-google-plus-square"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-6">
                <form class="form" method="post" action="{{ route('change')}}">
                    {{ csrf_field() }}
                    <div class="card ">
                        <div class="card-header ">
                            <div class="card-header">
                                <h4 class="card-title">Chỉnh sửa tài khoản</h4>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Tên người dùng</label>
                                        <input type="text" class="form-control" value="{{ $login }}" name="ten">
                                    </div>
                                </div>

                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên đăng nhập</label>
                                        <input type="text" class="form-control" value="{{ $ten_dang_nhap }}" name="ten_dang_nhap">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>ĐỊa chỉ</label>
                                        <input type="text" class="form-control" value="{{ $dia_chi }}" name="dia_chi">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Mật khẩu</label>
                                        <input type="password" class="form-control" value="{{ $mat_khau }}" name="mat_khau">
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <label>Số điện thoại</label>
                                        <input type="text" class="form-control" value="{{ $so_dien_thoai }}" name="so_dien_thoai">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>Postal Code</label>
                                        <input type="date" class="form-control" value="{{ $ngay_sinh }}" name="ngay_sinh">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info btn-fill pull-right">Cập nhật</button>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection()
