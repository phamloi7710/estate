<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateDuAn1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('duan', function (Blueprint $table) {
            $table->longText('tong_quan_index')->after('note')->nullable();
            $table->longText('vi_tri_index')->after('note')->nullable();
            $table->longText('tien_ich_index')->after('note')->nullable();
            $table->longText('thiet_ke_index')->after('note')->nullable();
            $table->longText('hinh_anh_index')->after('note')->nullable();
            $table->enum('status_home', array('active', 'inActive'))->after('status')->default('inActive');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('duan', function (Blueprint $table) {
            //
        });
    }
}
