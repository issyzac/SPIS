<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('spis_result', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('student_id');
            $table->string('marks');
            $table->integer('term');
            $table->integer('subject_id');
            $table->integer('level_id');
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
		Schema::drop('spis_result');
	}

}
