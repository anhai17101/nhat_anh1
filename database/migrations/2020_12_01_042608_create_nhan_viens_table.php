<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanViensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhan_viens', function (Blueprint $table) {
            $table->increments('ma');
            $table->integer('ma_phong_ban')->unsigned();
            $table->string('ten');
            $table->integer('dien_thoai');
            $table->string('dia_chi');
            $table->date('ngay_sinh');
            $table->foreign('ma_phong_ban')->references('ma')->on('phong_bans');
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
        Schema::dropIfExists('nhan_viens');
    }
}
