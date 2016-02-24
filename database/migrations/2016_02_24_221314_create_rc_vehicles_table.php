<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRcVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rc_vehicles', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('license')-> unique();
            $table -> string('vehicle_model') -> nullable();
            $table -> string('color') -> nullable();
            $table -> string('nro_identification') -> nullable();

            // id make
            $table -> integer('class_make_line_id') -> unsigned();
            $table -> foreign('class_make_line_id') -> references('id') -> on ('rc_vehicle_classes_makes_lines') -> onDelete('cascade');

            // id vehiculo
            $table -> integer('contact_id') -> unsigned();
            $table -> foreign('contact_id') -> references('id') -> on('rc_contacts') -> onDelete('cascade');

            $table -> boolean('active')->default(true);
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
        Schema::drop('rc_vehicles');
    }
}
