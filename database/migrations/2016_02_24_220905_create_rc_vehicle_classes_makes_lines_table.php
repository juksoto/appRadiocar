<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRcVehicleClassesMakesLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rc_vehicle_classes_makes_lines', function (Blueprint $table) {
            $table -> increments('id');
            // id class
            $table -> integer('class_id') -> unsigned();
            $table -> foreign('class_id') -> references('id') -> on ('rc_vehicle_classes') -> onDelete('cascade');

            // id make
            $table -> integer('make_id') -> unsigned();
            $table -> foreign('make_id') -> references('id') -> on ('rc_vehicle_makes') -> onDelete('cascade');

            // id line
            $table -> integer('line_id') -> unsigned();
            $table -> foreign('line_id') -> references('id') -> on('rc_vehicle_lines') -> onDelete('cascade');

            $table -> boolean('active') ->default(true);

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
        Schema::drop('rc_vehicle_classes_makes_lines');
    }
}
