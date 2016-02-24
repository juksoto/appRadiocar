<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RcCities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rc_cities', function (Blueprint $table) {
            $table->increments('id');

            // id país
            $table -> integer('country_id') -> unsigned();
            $table -> foreign('country_id') -> references('id') -> on('rc_countries') -> onDelete('cascade');

            $table -> string('city');
            $table -> boolean('active') ->default(true);

            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rc_cities');
    }
}
