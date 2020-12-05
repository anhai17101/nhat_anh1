<?php

namespace App\Http\Controllers;

use App\Models\NguoiDungs;
use Session;
use Illuminate\Http\Request;

class NguoiDungsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $login=Session::get('ten');
        $login1=Session::get('img');
        $ten_dang_nhap=Session::get('ten_dang_nhap');
        $mat_khau=Session::get('mat_khau');
        $so_dien_thoai=Session::get('so_dien_thoai');
        $dia_chi=Session::get('dia_chi');
        $ngay_sinh=Session::get('ngay_sinh');
        $ma=Session::get('ma');
        return view('user.edit',compact('login','login1','ten_dang_nhap','mat_khau','so_dien_thoai','dia_chi','ngay_sinh','ma'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NguoiDungs  $nguoiDungs
     * @return \Illuminate\Http\Response
     */
    public function show(NguoiDungs $nguoiDungs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NguoiDungs  $nguoiDungs
     * @return \Illuminate\Http\Response
     */
    public function edit(NguoiDungs $nguoi_dung)
    {
        $login=Session::get('ten');
        $login1=Session::get('img');
        $ten_dang_nhap=Session::get('ten_dang_nhap');
        $mat_khau=Session::get('mat_khau');
        $so_dien_thoai=Session::get('so_dien_thoai');
        $dia_chi=Session::get('dia_chi');
        $ngay_sinh=Session::get('ngay_sinh');
        $ma=Session::get('ma');
        return view('user.edit',compact('login','login1','ten_dang_nhap','mat_khau','so_dien_thoai','dia_chi','ngay_sinh','ma','nguoi_dung'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NguoiDungs  $nguoiDungs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NguoiDungs $nguoi_dung)
    {
        $nguoi_dung->update($request->all());
        return redirect()->route('nhan_vien.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NguoiDungs  $nguoiDungs
     * @return \Illuminate\Http\Response
     */
    public function destroy(NguoiDungs $nguoiDungs)
    {
        //
    }
}
