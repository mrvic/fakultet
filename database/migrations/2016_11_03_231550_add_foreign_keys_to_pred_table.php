<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPredTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pred', function(Blueprint $table)
		{
			$table->foreign('sifOrgjed', 'pred_ibfk_1')->references('sifOrgjed')->on('orgjed')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pred', function(Blueprint $table)
		{
			$table->dropForeign('pred_ibfk_1');
		});
	}

}
