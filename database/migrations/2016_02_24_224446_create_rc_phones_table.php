<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRcPhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rc_phones', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('phone');
            // id contacto
            $table -> integer('address_id') -> unsigned() -> nullable();
            $table -> foreign('address_id') -> references('id') -> on('rc_addresses') -> onDelete('cascade');

            $table -> integer('contact_id') -> unsigned() -> nullable();
            $table -> foreign('contact_id') -> references('id') -> on('rc_contacts') -> onDelete('cascade');

            $table -> string('type_phone');
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
        Schema::drop('rc_phones');
    }
}
