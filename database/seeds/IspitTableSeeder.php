<?php

use Illuminate\Database\Seeder;

class IspitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::table('ispit')->delete();
     factory(\Fakultet\Ispit::class, 639)->create();
    }
}
