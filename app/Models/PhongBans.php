<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhongBans extends Model
{
    protected $table='phong_bans';
    protected $primaryKey='ma';
    public $timestamps = true;
    protected $fillable =['ten'];

    public function NhanVien()
    {
        return $this->hasMany('App\Models\NhanViens');
    }
}
