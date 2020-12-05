@extends('layout.master')

@section('content')
    <div class="col-md-6">
        <div class="card stacked-form">
            <div class="card-header ">
                <h4 class="card-title">CẬP NHẬT NHÂN VIÊN</h4>
            </div>
            <div class="card-body ">
                <form method="POST" action="{{ route('nhan_vien.update',['nhan_vien' => $nhan_vien->ma]) }}">
                    {{ csrf_field() }}
                    {{method_field('PUT')}}
                    <div class="form-group">
                        <label for="ma_nhan_vien">Mã nhân viên</label>
                        <input type="text" placeholder="{{ $nhan_vien->ma }}" readonly value="{{ $nhan_vien->ma }}" class="form-control" id="ma_nhan_vien" name="ma">
                    </div>
                    <div class="form-group">
                        <label for="ten">Tên nhân viên</label>
                        <input type="text" value="{{ $nhan_vien->ten }}" class="form-control" id="ten" name="ten">
                    </div>
                    <div class="form-group">
                        <label for="dien_thoai">Điện thoại</label>
                        <input type="text" value="{{ $nhan_vien->dien_thoai }}" class="form-control" id="dien_thoai" name="dien_thoai">
                    </div>
                    <div class="form-group">
                        <label for="dia_chi">Địa chỉ</label>
                        <input type="text" value="{{ $nhan_vien->dia_chi }}" class="form-control" id="dia_chi" name="dia_chi">
                    </div>
                    <div class="form-group">
                        <label for="ngay_sinh">Ngày sinh</label>
                        <input type="date" value="{{ $nhan_vien->ngay_sinh }}" class="form-control" id="ngay_sinh" name="ngay_sinh">
                    </div>
                    <div class="form-group">
                        <label for="ma_phong_ban">Tên phòng ban</label>
                        <select name="ma_phong_ban" class="form-control">
                            @foreach($phong_ban as $phong_ban)
                                <option value="{{ $phong_ban->ma }}">{{ $phong_ban->ten }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="card-footer ">
                        <button type="submit" class="btn btn-fill btn-info">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection()

