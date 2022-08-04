<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hang_hoa', function (Blueprint $table) {
            $table->id();
            $table->string('ten_hh',50);
            $table->double('don_gia',10,2);
            $table->integer('giam_gia');
            $table->string('hinh_hh',200);
            $table->Integer('trang_thai'); 
            $table->text('mo_ta');
            $table->unsignedInteger('id_loai');
            $table->foreign('id_loai')->references('id')->on('loaisp');
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
        Schema::dropIfExists('hang_hoa');
    }
};
