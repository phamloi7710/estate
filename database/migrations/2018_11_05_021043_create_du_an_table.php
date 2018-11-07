<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDuAnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duan', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('danhmuc', array('Dự Án Đang Triển Khai', 'Dự Án Đã Triển Khai'))->default('Dự Án Đang Triển Khai');
            $table->string('title')->nullable();
            $table->string('url')->nullable();
            $table->string('image')->nullable();
            $table->text('tomtat')->nullable();
            $table->longText('gioithieu')->nullable();
            $table->longText('vitri')->nullable();
            $table->longText('thietke')->nullable();
            $table->longText('tienich')->nullable();
            $table->longText('thanhtoan')->nullable();
            $table->longText('hinhanh')->nullable();
            $table->longText('video')->nullable();
            $table->longText('lienhe')->nullable();
            $table->longText('note')->nullable();
            $table->enum('status', array('active', 'inActive'))->default('active');
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
        Schema::dropIfExists('duan');
    }
}
