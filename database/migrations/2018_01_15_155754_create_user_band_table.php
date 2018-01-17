<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserBandTable extends Migration
{

    public function up()
    {
        Schema::create('user_bands', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('band_id')->unsigned();
            $table->foreign('band_id')->references('id')->on('bands');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_bands');
    }
}
