<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRcAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rc_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address');

            // id ciudad
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('rc_cities')->onDelete('cascade');

            // id contacto
            $table->integer('contact_id')->unsigned();
            $table->foreign('contact_id')->references('id')->on('rc_contacts')->onDelete('cascade');

            $table->boolean('active')->default(true);

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
        Schema::drop('rc_addresses');
    }
}
