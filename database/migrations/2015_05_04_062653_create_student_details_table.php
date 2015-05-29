<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('student_id');
			$table->string('tel');
			$table->string('github');
			$table->string('icon');
			$table->string('photo');
			$table->text('resume');
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
		Schema::drop('student_details');
	}

}
