<?php
/**
 *
 * POKRENI SA:
 * vagrant@homestead:~/Code/blog$ php artisan db:seed
 */
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call(ZupanijaTableSeeder::class);
        $this->call(MjestoTableSeeder::class);
        $this->call(StudTableSeeder::class);
        $this->call(OrgJedTableSeeder::class);
        $this->call(NastavnikTableSeeder::class);
        $this->call(PredTableSeeder::class);
        $this->call(IspitTableSeeder::class);
        $this->call(DvoranaTableSeeder::class);
    }
}
