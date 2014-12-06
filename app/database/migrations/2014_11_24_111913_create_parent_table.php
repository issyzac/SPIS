<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('spis_parent', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('other_name');
            $table->string('address');
            $table->string('phone_number');
            $table->string('occupation');
            $table->string('relationship');
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
		Schema::drop('spis_parent');
	}

}
