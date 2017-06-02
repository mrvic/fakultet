<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
class AddForeignKeysToNastavnikTable extends Migration {
<<<<<<< HEAD

=======
>>>>>>> 6def43cf2b0f328ede020b54b9b076de537492ea
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('nastavnik', function(Blueprint $table) {
            $table->foreign('pbrStan', 'nastavnik_ibfk_1')
                    ->references('pbr')
                    ->on('mjesto')
                    ->onUpdate('RESTRICT')
                    ->onDelete('RESTRICT');
            
            $table->foreign('sifOrgjed', 'nastavnik_ibfk_2')
                    ->references('sifOrgjed')
                    ->on('orgjed')
                    ->onUpdate('RESTRICT')
                    ->onDelete('RESTRICT');
        });
    }
<<<<<<< HEAD

=======
>>>>>>> 6def43cf2b0f328ede020b54b9b076de537492ea
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('nastavnik', function(Blueprint $table) {
            $table->dropForeign('nastavnik_ibfk_1');
            $table->dropForeign('nastavnik_ibfk_2');
        });
    }
<<<<<<< HEAD

}
=======
}
>>>>>>> 6def43cf2b0f328ede020b54b9b076de537492ea
