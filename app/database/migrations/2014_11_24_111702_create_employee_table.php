<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('spis_employee', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('contract');
            $table->string('salary');
            $table->string('phone_number');
            $table->string('email');
            $table->string('address');
            $table->string('academic_status');
            $table->integer('role_id');
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
		Schema::drop('spis_employee');
	}

}
