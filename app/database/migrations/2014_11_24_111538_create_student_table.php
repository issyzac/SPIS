<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('spis_student', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('registration_number');
            $table->integer('level_id');
            $table->integer('class_id');
            $table->integer('parent_id');
            $table->integer('class_subject_id');
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
		Schema::drop('spis_student');
	}

}
