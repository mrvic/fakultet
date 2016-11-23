<?php

use Illuminate\Database\Seeder;

class ZupanijaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete zupanija table records
        DB::table('zupanija')->delete();
        DB::table('zupanija')->insert(array(



        Array
        (
            'sifZupanija' => '0',
            'nazZupanija' => 'Nepoznata županija',


            'created_at' => NULL,
            'updated_at' => NULL
        ),
Array
(
    'sifZupanija' => '1',
    'nazZupanija' => 'Zagrebačka',


    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifZupanija' => '2',
    'nazZupanija' => 'Krapinsko-zagorska',


    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifZupanija' => '3',
    'nazZupanija' => 'Sisačko-moslavačka',


    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifZupanija' => '4',
    'nazZupanija' => 'Karlovačka',


    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifZupanija' => '5',
    'nazZupanija' => 'Varaždinska',


    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifZupanija' => '6',
    'nazZupanija' => 'Koprivničko-križevačka',


    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifZupanija' => '7',
    'nazZupanija' => 'Bjelovarsko-bilogorska',


    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifZupanija' => '8',
    'nazZupanija' => 'Primorsko-goranska',


    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifZupanija' => '9',
    'nazZupanija' => 'Ličko-senjska',


    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifZupanija' => '10',
    'nazZupanija' => 'Virovitičko-podravska',


    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifZupanija' => '11',
    'nazZupanija' => 'Požeško-slavonska',


    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifZupanija' => '12',
    'nazZupanija' => 'Brodsko-posavska',


    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifZupanija' => '13',
    'nazZupanija' => 'Zadarska',


    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifZupanija' => '14',
    'nazZupanija' => 'Osječko-baranjska',


    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifZupanija' => '15',
    'nazZupanija' => 'Šibensko-kninska',


    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifZupanija' => '16',
    'nazZupanija' => 'Vukovarsko-srijemska',


    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifZupanija' => '17',
    'nazZupanija' => 'Splitsko-dalmatinska',


    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifZupanija' => '18',
    'nazZupanija' => 'Istarska',


    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifZupanija' => '19',
    'nazZupanija' => 'Dubrovačko-neretvanska',


    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifZupanija' => '20',
    'nazZupanija' => 'Međimurska',


    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifZupanija' => '21',
    'nazZupanija' => 'Grad Zagreb',


    'created_at' => NULL,
    'updated_at' => NULL
)

        ));
    }
}
