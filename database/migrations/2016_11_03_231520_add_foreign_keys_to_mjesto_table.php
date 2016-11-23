<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMjestoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mjesto', function(Blueprint $table)
		{
			$table->foreign('sifZupanija', 'mjesto_ibfk_1')->references('sifZupanija')->on('zupanija')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('mjesto', function(Blueprint $table)
		{
			$table->dropForeign('mjesto_ibfk_1');
		});
	}

}
