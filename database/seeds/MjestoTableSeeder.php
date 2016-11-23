<?php
/**
 * 
 * Kreirano sa:
 * vagrant@homestead:~/Code/blog$ php artisan make:seeder MjestoTableSeeder
 * 
 */
use Illuminate\Database\Seeder;

class MjestoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete mjesto table records
        DB::table('mjesto')->delete();
        DB::table('mjesto')->insert(array(
          //


            Array
            (
                'pbr' => '10000',
                'nazMjesto' => 'Zagreb',
                'sifZupanija' => '21',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '10010',
                'nazMjesto' => 'Zagreb-Sloboština',
                'sifZupanija' => '21',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '10020',
                'nazMjesto' => 'Zagreb-Novi Zagreb',
                'sifZupanija' => '21',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '10040',
                'nazMjesto' => 'Zagreb-Dubrava',
                'sifZupanija' => '21',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '10090',
                'nazMjesto' => 'Zagreb-Susedgrad',
                'sifZupanija' => '21',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '10250',
                'nazMjesto' => 'Lučko',
                'sifZupanija' => '1',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '10255',
                'nazMjesto' => 'Gornji Stupnik',
                'sifZupanija' => '1',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '10290',
                'nazMjesto' => 'Zaprešić',
                'sifZupanija' => '1',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '10295',
                'nazMjesto' => 'Kupljenovo',
                'sifZupanija' => '1',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '10310',
                'nazMjesto' => 'Ivanić-Grad',
                'sifZupanija' => '1',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '10315',
                'nazMjesto' => 'Novoselec',
                'sifZupanija' => '1',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '10340',
                'nazMjesto' => 'Vrbovec',
                'sifZupanija' => '1',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '10345',
                'nazMjesto' => 'Gradec',
                'sifZupanija' => '1',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '10360',
                'nazMjesto' => 'Sesvete',
                'sifZupanija' => '1',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '10370',
                'nazMjesto' => 'Dugo Selo',
                'sifZupanija' => '1',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '10380',
                'nazMjesto' => 'Sveti Ivan Zelina',
                'sifZupanija' => '21',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '10410',
                'nazMjesto' => 'Velika Gorica',
                'sifZupanija' => '1',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '10415',
                'nazMjesto' => 'Novo Čiče',
                'sifZupanija' => '1',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '10430',
                'nazMjesto' => 'Samobor',
                'sifZupanija' => '1',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '10435',
                'nazMjesto' => 'Sveti Martin pod Okićem',
                'sifZupanija' => '1',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '10450',
                'nazMjesto' => 'Jastrebarsko',
                'sifZupanija' => '1',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '10455',
                'nazMjesto' => 'Kostanjevac',
                'sifZupanija' => '1',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '20000',
                'nazMjesto' => 'Dubrovnik',
                'sifZupanija' => '19',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '20205',
                'nazMjesto' => 'Topolo',
                'sifZupanija' => '19',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '20210',
                'nazMjesto' => 'Cavtat',
                'sifZupanija' => '19',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '20215',
                'nazMjesto' => 'Gruda',
                'sifZupanija' => '19',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '20225',
                'nazMjesto' => 'Babino Polje',
                'sifZupanija' => '19',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '20230',
                'nazMjesto' => 'Ston',
                'sifZupanija' => '19',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '20235',
                'nazMjesto' => 'Zaton Veliki',
                'sifZupanija' => '19',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '20240',
                'nazMjesto' => 'Trpanj',
                'sifZupanija' => '19',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '20242',
                'nazMjesto' => 'Oskorušno',
                'sifZupanija' => '19',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '20245',
                'nazMjesto' => 'Trstenik',
                'sifZupanija' => '19',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '20250',
                'nazMjesto' => 'Orebić',
                'sifZupanija' => '19',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '20260',
                'nazMjesto' => 'Korčula',
                'sifZupanija' => '19',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '20270',
                'nazMjesto' => 'Vela Luka',
                'sifZupanija' => '19',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '20275',
                'nazMjesto' => 'Žrnovo',
                'sifZupanija' => '19',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '20290',
                'nazMjesto' => 'Lastovo',
                'sifZupanija' => '19',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '20340',
                'nazMjesto' => 'Ploče',
                'sifZupanija' => '19',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '20345',
                'nazMjesto' => 'Staševica',
                'sifZupanija' => '19',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '20350',
                'nazMjesto' => 'Metković',
                'sifZupanija' => '19',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '20355',
                'nazMjesto' => 'Opuzen',
                'sifZupanija' => '19',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21000',
                'nazMjesto' => 'Split',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21205',
                'nazMjesto' => 'Donji Dolac',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21210',
                'nazMjesto' => 'Solin',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21215',
                'nazMjesto' => 'Kaštel Lukšić',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21220',
                'nazMjesto' => 'Trogir',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21225',
                'nazMjesto' => 'Drvenik Veliki',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21230',
                'nazMjesto' => 'Sinj',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21232',
                'nazMjesto' => 'Dicmo',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21235',
                'nazMjesto' => 'Otišić',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21240',
                'nazMjesto' => 'Trilj',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21245',
                'nazMjesto' => 'Tijarica',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21250',
                'nazMjesto' => 'Šestanovac',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21255',
                'nazMjesto' => 'Zadvarje',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21260',
                'nazMjesto' => 'Imotski',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21265',
                'nazMjesto' => 'Studenci',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21270',
                'nazMjesto' => 'Zagvozd',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21275',
                'nazMjesto' => 'Dragljane',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21300',
                'nazMjesto' => 'Makarska',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21310',
                'nazMjesto' => 'Omiš',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21315',
                'nazMjesto' => 'Dugi Rat',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21320',
                'nazMjesto' => 'Baška Voda',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21325',
                'nazMjesto' => 'Tučepi',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21330',
                'nazMjesto' => 'Gradac',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21335',
                'nazMjesto' => 'Podaca',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21400',
                'nazMjesto' => 'Supetar',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21405',
                'nazMjesto' => 'Milna',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21410',
                'nazMjesto' => 'Postira',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21420',
                'nazMjesto' => 'Bol',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21425',
                'nazMjesto' => 'Selca',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21430',
                'nazMjesto' => 'Grohote',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21450',
                'nazMjesto' => 'Hvar',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21460',
                'nazMjesto' => 'Stari Grad',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21465',
                'nazMjesto' => 'Jelsa',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21480',
                'nazMjesto' => 'Vis',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '21485',
                'nazMjesto' => 'Komiža',
                'sifZupanija' => '17',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '22000',
                'nazMjesto' => 'Šibenik',
                'sifZupanija' => '15',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '22010',
                'nazMjesto' => 'Šibenik-Brodarica',
                'sifZupanija' => '15',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '22020',
                'nazMjesto' => 'Šibenik-Ražine',
                'sifZupanija' => '15',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '22030',
                'nazMjesto' => 'Šibenik-Zablaće',
                'sifZupanija' => '15',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '22205',
                'nazMjesto' => 'Perković',
                'sifZupanija' => '15',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '22215',
                'nazMjesto' => 'Zaton',
                'sifZupanija' => '15',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '22235',
                'nazMjesto' => 'Kaprije',
                'sifZupanija' => '15',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '22240',
                'nazMjesto' => 'Tisno',
                'sifZupanija' => '15',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '22300',
                'nazMjesto' => 'Knin',
                'sifZupanija' => '15',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '22305',
                'nazMjesto' => 'Kistanje',
                'sifZupanija' => '15',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '22310',
                'nazMjesto' => 'Kijevo',
                'sifZupanija' => '15',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '22320',
                'nazMjesto' => 'Drniš',
                'sifZupanija' => '15',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '23000',
                'nazMjesto' => 'Zadar',
                'sifZupanija' => '13',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '23205',
                'nazMjesto' => 'Bibinje',
                'sifZupanija' => '13',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '23210',
                'nazMjesto' => 'Biograd na moru',
                'sifZupanija' => '13',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '23235',
                'nazMjesto' => 'Vrsi',
                'sifZupanija' => '13',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '23245',
                'nazMjesto' => 'Tribanj',
                'sifZupanija' => '13',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '23250',
                'nazMjesto' => 'Pag',
                'sifZupanija' => '13',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '23275',
                'nazMjesto' => 'Ugljan',
                'sifZupanija' => '13',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '23285',
                'nazMjesto' => 'Brbinj',
                'sifZupanija' => '13',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '23295',
                'nazMjesto' => 'Silba',
                'sifZupanija' => '13',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '23420',
                'nazMjesto' => 'Benkovac',
                'sifZupanija' => '13',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '23440',
                'nazMjesto' => 'Gračac',
                'sifZupanija' => '13',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '23445',
                'nazMjesto' => 'Srb',
                'sifZupanija' => '13',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '23450',
                'nazMjesto' => 'Obrovac',
                'sifZupanija' => '13',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '31000',
                'nazMjesto' => 'Osijek',
                'sifZupanija' => '14',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '31205',
                'nazMjesto' => 'Aljmaš',
                'sifZupanija' => '14',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '31215',
                'nazMjesto' => 'Ernestinovo',
                'sifZupanija' => '14',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '31220',
                'nazMjesto' => 'Višnjevac',
                'sifZupanija' => '14',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '31225',
                'nazMjesto' => 'Breznica Našička',
                'sifZupanija' => '14',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '31300',
                'nazMjesto' => 'Beli Manastir',
                'sifZupanija' => '14',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '31301',
                'nazMjesto' => 'Branjin Vrh',
                'sifZupanija' => '14',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '31305',
                'nazMjesto' => 'Draž',
                'sifZupanija' => '14',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '31315',
                'nazMjesto' => 'Karanac',
                'sifZupanija' => '14',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '31325',
                'nazMjesto' => 'Čeminac',
                'sifZupanija' => '14',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '31400',
                'nazMjesto' => 'Đakovo',
                'sifZupanija' => '14',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '31410',
                'nazMjesto' => 'Strizivojna',
                'sifZupanija' => '14',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '31415',
                'nazMjesto' => 'Selci Đakovački',
                'sifZupanija' => '14',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '31500',
                'nazMjesto' => 'Našice',
                'sifZupanija' => '14',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '31530',
                'nazMjesto' => 'Podravska Moslavina',
                'sifZupanija' => '14',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '31531',
                'nazMjesto' => 'Viljevo',
                'sifZupanija' => '14',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '31540',
                'nazMjesto' => 'Donji Miholjac',
                'sifZupanija' => '14',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '31550',
                'nazMjesto' => 'Valpovo',
                'sifZupanija' => '14',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '31555',
                'nazMjesto' => 'Marijanci',
                'sifZupanija' => '14',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '32000',
                'nazMjesto' => 'Vukovar',
                'sifZupanija' => '16',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '32100',
                'nazMjesto' => 'Vinkovci',
                'sifZupanija' => '16',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '32225',
                'nazMjesto' => 'Bobota',
                'sifZupanija' => '16',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '32235',
                'nazMjesto' => 'Bapska',
                'sifZupanija' => '16',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '32240',
                'nazMjesto' => 'Mirkovci',
                'sifZupanija' => '16',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '32245',
                'nazMjesto' => 'Nijemci',
                'sifZupanija' => '16',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '32255',
                'nazMjesto' => 'Soljani',
                'sifZupanija' => '16',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '32260',
                'nazMjesto' => 'Gunja',
                'sifZupanija' => '16',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '32270',
                'nazMjesto' => 'Županja',
                'sifZupanija' => '16',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '32275',
                'nazMjesto' => 'Bošnjaci',
                'sifZupanija' => '16',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '32280',
                'nazMjesto' => 'Jarmina',
                'sifZupanija' => '16',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '33000',
                'nazMjesto' => 'Virovitica',
                'sifZupanija' => '10',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '33333',
                'nazMjesto' => 'trice',
                'sifZupanija' => '13',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '33405',
                'nazMjesto' => 'Pitomača',
                'sifZupanija' => '10',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '33410',
                'nazMjesto' => 'Suhopolje',
                'sifZupanija' => '10',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '33515',
                'nazMjesto' => 'Orahovica',
                'sifZupanija' => '10',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '33520',
                'nazMjesto' => 'Slatina',
                'sifZupanija' => '10',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '33525',
                'nazMjesto' => 'Sopje',
                'sifZupanija' => '10',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '34000',
                'nazMjesto' => 'Požega',
                'sifZupanija' => '11',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '34310',
                'nazMjesto' => 'Pleternica',
                'sifZupanija' => '11',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '34315',
                'nazMjesto' => 'Ratkovica',
                'sifZupanija' => '11',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '34320',
                'nazMjesto' => 'Orljavac',
                'sifZupanija' => '11',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '34330',
                'nazMjesto' => 'Velika',
                'sifZupanija' => '11',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '34335',
                'nazMjesto' => 'Vetovo',
                'sifZupanija' => '11',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '34340',
                'nazMjesto' => 'Kutjevo',
                'sifZupanija' => '11',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '34350',
                'nazMjesto' => 'Čaglin',
                'sifZupanija' => '11',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '34550',
                'nazMjesto' => 'Pakrac',
                'sifZupanija' => '11',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '35000',
                'nazMjesto' => 'Slavonski Brod',
                'sifZupanija' => '12',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '35210',
                'nazMjesto' => 'Vrpolje',
                'sifZupanija' => '12',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '35215',
                'nazMjesto' => 'Svilaj',
                'sifZupanija' => '12',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '35220',
                'nazMjesto' => 'Slavonski Šamac',
                'sifZupanija' => '12',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '35250',
                'nazMjesto' => 'Oriovac',
                'sifZupanija' => '12',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '35255',
                'nazMjesto' => 'Slavonski Kobaš',
                'sifZupanija' => '12',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '35400',
                'nazMjesto' => 'Nova Gradiška',
                'sifZupanija' => '12',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '35420',
                'nazMjesto' => 'Staro Petrovo Selo',
                'sifZupanija' => '12',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '35425',
                'nazMjesto' => 'Davor',
                'sifZupanija' => '12',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '35430',
                'nazMjesto' => 'Okučani',
                'sifZupanija' => '12',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '35435',
                'nazMjesto' => 'Stara Gradiška',
                'sifZupanija' => '12',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '40000',
                'nazMjesto' => 'Čakovec',
                'sifZupanija' => '20',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '40305',
                'nazMjesto' => 'Nedelišče',
                'sifZupanija' => '20',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '40315',
                'nazMjesto' => 'Mursko Središče',
                'sifZupanija' => '20',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '40320',
                'nazMjesto' => 'Donji Kraljevec',
                'sifZupanija' => '20',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '40325',
                'nazMjesto' => 'Draškovec',
                'sifZupanija' => '20',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '42000',
                'nazMjesto' => 'Varaždin',
                'sifZupanija' => '5',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '42205',
                'nazMjesto' => 'Vidovec',
                'sifZupanija' => '5',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '42220',
                'nazMjesto' => 'Novi Marof',
                'sifZupanija' => '5',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '42225',
                'nazMjesto' => 'Breznički Hum',
                'sifZupanija' => '5',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '42230',
                'nazMjesto' => 'Ludbreg',
                'sifZupanija' => '5',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '42240',
                'nazMjesto' => 'Ivanec',
                'sifZupanija' => '5',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '42245',
                'nazMjesto' => 'Donja Voća',
                'sifZupanija' => '5',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '42250',
                'nazMjesto' => 'Lepoglava',
                'sifZupanija' => '5',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '42255',
                'nazMjesto' => 'Donja Višnjica',
                'sifZupanija' => '5',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '43000',
                'nazMjesto' => 'Bjelovar',
                'sifZupanija' => '7',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '43240',
                'nazMjesto' => 'Čazma',
                'sifZupanija' => '7',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '43245',
                'nazMjesto' => 'Gornji Draganec',
                'sifZupanija' => '7',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '43270',
                'nazMjesto' => 'Veliki Grđevac',
                'sifZupanija' => '7',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '43271',
                'nazMjesto' => 'Velika Pisanica',
                'sifZupanija' => '7',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '43280',
                'nazMjesto' => 'Garešnica',
                'sifZupanija' => '7',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '43285',
                'nazMjesto' => 'Velika Trnovitica',
                'sifZupanija' => '7',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '43290',
                'nazMjesto' => 'Grubišno Polje',
                'sifZupanija' => '7',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '43500',
                'nazMjesto' => 'Daruvar',
                'sifZupanija' => '7',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '43505',
                'nazMjesto' => 'Končanica',
                'sifZupanija' => '7',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '43531',
                'nazMjesto' => 'Veliki Bastaji',
                'sifZupanija' => '7',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '44000',
                'nazMjesto' => 'Sisak',
                'sifZupanija' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '44010',
                'nazMjesto' => 'Sisak-Caprag',
                'sifZupanija' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '44205',
                'nazMjesto' => 'Donja Bačuga',
                'sifZupanija' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '44210',
                'nazMjesto' => 'Sunja',
                'sifZupanija' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '44250',
                'nazMjesto' => 'Petrinja',
                'sifZupanija' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '44271',
                'nazMjesto' => 'Letovanić',
                'sifZupanija' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '44320',
                'nazMjesto' => 'Kutina',
                'sifZupanija' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '44325',
                'nazMjesto' => 'Krapje',
                'sifZupanija' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '44330',
                'nazMjesto' => 'Novska',
                'sifZupanija' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '44400',
                'nazMjesto' => 'Glina',
                'sifZupanija' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '44405',
                'nazMjesto' => 'Mali Gradac',
                'sifZupanija' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '44410',
                'nazMjesto' => 'Gvozd',
                'sifZupanija' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '44415',
                'nazMjesto' => 'Topusko',
                'sifZupanija' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '44425',
                'nazMjesto' => 'Gornja Bučica',
                'sifZupanija' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '44430',
                'nazMjesto' => 'Hrvatska Kostajnica',
                'sifZupanija' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '44435',
                'nazMjesto' => 'Divuša',
                'sifZupanija' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '44440',
                'nazMjesto' => 'Dvor',
                'sifZupanija' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '44450',
                'nazMjesto' => 'Hrvatska Dubica',
                'sifZupanija' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '47000',
                'nazMjesto' => 'Karlovac',
                'sifZupanija' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '47201',
                'nazMjesto' => 'Draganići',
                'sifZupanija' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '47205',
                'nazMjesto' => 'Vukmanić',
                'sifZupanija' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '47220',
                'nazMjesto' => 'Vojnić',
                'sifZupanija' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '47240',
                'nazMjesto' => 'Slunj',
                'sifZupanija' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '47245',
                'nazMjesto' => 'Rakovica',
                'sifZupanija' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '47250',
                'nazMjesto' => 'Duga Resa',
                'sifZupanija' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '47251',
                'nazMjesto' => 'Bosiljevo',
                'sifZupanija' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '47280',
                'nazMjesto' => 'Ozalj',
                'sifZupanija' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '47285',
                'nazMjesto' => 'Radatovići',
                'sifZupanija' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '47300',
                'nazMjesto' => 'Ogulin',
                'sifZupanija' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '47302',
                'nazMjesto' => 'Oštarije',
                'sifZupanija' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '47305',
                'nazMjesto' => 'Lička Jesenica',
                'sifZupanija' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '48000',
                'nazMjesto' => 'Koprivnica',
                'sifZupanija' => '6',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '48260',
                'nazMjesto' => 'Križevci',
                'sifZupanija' => '6',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '48265',
                'nazMjesto' => 'Raven',
                'sifZupanija' => '6',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '48305',
                'nazMjesto' => 'Reka',
                'sifZupanija' => '6',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '48325',
                'nazMjesto' => 'Novigrad Podravski',
                'sifZupanija' => '6',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '48350',
                'nazMjesto' => 'Đurđevac',
                'sifZupanija' => '6',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '48355',
                'nazMjesto' => 'Novo Virje',
                'sifZupanija' => '6',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '49000',
                'nazMjesto' => 'Krapina',
                'sifZupanija' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '49210',
                'nazMjesto' => 'Zabok',
                'sifZupanija' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '49215',
                'nazMjesto' => 'Tuhelj',
                'sifZupanija' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '49225',
                'nazMjesto' => 'Đurmanec',
                'sifZupanija' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '49240',
                'nazMjesto' => 'Donja Stubica',
                'sifZupanija' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '49245',
                'nazMjesto' => 'Gornja Stubica',
                'sifZupanija' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '49250',
                'nazMjesto' => 'Zlatar',
                'sifZupanija' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '49255',
                'nazMjesto' => 'Novi Golubovec',
                'sifZupanija' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '49290',
                'nazMjesto' => 'Klanjec',
                'sifZupanija' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '49295',
                'nazMjesto' => 'Kumrovec',
                'sifZupanija' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '51000',
                'nazMjesto' => 'Rijeka',
                'sifZupanija' => '8',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '51211',
                'nazMjesto' => 'Matulji',
                'sifZupanija' => '8',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '51215',
                'nazMjesto' => 'Kastav',
                'sifZupanija' => '8',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '51225',
                'nazMjesto' => 'Praputnjak',
                'sifZupanija' => '8',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '51250',
                'nazMjesto' => 'Novi Vinodolski',
                'sifZupanija' => '8',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '51251',
                'nazMjesto' => 'Ledenice',
                'sifZupanija' => '8',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '51260',
                'nazMjesto' => 'Crikvenica',
                'sifZupanija' => '8',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '51265',
                'nazMjesto' => 'Dramalj',
                'sifZupanija' => '8',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '51280',
                'nazMjesto' => 'Rab',
                'sifZupanija' => '8',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '51300',
                'nazMjesto' => 'Delnice',
                'sifZupanija' => '8',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '51305',
                'nazMjesto' => 'Tršće',
                'sifZupanija' => '8',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '51315',
                'nazMjesto' => 'Mrkopalj',
                'sifZupanija' => '8',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '51325',
                'nazMjesto' => 'Moravice',
                'sifZupanija' => '8',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '51410',
                'nazMjesto' => 'Opatija',
                'sifZupanija' => '8',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '51415',
                'nazMjesto' => 'Lovran',
                'sifZupanija' => '8',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '51500',
                'nazMjesto' => 'Krk',
                'sifZupanija' => '8',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '51515',
                'nazMjesto' => 'Šilo',
                'sifZupanija' => '8',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '51550',
                'nazMjesto' => 'Mali Lošinj',
                'sifZupanija' => '8',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '51555',
                'nazMjesto' => 'Belej',
                'sifZupanija' => '8',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '52000',
                'nazMjesto' => 'Pazin',
                'sifZupanija' => '18',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '52100',
                'nazMjesto' => 'Pula',
                'sifZupanija' => '18',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '52210',
                'nazMjesto' => 'Rovinj (Rovigno)',
                'sifZupanija' => '18',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '52215',
                'nazMjesto' => 'Vodnjan (Dignano)',
                'sifZupanija' => '18',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '52220',
                'nazMjesto' => 'Labin',
                'sifZupanija' => '18',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '52420',
                'nazMjesto' => 'Buzet',
                'sifZupanija' => '18',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '52425',
                'nazMjesto' => 'Roč',
                'sifZupanija' => '18',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '52440',
                'nazMjesto' => 'Poreč',
                'sifZupanija' => '18',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '52445',
                'nazMjesto' => 'Baderna',
                'sifZupanija' => '18',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '52450',
                'nazMjesto' => 'Vrsar',
                'sifZupanija' => '18',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '52460',
                'nazMjesto' => 'Buje (Buie)',
                'sifZupanija' => '18',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '52465',
                'nazMjesto' => 'Tar',
                'sifZupanija' => '18',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '52470',
                'nazMjesto' => 'Umag (Umago)',
                'sifZupanija' => '18',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '52475',
                'nazMjesto' => 'Savudrija (Salvore)',
                'sifZupanija' => '18',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '53000',
                'nazMjesto' => 'Gospić',
                'sifZupanija' => '9',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '53205',
                'nazMjesto' => 'Medak',
                'sifZupanija' => '9',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '53220',
                'nazMjesto' => 'Otočac',
                'sifZupanija' => '9',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '53225',
                'nazMjesto' => 'Švica',
                'sifZupanija' => '9',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '53230',
                'nazMjesto' => 'Korenica',
                'sifZupanija' => '9',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '53235',
                'nazMjesto' => 'Bunić',
                'sifZupanija' => '9',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '53250',
                'nazMjesto' => 'Donji Lapac',
                'sifZupanija' => '9',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '53260',
                'nazMjesto' => 'Brinje',
                'sifZupanija' => '9',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '53270',
                'nazMjesto' => 'Senj',
                'sifZupanija' => '9',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'pbr' => '53285',
                'nazMjesto' => 'Lukovo',
                'sifZupanija' => '9',
                'created_at' => NULL,
                'updated_at' => NULL
            )
          
            //

        ));
    }
}
