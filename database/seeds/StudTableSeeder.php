<?php

/**
 * migrciju pokreni sa:
 * vagrant@homestead:~/Code/blog$ php artisan db:seed
 */
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class StudTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //delete stud table records
        DB::table('stud')->delete();
        DB::update("ALTER TABLE stud AUTO_INCREMENT = 1000;");
        factory(\Fakultet\Stud::class, 302)->create();
}}