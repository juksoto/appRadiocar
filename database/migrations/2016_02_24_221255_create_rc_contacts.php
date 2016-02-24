<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRcContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rc_contacts', function (Blueprint $table) {
            $table -> increments('id');

            // id company
            $table -> integer('company_id') -> unsigned() -> nullable();
            $table -> foreign('company_id') -> references('id') -> on('rc_companies') -> onDelete('cascade');

            // id person
            $table -> integer('person_id') -> unsigned() -> nullable();
            $table -> foreign('person_id') -> references('id') -> on('rc_people') -> onDelete('cascade');

            // id vehiculo
            $table -> integer('user_id') -> unsigned();
            $table -> foreign('user_id') -> references('id') -> on('rc_users') -> onDelete('cascade');

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
        Schema::drop('rc_contacts');
    }
}
