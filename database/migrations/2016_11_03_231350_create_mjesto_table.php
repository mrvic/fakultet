<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMjestoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mjesto', function(Blueprint $table)
		{
			$table->integer('pbr')->unsigned()->primary();
			$table->char('nazMjesto', 40);
			$table->smallInteger('sifZupanija')->unsigned()->nullable()->index('sifZupanija');
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
		Schema::drop('mjesto');
	}

}
