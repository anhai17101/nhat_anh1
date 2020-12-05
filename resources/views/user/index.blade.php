@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6">
                    <div class="card ">
                        <div class="card-header ">
                            <div class="card-header">
                                <h4 class="card-title">Thông Tin Cá Nhân</h4>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Tên Người Dùng</label>
                                        <input type="text" class="form-control" value="{{ $login }}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-3 px-1">
                                    <div class="form-group">
                                        <label>Tên Đăng Nhập</label>
                                        <input type="text" class="form-control" readonly value="{{ $ten_dang_nhap }}">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Số Điện Thoại</label>
                                        <input type="text" class="form-control" readonly value="{{ $so_dien_thoai }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Địa Chỉ</label>
                                        <input type="text" class="form-control" readonly value="{{ $dia_chi }}">
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Ngày Sinh</label>
                                        <input type="date" class="form-control" readonly value="{{ $ngay_sinh }}">
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="card-header no-padding">
                        <div class="card-image">
                            <img src="{{ asset('img/'.$login1) }}" alt="...">
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="author">
                            <a href="#">
                                <img class="avatar border-gray" src="{{ asset('img/'.$login1) }}" alt="...">
                                <h5 class="card-title">{{ $login }}</h5>
                            </a>
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
        </div>
    </div>
@endsection()
