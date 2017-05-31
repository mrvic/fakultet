<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
class CreateIspitTable extends Migration {
<<<<<<< HEAD
=======

>>>>>>> 1e2eda3b0b8a1bf59a6bfaa5a1000711ec10a14a
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('ispit', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('mbrStud')->unsigned()->index('mbrStud');
            $table->integer('sifPred')->unsigned()->index('sifPred');
<<<<<<< HEAD
            $table->integer('sifNastavnik')->unsigned()->index('sifNastavnik');
=======
            $table->integer('sifNastavnik')->index('sifNastavnik');
>>>>>>> 1e2eda3b0b8a1bf59a6bfaa5a1000711ec10a14a
            $table->dateTime('datIspit');
            $table->smallInteger('ocjena')->default(1);
            $table->timestamps();
        });
    }
<<<<<<< HEAD
=======

>>>>>>> 1e2eda3b0b8a1bf59a6bfaa5a1000711ec10a14a
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('ispit');
    }
<<<<<<< HEAD
}
=======

}
>>>>>>> 1e2eda3b0b8a1bf59a6bfaa5a1000711ec10a14a
