<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePredTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pred', function(Blueprint $table)
		{
			$table->integer('sifPred')->unsigned()->primary();
			$table->char('kratPred', 8)->nullable();
			$table->char('nazPred', 60);
			$table->integer('sifOrgjed')->unsigned()->nullable()->index('sifOrgjed');
			$table->integer('upisanoStud')->nullable();
			$table->integer('brojSatiTjedno')->nullable();
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
		Schema::drop('pred');
	}

}
