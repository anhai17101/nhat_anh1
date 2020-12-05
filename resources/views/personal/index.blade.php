@extends('layout.master')

@section('content')
    <button class="btn btn-secondary"><a href="{{ route('nhan_vien.create')}}">Thêm</a></button>
    <table class="table">
        <thead>
        <tr>
            <th style="text-align: center">Mã nhân viên</th>
            <th style="text-align: center">Tên nhân viên</th>
            <th style="text-align: center">phòng ban</th>
        </tr>
        </thead>
        <tbody>
        @foreach($nhan_vien as $nhan_vien)
            <tr>
                <td style="text-align: center">{{ $nhan_vien->ma }}</td>
                <td style="text-align: center">{{ $nhan_vien->ten }}</td>
                <td style="text-align: center">{{ $nhan_vien->PhongBan->ten }}</td>
                <td style="text-align: center"><button class="btn btn-warning"><a href="{{ route('nhan_vien.edit',['nhan_vien' => $nhan_vien->ma]) }}">Sửa</a></button></td>

                <td style="text-align: center">
                    <form action="{{ route('nhan_vien.destroy',['nhan_vien' => $nhan_vien->ma]) }}" method="post">
                        {{ csrf_field() }}
                        {{method_field('DELETE')}}
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection();
