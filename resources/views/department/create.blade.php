@extends('layout.master')

@section('content')
    <div class="col-md-6">
        <form id="RegisterValidation" action="{{ route('phongBans.store') }}" method="post">
            {{ csrf_field() }}
            <div class="card ">
                <div class="card-header ">
                    <h4 class="card-title">Thêm Mới Phòng Ban</h4>
                </div>
                <div class="card-body ">
                    <div class="form-group has-label">
                        <label>
                            Nhập Tên Phòng Ban
                            <star class="star">*</star>
                        </label>
                        <input class="form-control" name="ten" id="ten" type="text" required="true">
                    </div>
                    <div class="card-category form-category">
                        <star class="star">*</star>Bạn phải nhập trước khi thêm</div>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-info btn-fill pull-right">Thêm mới</button>
                    <div class="clearfix"></div>
                </div>
            </div>
        </form>
    </div>
@endsection()
