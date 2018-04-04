<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbEmployeeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_employee', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->timestamps();
			$table->softDeletes();
			$table->string('created_by')->nullable();
			$table->string('updated_by')->nullable();
			$table->string('deleted_by')->nullable();
			$table->string('name');
			$table->string('username');
			$table->string('password');
			$table->smallInteger('reset_password')->nullable();
			$table->string('role', 2)->nullable();
			$table->string('phone')->nullable();
			$table->date('dob')->nullable();
			$table->string('pob')->nullable();
			$table->smallInteger('gender')->nullable();
			$table->string('religion')->nullable();
			$table->string('email')->nullable();
			$table->text('address')->nullable();
			$table->text('description')->nullable();
			$table->string('visible', 2)->nullable()->default('2');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_employee');
	}

}
