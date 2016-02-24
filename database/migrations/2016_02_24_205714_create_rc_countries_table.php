<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRcCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rc_countries', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('country');
            $table -> string('iso');
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
        Schema::drop('rc_countries');
    }
}
