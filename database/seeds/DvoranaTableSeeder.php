<?php

use Illuminate\Database\Seeder;

class DvoranaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete dvorana table records
        DB::table('dvorana')->delete();
        DB::table('dvorana')->insert(array(



            Array
            (
                'oznDvorana' => 'A001',
                'kapacitet' => '24',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'oznDvorana' => 'A002',
                'kapacitet' => '10',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'oznDvorana' => 'A101',
                'kapacitet' => '39',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'oznDvorana' => 'A102',
                'kapacitet' => '40',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'oznDvorana' => 'A104',
                'kapacitet' => '20',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'oznDvorana' => 'A105',
                'kapacitet' => '16',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'oznDvorana' => 'A111',
                'kapacitet' => '40',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'oznDvorana' => 'A201',
                'kapacitet' => '40',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'oznDvorana' => 'A202',
                'kapacitet' => '39',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'oznDvorana' => 'A204',
                'kapacitet' => '20',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'oznDvorana' => 'A205',
                'kapacitet' => '20',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'oznDvorana' => 'A209',
                'kapacitet' => '35',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'oznDvorana' => 'A210',
                'kapacitet' => '35',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'oznDvorana' => 'A211',
                'kapacitet' => '39',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'oznDvorana' => 'A301',
                'kapacitet' => '18',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'oznDvorana' => 'A302',
                'kapacitet' => '18',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'oznDvorana' => 'A304',
                'kapacitet' => '15',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'oznDvorana' => 'A309',
                'kapacitet' => '22',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'oznDvorana' => 'A310',
                'kapacitet' => '20',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'oznDvorana' => 'A311',
                'kapacitet' => '20',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'oznDvorana' => 'A312',
                'kapacitet' => '20',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'oznDvorana' => 'B1',
                'kapacitet' => '64',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'oznDvorana' => 'B2',
                'kapacitet' => '30',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'oznDvorana' => 'B3',
                'kapacitet' => '30',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'oznDvorana' => 'B4',
                'kapacitet' => '64',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'oznDvorana' => 'M2',
                'kapacitet' => '14',
                'created_at' => NULL,
                'updated_at' => NULL
            )


        ));
    }
}
