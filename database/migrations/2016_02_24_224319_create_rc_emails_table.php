<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRcEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rc_emails', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('email');
            // id contacto
            $table -> integer('contact_id') -> unsigned();
            $table -> foreign('contact_id') -> references('id') -> on ('rc_contacts') ->  onDelete('cascade');

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
        Schema::drop('rc_emails');
    }
}
