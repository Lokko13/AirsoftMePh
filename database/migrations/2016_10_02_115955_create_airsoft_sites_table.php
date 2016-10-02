<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAirsoftSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airsoft_sites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->float('longitude');
            $table->float('latitude');
            $table->integer('game_fee');
            $table->integer('host_id')->unsigned();
            $table->foreign('host_id')->references('id')->on('teams');
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
        Schema::dropIfExists('airsoft_sites');
    }
}