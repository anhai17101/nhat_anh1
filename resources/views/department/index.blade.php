@extends('layout.master')

@section('content')
    <button class="btn btn-secondary" style="color: white"><a href="{{ route('phongBans.create')}}">Thêm</a></button>
    <table class="table" >
        <thead>
        <tr>
            <th style="text-align: center">Mã phòng ban</th>
            <th style="text-align: center">Tên phòng ban</th>
        </tr>
        </thead>
        <tbody>
        @foreach($PhongBans as $PhongBans)
            <tr data-status="sinh_vien" data="{{ $PhongBans->ma }}">
                <td style="text-align: center">{{ $PhongBans->ma }}</td>
                <td style="text-align: center">{{ $PhongBans->ten }}</td>
                <td style="text-align: center">
                    <button class="btn btn-warning">
                        <a href="{{ route('phongBans.edit', ['phongBan' => $PhongBans -> ma]) }}">
                            Sửa
                        </a>
                    </button>
                </td>
                <td style="text-align: center">
                    <form action="{{ route('phongBans.destroy',['phongBan' => $PhongBans -> ma]) }}" method="post">
                        {{ csrf_field() }}
                        {{method_field('DELETE')}}
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection()
