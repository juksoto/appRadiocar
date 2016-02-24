<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRcAlertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rc_alerts', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('title')-> nullable();
            $table -> dateTime('date_start') -> nullable();
            $table -> dateTime('date_finished') -> nullable();
            $table -> string('remember') -> nullable();
            $table -> mediumText('short_description') -> nullable();
            $table -> longText('observations') -> nullable();

            // id make
            $table -> integer('vehicle_id') -> unsigned();
            $table -> foreign('vehicle_id') -> references('id') -> on ('rc_vehicles') -> onDelete('cascade');

            // id work
            $table -> integer('work_id') -> unsigned();
            $table -> foreign('work_id') -> references('id') -> on ('rc_works') -> onDelete('cascade');

            // id work
            $table -> integer('user_id') -> unsigned();
            $table -> foreign('user_id') -> references('id') -> on ('rc_users') -> onDelete('cascade');

            // id alerts type
            $table -> integer('type_alert_id') -> unsigned();
            $table -> foreign('type_alert_id') -> references('id') -> on ('rc_alert_types') -> onDelete('cascade');


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
        Schema::drop('rc_alerts');
    }
}
