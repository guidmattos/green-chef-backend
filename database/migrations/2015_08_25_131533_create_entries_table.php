<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEntriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('entries', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->index('fk_entries_users1_idx');
			$table->dateTime('datetime');
			$table->string('event', 45);
			$table->integer('glucose');
			$table->integer('cho');
			$table->integer('med');
			$table->string('medType', 100);
			$table->string('notes', 500)->nullable();
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
		Schema::drop('entries');
	}

}
