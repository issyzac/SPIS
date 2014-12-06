<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spis_users', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('username');
            $table->integer('employee_id');
            $table->string('password');
            $table->string('remember_token');
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
        Schema::drop('spis_users');
    }

}
