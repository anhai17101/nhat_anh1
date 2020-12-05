@extends('layout.master')

@section('content')
    <div class="col-md-6">
        <div class="card stacked-form">
            <div class="card-header ">
                <h4 class="card-title">SỬA PHÒNG BAN</h4>
            </div>
            <div class="card-body ">
                <form method="POST" action="{{ route('phongBans.update',['phongBan' => $phongBan->ma]) }}">
                    {{ csrf_field() }}
                    {{method_field('PUT')}}
                    <div class="form-group">
                        <label for="ten_lop">Mã phòng ban</label>
                        <input type="text" placeholder="{{ $phongBan->ma }}" readonly value="{{ $phongBan->ma }}" class="form-control" id="ma_phong_ban" name="ma_phong_ban">
                    </div>
                    <div class="form-group">
                        <label for="ten_lop">Tên phòng ban</label>
                        <input type="text" placeholder="{{ $phongBan->ten }}" class="form-control" id="ten_phong_ban" name="ten">
                    </div>
                    <div class="card-footer ">
                        <button type="submit" class="btn btn-fill btn-info">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection()

