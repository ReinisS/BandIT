<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBandTable extends Migration
{

    public function up()
    {
        Schema::create('bands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->text('privateinfo');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bands');
    }
}
