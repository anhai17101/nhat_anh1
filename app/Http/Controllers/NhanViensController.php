<?php

namespace App\Http\Controllers;

use App\Models\NhanViens;
use App\Models\PhongBans;
use Illuminate\Http\Request;
use Session;

class NhanViensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nhan_vien = NhanViens::with(['PhongBan'])->get();
        $login = Session::get('ten_dang_nhap');
        $login1=Session::get('img');
        return view('personal.index',compact('nhan_vien','login','login1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $phong_ban=PhongBans::get();
        $login = Session::get('ten_dang_nhap');
        $login1=Session::get('img');
        return view('personal.create',compact('login','phong_ban','login1'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        NhanViens::create($request->all());
        return redirect()->route('nhan_vien.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NhanViens  $nhanViens
     * @return \Illuminate\Http\Response
     */
    public function show(NhanViens $nhanViens)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NhanViens  $nhanViens
     * @return \Illuminate\Http\Response
     */
    public function edit(NhanViens $nhan_vien)
    {
        $phong_ban=PhongBans::get();
        $ma=Session::get('ma');
        $login=Session::get('ten_dang_nhap');
        $login1=Session::get('img');
        return view('personal.update',compact('login','nhan_vien','phong_ban','login1','ma'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NhanViens  $nhanViens
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NhanViens $nhan_vien)
    {
        $nhan_vien->update($request->all());
        return redirect()->route('nhan_vien.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NhanViens  $nhanViens
     * @return \Illuminate\Http\Response
     */
    public function destroy(NhanViens $nhan_vien)
    {
        $nhan_vien->delete();
        return redirect()->route('nhan_vien.index');
    }
}
