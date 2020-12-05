<?php


namespace App\Http\Controllers;
use App\Models\login;
use App\Models\NguoiDungs;
use App\Models\NhanViens;
use Illuminate\Http\Request;
use Session;
use DB;
use App\Quotation;



class loginController
{
    public function login_index(){
        return view('login.login_index');
    }

    public function change(Request $request){
        $login=Session::get('ten');
        $ma=Session::get('ma');
        $login1=Session::get('img');
        $ten_dang_nhap=Session::get('ten_dang_nhap');
        $mat_khau=Session::get('mat_khau');
        $so_dien_thoai=Session::get('so_dien_thoai');
        $dia_chi=Session::get('dia_chi');
        $ngay_sinh=Session::get('ngay_sinh');
        try{
            $updateData = \DB::table('nguoi_dungs')->where('ma','=', $ma)->update([
                'ten' => $request->ten,
                'ten_dang_nhap' => $request->ten_dang_nhap,
                'mat_khau' => $request->mat_khau,
                'so_dien_thoai' => $request->so_dien_thoai,
                'dia_chi' => $request->dia_chi,
                'ngay_sinh' => $request->ngay_sinh,
                'updated_at' => date('Y-m-d H:i:s')
            ]);
            $login=$request->ten;
            $ten_dang_nhap=$request->ten_dang_nhap;
            $mat_khau=$request->mat_khau;
            $so_dien_thoai=$request->so_dien_thoai;
            $dia_chi=$request->dia_chi;
            $ngay_sinh=$request->ngay_sinh;
            return view('user.index',compact('login','login1','ten_dang_nhap','mat_khau','so_dien_thoai','dia_chi','ngay_sinh','ma'));

        }catch (\Exception $e){
            return redirect()->back()->with('error','không thể sửa');
        }




    }
    public function qtydisc(Request $request){
        $ref =$request->get('data_check');
        $respon=NhanViens::with('PhongBan')->where('ma','=',$ref)->get();
        return json_decode($respon);
    }
    public function search(Request $request){
        $ref = NhanViens::with('PhongBan')->where('ten','like',$request->get('text')."%")->get();
        return json_decode($ref);
    }
    public function logout(){
        return redirect()->route('login');
    }
    public function accset(Request $request){
        try{
            $login = login::where([
                'ten_dang_nhap' => $request->email,
                'mat_khau' => $request->pass,
            ])->firstOrFail();

            Session::put('ten',$login->ten);
            Session::put('ten_dang_nhap',$login->ten_dang_nhap);
            Session::put('mat_khau',$login->mat_khau);
            Session::put('so_dien_thoai',$login->so_dien_thoai);
            Session::put('dia_chi',$login->dia_chi);
            Session::put('ngay_sinh',$login->ngay_sinh);
            Session::put('ma',$login->ma);
            Session::put('img',$login->anh_bia);

            $login=Session::get('ten');
            $ma=Session::get('ma');
            $login1=Session::get('img');
            $ten_dang_nhap=Session::get('ten_dang_nhap');
            $mat_khau=Session::get('mat_khau');
            $so_dien_thoai=Session::get('so_dien_thoai');
            $dia_chi=Session::get('dia_chi');
            $ngay_sinh=Session::get('ngay_sinh');
            return view('user.index',compact('login','login1','ten_dang_nhap','mat_khau','so_dien_thoai','dia_chi','ngay_sinh','ma'));


        }catch (\Exception $e){
            return redirect()->back()->with('error','Bạn đã nhập sai tài khoản hoặc mật khẩu');
        }
    }
}
