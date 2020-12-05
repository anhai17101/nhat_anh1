<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNguoiDungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguoi_dungs', function (Blueprint $table) {
            $table->increments('ma');
            $table->integer('ma_cap_do')->unsigned();
            $table->string('ten');
            $table->string('ten_dang_nhap');
            $table->string('mat_khau');
            $table->string('anh_bia');
            $table->integer('so_dien_thoai');
            $table->string('dia_chi');
            $table->date('ngay_sinh');
            $table->foreign('ma_cap_do')->references('ma')->on('cap_dos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nguoi_dungs');
    }
}
