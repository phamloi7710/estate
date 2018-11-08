<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key')->unique()->nullable();
            $table->text('site_name')->nullable();
            $table->longText('phone')->nullable();
            $table->longText('email')->nullable();
            $table->longText('address')->nullable();
            $table->text('fanpage')->nullable();
            $table->text('twitter')->nullable();
            $table->text('google_plus')->nullable();
            $table->text('youtube_channel')->nullable();
            $table->text('instagram')->nullable();
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
        Schema::dropIfExists('web_info');
    }
}
