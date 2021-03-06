<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBandEventTable extends Migration
{

    public function up()
    {
        Schema::create('band_events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('band_id')->unsigned();
            $table->foreign('band_id')->references('id')->on('bands');
            $table->integer('event_id')->unsigned();
            $table->foreign('event_id')->references('id')->on('events');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('band_events');
    }
}
