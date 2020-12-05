<?php

namespace App\Http\Controllers;

use App\Models\PhongBans;
use Illuminate\Http\Request;
use Session;

class PhongBansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $PhongBans = PhongBans::get();
        $login=Session::get('ten_dang_nhap');
        $login1=Session::get('img');
        return view('department.index',compact('PhongBans','login','login1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $login=Session::get('ten_dang_nhap');
        $login1=Session::get('img');
        $ma=Session::get('ma');
        return view('department.create',compact('login','login1','ma'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PhongBans::create($request->all());
        return redirect()->route('phongBans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PhongBans  $phongBans
     * @return \Illuminate\Http\Response
     */
    public function show(PhongBans $phongBans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PhongBans  $phongBans
     * @return \Illuminate\Http\Response
     */
    public function edit(PhongBans $phongBan)
    {
        $login=Session::get('ten_dang_nhap');
        $login1=Session::get('img');
        return view('department.update',compact('login','phongBan','login1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PhongBans  $phongBans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PhongBans $phongBan)
    {
        $phongBan->update($request->all());
        return redirect()->route('phongBans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PhongBans  $phongBans
     * @return \Illuminate\Http\Response
     */
    public function destroy(PhongBans $phongBan)
    {
        $phongBan->delete();
        return redirect()->route('phongBans.index');
    }
}
