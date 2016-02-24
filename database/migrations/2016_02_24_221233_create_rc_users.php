<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRcUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rc_users', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('username');
            $table -> string('password', 60);
            $table -> string('email') -> unique();

            // id role
            $table -> integer('role_id') -> unsigned();
            $table -> foreign('role_id') -> references('id') -> on ('rc_user_roles') -> onDelete('cascade');

            $table -> rememberToken();
            $table -> boolean('active')->default(true);
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
        Schema::drop('rc_users');
    }
}
