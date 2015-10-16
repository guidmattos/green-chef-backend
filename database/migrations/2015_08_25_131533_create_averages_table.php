<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAveragesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('averages', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->index('fk_averages_users1_idx');
			$table->dateTime('datetime');
			$table->integer('glucoseAverage');
			$table->integer('medicationAverage');
			$table->integer('choAverage');
			$table->integer('totalEntries');
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
		Schema::drop('averages');
	}

}
