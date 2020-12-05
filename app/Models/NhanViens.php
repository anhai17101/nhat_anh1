<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NhanViens extends Model
{
    protected $table='nhan_viens';
    protected $primaryKey='ma';
    public $timestamps = true;
    protected $fillable =['ma_phong_ban','ten','dien_thoai','dia_chi','ngay_sinh'];
    public function PhongBan()
    {
        return $this->belongsTo('App\Models\PhongBans','ma_phong_ban');
    }
}
