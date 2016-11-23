<?php

use Illuminate\Database\Seeder;

class NastavnikTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete nastavnik table records
        DB::table('nastavnik')->delete();
        DB::table('nastavnik')->insert(array(



            Array
            (
                'sifNastavnik' => '122',
                'imeNastavnik' => 'Tin',
                'prezNastavnik' => 'Grabovac',
                'pbrStan' => '49000',
                'sifOrgjed' => '100005',
                'koef' => '5.90',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '126',
                'imeNastavnik' => 'Zdravko',
                'prezNastavnik' => 'Budišin',
                'pbrStan' => '53000',
                'sifOrgjed' => '100006',
                'koef' => '6.30',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '130',
                'imeNastavnik' => 'Antun Ivan',
                'prezNastavnik' => 'Jonjić',
                'pbrStan' => '10000',
                'sifOrgjed' => '100007',
                'koef' => '6.70',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '134',
                'imeNastavnik' => 'Želimir',
                'prezNastavnik' => 'Somrak',
                'pbrStan' => '33000',
                'sifOrgjed' => '100025',
                'koef' => '7.10',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '138',
                'imeNastavnik' => 'David',
                'prezNastavnik' => 'Petković',
                'pbrStan' => '35000',
                'sifOrgjed' => '100009',
                'koef' => '7.50',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '142',
                'imeNastavnik' => 'Alan',
                'prezNastavnik' => 'Ostojčić',
                'pbrStan' => '10000',
                'sifOrgjed' => '100010',
                'koef' => '7.90',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '146',
                'imeNastavnik' => 'Franjo',
                'prezNastavnik' => 'Vidaković',
                'pbrStan' => '20000',
                'sifOrgjed' => '100011',
                'koef' => '8.30',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '150',
                'imeNastavnik' => 'Ana',
                'prezNastavnik' => 'Kukec',
                'pbrStan' => '20000',
                'sifOrgjed' => '100001',
                'koef' => '8.70',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '154',
                'imeNastavnik' => 'Žarko',
                'prezNastavnik' => 'Dubinko',
                'pbrStan' => '10000',
                'sifOrgjed' => '100002',
                'koef' => '9.10',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '158',
                'imeNastavnik' => 'Davorka',
                'prezNastavnik' => 'Volarić',
                'pbrStan' => '10000',
                'sifOrgjed' => '100003',
                'koef' => '9.50',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '162',
                'imeNastavnik' => 'Želimir',
                'prezNastavnik' => 'Prester',
                'pbrStan' => '34550',
                'sifOrgjed' => '100004',
                'koef' => '9.90',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '166',
                'imeNastavnik' => 'Nino',
                'prezNastavnik' => 'Lipec',
                'pbrStan' => '10000',
                'sifOrgjed' => '100005',
                'koef' => '3.30',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '171',
                'imeNastavnik' => 'Dinko',
                'prezNastavnik' => 'Žubrinić',
                'pbrStan' => '10000',
                'sifOrgjed' => '100006',
                'koef' => '4.50',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '175',
                'imeNastavnik' => 'Željko',
                'prezNastavnik' => 'Kovačević',
                'pbrStan' => '10000',
                'sifOrgjed' => '100007',
                'koef' => '4.90',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '179',
                'imeNastavnik' => 'Adrijan',
                'prezNastavnik' => 'Dugonjić',
                'pbrStan' => '21000',
                'sifOrgjed' => '100008',
                'koef' => '5.30',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '183',
                'imeNastavnik' => 'Dino',
                'prezNastavnik' => 'Parlov',
                'pbrStan' => '21000',
                'sifOrgjed' => '100025',
                'koef' => '5.70',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '187',
                'imeNastavnik' => 'Gordana',
                'prezNastavnik' => 'Hočevar',
                'pbrStan' => '10000',
                'sifOrgjed' => '100025',
                'koef' => '3.10',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '191',
                'imeNastavnik' => 'Davorka',
                'prezNastavnik' => 'Vidović',
                'pbrStan' => '10000',
                'sifOrgjed' => '100011',
                'koef' => '3.50',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '195',
                'imeNastavnik' => 'Lovre',
                'prezNastavnik' => 'Đeri',
                'pbrStan' => '20000',
                'sifOrgjed' => '100001',
                'koef' => '3.90',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '199',
                'imeNastavnik' => 'Marko',
                'prezNastavnik' => 'Pepelnjak',
                'pbrStan' => '10000',
                'sifOrgjed' => '100026',
                'koef' => '4.30',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '203',
                'imeNastavnik' => 'Ivana',
                'prezNastavnik' => 'Sokol',
                'pbrStan' => '10000',
                'sifOrgjed' => '100003',
                'koef' => '4.70',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '207',
                'imeNastavnik' => 'Mijo',
                'prezNastavnik' => 'Marović',
                'pbrStan' => '51000',
                'sifOrgjed' => '100004',
                'koef' => '5.10',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '211',
                'imeNastavnik' => 'Julija',
                'prezNastavnik' => 'Studen',
                'pbrStan' => '10000',
                'sifOrgjed' => '100026',
                'koef' => '5.50',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '215',
                'imeNastavnik' => 'Petar',
                'prezNastavnik' => 'Kruljac',
                'pbrStan' => '33000',
                'sifOrgjed' => '100006',
                'koef' => '5.90',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '220',
                'imeNastavnik' => 'Katarina',
                'prezNastavnik' => 'Glavaš',
                'pbrStan' => '10000',
                'sifOrgjed' => '100007',
                'koef' => '7.10',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '224',
                'imeNastavnik' => 'Lovro',
                'prezNastavnik' => 'Martinović',
                'pbrStan' => '10000',
                'sifOrgjed' => '100008',
                'koef' => '7.50',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '228',
                'imeNastavnik' => 'Renata',
                'prezNastavnik' => 'Santo',
                'pbrStan' => '22000',
                'sifOrgjed' => '100009',
                'koef' => '7.90',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '232',
                'imeNastavnik' => 'Dubravko',
                'prezNastavnik' => 'Josipović',
                'pbrStan' => '10000',
                'sifOrgjed' => '100010',
                'koef' => '8.30',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '236',
                'imeNastavnik' => 'Robert',
                'prezNastavnik' => 'Pavlović',
                'pbrStan' => '20000',
                'sifOrgjed' => '100011',
                'koef' => '8.70',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '240',
                'imeNastavnik' => 'Želimir',
                'prezNastavnik' => 'Bereček',
                'pbrStan' => '21000',
                'sifOrgjed' => '100025',
                'koef' => '9.10',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '244',
                'imeNastavnik' => 'Zlatko',
                'prezNastavnik' => 'Tomašek',
                'pbrStan' => '10000',
                'sifOrgjed' => '100002',
                'koef' => '9.50',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '248',
                'imeNastavnik' => 'Sandra',
                'prezNastavnik' => 'Stanojević',
                'pbrStan' => '31410',
                'sifOrgjed' => '100003',
                'koef' => '9.90',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '252',
                'imeNastavnik' => 'Edita',
                'prezNastavnik' => 'Pavić',
                'pbrStan' => '21265',
                'sifOrgjed' => '100025',
                'koef' => '3.30',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '256',
                'imeNastavnik' => 'Sanja',
                'prezNastavnik' => 'Watz',
                'pbrStan' => '10000',
                'sifOrgjed' => '100005',
                'koef' => '3.70',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '260',
                'imeNastavnik' => 'Božidar',
                'prezNastavnik' => 'Došen',
                'pbrStan' => '21275',
                'sifOrgjed' => '100006',
                'koef' => '4.10',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '264',
                'imeNastavnik' => 'Marko',
                'prezNastavnik' => 'Kovačević',
                'pbrStan' => '10000',
                'sifOrgjed' => '100007',
                'koef' => '4.50',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '269',
                'imeNastavnik' => 'Marija',
                'prezNastavnik' => 'Novokmet',
                'pbrStan' => '32000',
                'sifOrgjed' => '100008',
                'koef' => '5.70',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '273',
                'imeNastavnik' => 'Davor',
                'prezNastavnik' => 'Režan',
                'pbrStan' => '10000',
                'sifOrgjed' => '100009',
                'koef' => '3.10',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '277',
                'imeNastavnik' => 'Silvije',
                'prezNastavnik' => 'Szekeres',
                'pbrStan' => '21000',
                'sifOrgjed' => '100010',
                'koef' => '3.50',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '281',
                'imeNastavnik' => 'Dubravko',
                'prezNastavnik' => 'Kirinčić',
                'pbrStan' => '10000',
                'sifOrgjed' => '100011',
                'koef' => '3.90',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '285',
                'imeNastavnik' => 'Iva',
                'prezNastavnik' => 'Frančišković',
                'pbrStan' => '10000',
                'sifOrgjed' => '100001',
                'koef' => '4.30',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '289',
                'imeNastavnik' => 'Marina',
                'prezNastavnik' => 'Carek',
                'pbrStan' => '10000',
                'sifOrgjed' => '100002',
                'koef' => '4.70',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '293',
                'imeNastavnik' => 'Mirna',
                'prezNastavnik' => 'Rakić',
                'pbrStan' => '21000',
                'sifOrgjed' => '100025',
                'koef' => '5.10',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '297',
                'imeNastavnik' => 'Alen',
                'prezNastavnik' => 'Pisac',
                'pbrStan' => '10000',
                'sifOrgjed' => '100004',
                'koef' => '5.50',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '301',
                'imeNastavnik' => 'Stanislav',
                'prezNastavnik' => 'Krznarić',
                'pbrStan' => '10000',
                'sifOrgjed' => '100005',
                'koef' => '5.90',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '305',
                'imeNastavnik' => 'Nikolina',
                'prezNastavnik' => 'Horvat',
                'pbrStan' => '31000',
                'sifOrgjed' => '100006',
                'koef' => '6.30',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '309',
                'imeNastavnik' => 'Lovre',
                'prezNastavnik' => 'Rožić',
                'pbrStan' => '35000',
                'sifOrgjed' => '100007',
                'koef' => '6.70',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '313',
                'imeNastavnik' => 'Marko',
                'prezNastavnik' => 'Trajbar',
                'pbrStan' => '43000',
                'sifOrgjed' => '100008',
                'koef' => '7.10',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '318',
                'imeNastavnik' => 'Nino',
                'prezNastavnik' => 'Gvozdić',
                'pbrStan' => '10000',
                'sifOrgjed' => '100009',
                'koef' => '8.30',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '322',
                'imeNastavnik' => 'Ana',
                'prezNastavnik' => 'Juretić',
                'pbrStan' => '32000',
                'sifOrgjed' => '100025',
                'koef' => '8.70',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '326',
                'imeNastavnik' => 'Sunčica',
                'prezNastavnik' => 'Pleško',
                'pbrStan' => '34000',
                'sifOrgjed' => '100011',
                'koef' => '9.10',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '330',
                'imeNastavnik' => 'Vinko',
                'prezNastavnik' => 'Kecman',
                'pbrStan' => '10000',
                'sifOrgjed' => '100001',
                'koef' => '9.50',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '334',
                'imeNastavnik' => 'Sandra',
                'prezNastavnik' => 'Mihaljević',
                'pbrStan' => '10000',
                'sifOrgjed' => '100002',
                'koef' => '9.90',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '338',
                'imeNastavnik' => 'Petar',
                'prezNastavnik' => 'Petrović',
                'pbrStan' => '20000',
                'sifOrgjed' => '100026',
                'koef' => '3.30',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '342',
                'imeNastavnik' => 'Tin',
                'prezNastavnik' => 'Mandić',
                'pbrStan' => '10000',
                'sifOrgjed' => '100004',
                'koef' => '3.70',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '346',
                'imeNastavnik' => 'Anđelko',
                'prezNastavnik' => 'Puzak',
                'pbrStan' => '48260',
                'sifOrgjed' => '100025',
                'koef' => '4.10',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '350',
                'imeNastavnik' => 'Vjeran',
                'prezNastavnik' => 'Kovačić',
                'pbrStan' => '10000',
                'sifOrgjed' => '100006',
                'koef' => '4.50',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '354',
                'imeNastavnik' => 'Tamara',
                'prezNastavnik' => 'Križanić',
                'pbrStan' => '10000',
                'sifOrgjed' => '100007',
                'koef' => '4.90',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '358',
                'imeNastavnik' => 'Aljoša',
                'prezNastavnik' => 'Marijanić',
                'pbrStan' => '31000',
                'sifOrgjed' => '100008',
                'koef' => '5.30',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '362',
                'imeNastavnik' => 'Tanja',
                'prezNastavnik' => 'Crnić',
                'pbrStan' => '34000',
                'sifOrgjed' => '100009',
                'koef' => '5.70',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '367',
                'imeNastavnik' => 'Tanja',
                'prezNastavnik' => 'Petrović',
                'pbrStan' => '10000',
                'sifOrgjed' => '100010',
                'koef' => '3.90',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '371',
                'imeNastavnik' => 'Božidar',
                'prezNastavnik' => 'Mužar',
                'pbrStan' => '10000',
                'sifOrgjed' => '100011',
                'koef' => '4.30',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '375',
                'imeNastavnik' => 'Tina',
                'prezNastavnik' => 'Švaljek',
                'pbrStan' => '10000',
                'sifOrgjed' => '100001',
                'koef' => '4.70',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '379',
                'imeNastavnik' => 'Mia',
                'prezNastavnik' => 'Stojić',
                'pbrStan' => '21000',
                'sifOrgjed' => '100002',
                'koef' => '5.10',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '383',
                'imeNastavnik' => 'Mihael',
                'prezNastavnik' => 'Schildenfeld',
                'pbrStan' => '10000',
                'sifOrgjed' => '100003',
                'koef' => '5.50',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '387',
                'imeNastavnik' => 'Tina',
                'prezNastavnik' => 'Madunić',
                'pbrStan' => '21000',
                'sifOrgjed' => '100025',
                'koef' => '5.90',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '391',
                'imeNastavnik' => 'Marko',
                'prezNastavnik' => 'Hazdovac',
                'pbrStan' => '10000',
                'sifOrgjed' => '100005',
                'koef' => '6.30',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '395',
                'imeNastavnik' => 'Nino',
                'prezNastavnik' => 'Zajc',
                'pbrStan' => '51000',
                'sifOrgjed' => '100006',
                'koef' => '6.70',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '399',
                'imeNastavnik' => 'Tino',
                'prezNastavnik' => 'Zerec',
                'pbrStan' => '31000',
                'sifOrgjed' => '100007',
                'koef' => '7.10',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '403',
                'imeNastavnik' => 'Aurelija',
                'prezNastavnik' => 'Jurić',
                'pbrStan' => '34000',
                'sifOrgjed' => '100008',
                'koef' => '7.50',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '407',
                'imeNastavnik' => 'Gregor',
                'prezNastavnik' => 'Krmpotić',
                'pbrStan' => '32100',
                'sifOrgjed' => '100009',
                'koef' => '7.90',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '411',
                'imeNastavnik' => 'Kristian',
                'prezNastavnik' => 'Damjančić',
                'pbrStan' => '48000',
                'sifOrgjed' => '100010',
                'koef' => '8.30',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '416',
                'imeNastavnik' => 'Željka',
                'prezNastavnik' => 'Bello',
                'pbrStan' => '10000',
                'sifOrgjed' => '100026',
                'koef' => '9.50',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '420',
                'imeNastavnik' => 'Bernard',
                'prezNastavnik' => 'Jurjević',
                'pbrStan' => '33000',
                'sifOrgjed' => '100001',
                'koef' => '9.90',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '424',
                'imeNastavnik' => 'Blaž',
                'prezNastavnik' => 'Bartolović',
                'pbrStan' => '10000',
                'sifOrgjed' => '100026',
                'koef' => '3.30',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '428',
                'imeNastavnik' => 'Mirna',
                'prezNastavnik' => 'Ban',
                'pbrStan' => '10000',
                'sifOrgjed' => '100003',
                'koef' => '3.70',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '432',
                'imeNastavnik' => 'Bojan',
                'prezNastavnik' => 'Bračić',
                'pbrStan' => '10000',
                'sifOrgjed' => '100004',
                'koef' => '4.10',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '436',
                'imeNastavnik' => 'Karla',
                'prezNastavnik' => 'Glasnović',
                'pbrStan' => '31500',
                'sifOrgjed' => '100005',
                'koef' => '4.50',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '440',
                'imeNastavnik' => 'Miroslav',
                'prezNastavnik' => 'Pongrac',
                'pbrStan' => '51550',
                'sifOrgjed' => '100025',
                'koef' => '4.90',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '444',
                'imeNastavnik' => 'Ilija',
                'prezNastavnik' => 'Marasović',
                'pbrStan' => '10000',
                'sifOrgjed' => '100007',
                'koef' => '5.30',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '448',
                'imeNastavnik' => 'Mladen',
                'prezNastavnik' => 'Butković',
                'pbrStan' => '10000',
                'sifOrgjed' => '100008',
                'koef' => '5.70',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '452',
                'imeNastavnik' => 'Viktor',
                'prezNastavnik' => 'Kuzmić',
                'pbrStan' => '31000',
                'sifOrgjed' => '100009',
                'koef' => '3.10',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '456',
                'imeNastavnik' => 'Slavica',
                'prezNastavnik' => 'Haban',
                'pbrStan' => '10000',
                'sifOrgjed' => '100010',
                'koef' => '3.50',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '460',
                'imeNastavnik' => 'Ivana',
                'prezNastavnik' => 'Košanski',
                'pbrStan' => '10000',
                'sifOrgjed' => '100011',
                'koef' => '3.90',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '465',
                'imeNastavnik' => 'Vinko',
                'prezNastavnik' => 'Belošević',
                'pbrStan' => '10000',
                'sifOrgjed' => '100001',
                'koef' => '5.10',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '469',
                'imeNastavnik' => 'Ivana',
                'prezNastavnik' => 'Dumančić',
                'pbrStan' => '10000',
                'sifOrgjed' => '100002',
                'koef' => '5.50',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '473',
                'imeNastavnik' => 'Ive',
                'prezNastavnik' => 'Pisarović',
                'pbrStan' => '10000',
                'sifOrgjed' => '100003',
                'koef' => '5.90',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '477',
                'imeNastavnik' => 'Gordan',
                'prezNastavnik' => 'Štampar',
                'pbrStan' => '21000',
                'sifOrgjed' => '100004',
                'koef' => '6.30',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '481',
                'imeNastavnik' => 'Iva',
                'prezNastavnik' => 'Habuš',
                'pbrStan' => '10000',
                'sifOrgjed' => '100005',
                'koef' => '6.70',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '485',
                'imeNastavnik' => 'Ivo',
                'prezNastavnik' => 'Lovrić',
                'pbrStan' => '10000',
                'sifOrgjed' => '100025',
                'koef' => '7.10',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '489',
                'imeNastavnik' => 'Vladimir',
                'prezNastavnik' => 'Vinković',
                'pbrStan' => '10000',
                'sifOrgjed' => '100007',
                'koef' => '7.50',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '493',
                'imeNastavnik' => 'Vlado',
                'prezNastavnik' => 'Burela',
                'pbrStan' => '31000',
                'sifOrgjed' => '100025',
                'koef' => '7.90',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '497',
                'imeNastavnik' => 'Hrvoje',
                'prezNastavnik' => 'Mandić',
                'pbrStan' => '42000',
                'sifOrgjed' => '100009',
                'koef' => '8.30',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '501',
                'imeNastavnik' => 'Davorin',
                'prezNastavnik' => 'Rodinis',
                'pbrStan' => '48000',
                'sifOrgjed' => '100010',
                'koef' => '8.70',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '505',
                'imeNastavnik' => 'Jerko',
                'prezNastavnik' => 'Zovko',
                'pbrStan' => '52000',
                'sifOrgjed' => '100011',
                'koef' => '9.10',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '509',
                'imeNastavnik' => 'Petar',
                'prezNastavnik' => 'Posavčević',
                'pbrStan' => '10000',
                'sifOrgjed' => '100001',
                'koef' => '9.50',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '514',
                'imeNastavnik' => 'Damjan',
                'prezNastavnik' => 'Dolar',
                'pbrStan' => '10000',
                'sifOrgjed' => '100002',
                'koef' => '3.70',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifNastavnik' => '518',
                'imeNastavnik' => 'Josipa',
                'prezNastavnik' => 'Prokopić',
                'pbrStan' => '21000',
                'sifOrgjed' => '100026',
                'koef' => '4.10',
                'created_at' => NULL,
                'updated_at' => NULL
            )



    ));
    }
}
