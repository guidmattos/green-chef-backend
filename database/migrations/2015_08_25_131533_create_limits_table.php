<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLimitsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('limits', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('users_id')->index('fk_limits_users1_idx');
			$table->integer('hiperglycemia')->nullable();
			$table->integer('hipoglycemia')->nullable();
			$table->integer('preparandialMin')->nullable();
			$table->integer('preparandialMax')->nullable();
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
		Schema::drop('limits');
	}

}
