<?php
/**
 * migrciju pokreni sa:
 * vagrant@homestead:~/Code/blog$ php artisan db:seed
 */
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class StudTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete stud table records
        DB::table('stud')->delete();
        DB::table('stud')->insert(array(



            Array
            (
                'mbrStud' => '1120',
                'imeStud' => 'Zdenko',
                'prezStud' => 'Kolac',
                'pbrRod' => '31000',
                'pbrStan' => '40000',
                'datRodStud' => '1985-06-06 00:00:00',
                'jmbgStud' => '0606985330186',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1121',
                'imeStud' => 'Danijel',
                'prezStud' => 'Marović',
                'pbrRod' => '21000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-12-18 00:00:00',
                'jmbgStud' => '1812984330118',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1123',
                'imeStud' => 'Jozefina',
                'prezStud' => 'Antončić',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-01-21 00:00:00',
                'jmbgStud' => '2101984330133',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1124',
                'imeStud' => 'Tihomir',
                'prezStud' => 'Crnković',
                'pbrRod' => '34000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-05-01 00:00:00',
                'jmbgStud' => '0105985303228',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1125',
                'imeStud' => 'Vjeran',
                'prezStud' => 'Brezac',
                'pbrRod' => '44000',
                'pbrStan' => '44000',
                'datRodStud' => '1984-04-12 00:00:00',
                'jmbgStud' => '1204984335026',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1127',
                'imeStud' => 'Dario',
                'prezStud' => 'Risek',
                'pbrRod' => '32000',
                'pbrStan' => '32000',
                'datRodStud' => '1984-07-19 00:00:00',
                'jmbgStud' => '1907984362909',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1128',
                'imeStud' => 'Zlatko',
                'prezStud' => 'Broz',
                'pbrRod' => '42000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-03-17 00:00:00',
                'jmbgStud' => '1703984330099',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1129',
                'imeStud' => 'Julija',
                'prezStud' => 'Kos',
                'pbrRod' => '51000',
                'pbrStan' => '51000',
                'datRodStud' => '1985-05-19 00:00:00',
                'jmbgStud' => '1905985330161',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1131',
                'imeStud' => 'Zlatko',
                'prezStud' => 'Nenadić',
                'pbrRod' => '35000',
                'pbrStan' => '35000',
                'datRodStud' => '1984-11-17 00:00:00',
                'jmbgStud' => '1711984395329',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1132',
                'imeStud' => 'Nikica',
                'prezStud' => 'Arunović',
                'pbrRod' => '48000',
                'pbrStan' => '48000',
                'datRodStud' => '1984-09-01 00:00:00',
                'jmbgStud' => '0109984330006',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1133',
                'imeStud' => 'Darko',
                'prezStud' => 'Cindrić',
                'pbrRod' => '40000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-10-18 00:00:00',
                'jmbgStud' => '1810984330093',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1135',
                'imeStud' => 'Juraj',
                'prezStud' => 'Rožman',
                'pbrRod' => '42000',
                'pbrStan' => '42000',
                'datRodStud' => '1984-08-19 00:00:00',
                'jmbgStud' => '1908984312508',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1136',
                'imeStud' => 'Vlatko',
                'prezStud' => 'Horvatić',
                'pbrRod' => '51000',
                'pbrStan' => '51000',
                'datRodStud' => '1985-06-26 00:00:00',
                'jmbgStud' => '2606985325027',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1137',
                'imeStud' => 'Jure',
                'prezStud' => 'Ribarić',
                'pbrRod' => '22000',
                'pbrStan' => '22000',
                'datRodStud' => '1983-11-02 00:00:00',
                'jmbgStud' => '0211983392304',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1139',
                'imeStud' => 'Niko',
                'prezStud' => 'Marušić',
                'pbrRod' => '48000',
                'pbrStan' => '48000',
                'datRodStud' => '1984-08-22 00:00:00',
                'jmbgStud' => '2208984173977',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1140',
                'imeStud' => 'Davor',
                'prezStud' => 'Vurnek',
                'pbrRod' => '20000',
                'pbrStan' => '20000',
                'datRodStud' => '1984-10-29 00:00:00',
                'jmbgStud' => '2910984300802',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1141',
                'imeStud' => 'Zoran',
                'prezStud' => 'Habajec',
                'pbrRod' => '21000',
                'pbrStan' => '21000',
                'datRodStud' => '1984-07-25 00:00:00',
                'jmbgStud' => '2507984301807',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1143',
                'imeStud' => 'Davor',
                'prezStud' => 'Voras',
                'pbrRod' => '20000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-10-08 00:00:00',
                'jmbgStud' => '0810985390025',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1144',
                'imeStud' => 'Zvonimir',
                'prezStud' => 'Ozimec',
                'pbrRod' => '21000',
                'pbrStan' => '21000',
                'datRodStud' => '1985-10-08 00:00:00',
                'jmbgStud' => '0810985390015',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1145',
                'imeStud' => 'Jurica',
                'prezStud' => 'Bašić',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-07-06 00:00:00',
                'jmbgStud' => '0607985361605',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1147',
                'imeStud' => 'Alenka',
                'prezStud' => 'Vukojević',
                'pbrRod' => '21000',
                'pbrStan' => '21000',
                'datRodStud' => '1985-06-14 00:00:00',
                'jmbgStud' => '1406985311906',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1148',
                'imeStud' => 'Antonijo',
                'prezStud' => 'Javorina',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-07-16 00:00:00',
                'jmbgStud' => '1607984330068',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1149',
                'imeStud' => 'Nikola',
                'prezStud' => 'Bačić',
                'pbrRod' => '20000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-04-08 00:00:00',
                'jmbgStud' => '0804984330122',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1151',
                'imeStud' => 'Karlo',
                'prezStud' => 'Krsnik',
                'pbrRod' => '10010',
                'pbrStan' => '10000',
                'datRodStud' => '1984-08-18 00:00:00',
                'jmbgStud' => '1808984320522',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1152',
                'imeStud' => 'Božidar',
                'prezStud' => 'Tomić',
                'pbrRod' => '20250',
                'pbrStan' => '20250',
                'datRodStud' => '1985-08-07 00:00:00',
                'jmbgStud' => '0708985395074',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1153',
                'imeStud' => 'Josip',
                'prezStud' => 'Dukić',
                'pbrRod' => '21270',
                'pbrStan' => '10000',
                'datRodStud' => '1985-06-23 00:00:00',
                'jmbgStud' => '2306985330111',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1155',
                'imeStud' => 'Davorin',
                'prezStud' => 'Mirković',
                'pbrRod' => '32100',
                'pbrStan' => '32100',
                'datRodStud' => '1985-07-04 00:00:00',
                'jmbgStud' => '0407985307804',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1156',
                'imeStud' => 'Nikolina',
                'prezStud' => 'Medvedec',
                'pbrRod' => '34340',
                'pbrStan' => '10370',
                'datRodStud' => '1985-01-27 00:00:00',
                'jmbgStud' => '2701985381508',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1157',
                'imeStud' => 'Nina',
                'prezStud' => 'Cnappi',
                'pbrRod' => '44320',
                'pbrStan' => '10000',
                'datRodStud' => '1985-05-23 00:00:00',
                'jmbgStud' => '2305985390005',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1159',
                'imeStud' => 'Katarina',
                'prezStud' => 'Dobrina',
                'pbrRod' => '52420',
                'pbrStan' => '10000',
                'datRodStud' => '1985-02-18 00:00:00',
                'jmbgStud' => '1802985330169',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1160',
                'imeStud' => 'Majo',
                'prezStud' => 'Musić',
                'pbrRod' => '10450',
                'pbrStan' => '10000',
                'datRodStud' => '1984-10-27 00:00:00',
                'jmbgStud' => '2710984303508',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1161',
                'imeStud' => 'Davor',
                'prezStud' => 'Jurinjak',
                'pbrRod' => '23250',
                'pbrStan' => '10000',
                'datRodStud' => '1985-05-23 00:00:00',
                'jmbgStud' => '2305985330103',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1163',
                'imeStud' => 'Davorka',
                'prezStud' => 'Smolić-Grgić',
                'pbrRod' => '43280',
                'pbrStan' => '10000',
                'datRodStud' => '1985-06-27 00:00:00',
                'jmbgStud' => '2706985391817',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1164',
                'imeStud' => 'Krešimir',
                'prezStud' => 'Vlahović',
                'pbrRod' => '49250',
                'pbrStan' => '10000',
                'datRodStud' => '1985-03-07 00:00:00',
                'jmbgStud' => '0703985395007',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1165',
                'imeStud' => 'Željka',
                'prezStud' => 'Morić',
                'pbrRod' => '20242',
                'pbrStan' => '10000',
                'datRodStud' => '1985-06-03 00:00:00',
                'jmbgStud' => '0306985392119',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1167',
                'imeStud' => 'Mirko',
                'prezStud' => 'Teklić',
                'pbrRod' => '47201',
                'pbrStan' => '10000',
                'datRodStud' => '1984-03-28 00:00:00',
                'jmbgStud' => '2803984310615',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1168',
                'imeStud' => 'Doris',
                'prezStud' => 'Rapinac',
                'pbrRod' => '40000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-11-22 00:00:00',
                'jmbgStud' => '2211984335101',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1169',
                'imeStud' => 'Dubravko',
                'prezStud' => 'Vaniček',
                'pbrRod' => '42000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-11-27 00:00:00',
                'jmbgStud' => '2711984320539',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1170',
                'imeStud' => 'Denis',
                'prezStud' => 'Pauk',
                'pbrRod' => '31000',
                'pbrStan' => '31000',
                'datRodStud' => '1985-04-11 00:00:00',
                'jmbgStud' => '1104985301819',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1172',
                'imeStud' => 'Ninoslav',
                'prezStud' => 'Novak',
                'pbrRod' => '21000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-04-10 00:00:00',
                'jmbgStud' => '1004984383309',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1173',
                'imeStud' => 'Gordan',
                'prezStud' => 'Boršić',
                'pbrRod' => '10000',
                'pbrStan' => '20000',
                'datRodStud' => '1980-02-29 00:00:00',
                'jmbgStud' => '1902980334016',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1174',
                'imeStud' => 'Edita',
                'prezStud' => 'Domijan',
                'pbrRod' => '47300',
                'pbrStan' => '10000',
                'datRodStud' => '1985-06-21 00:00:00',
                'jmbgStud' => '2106985380029',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1176',
                'imeStud' => 'Predrag',
                'prezStud' => 'Žuljević',
                'pbrRod' => '34000',
                'pbrStan' => '10000',
                'datRodStud' => '1983-12-31 00:00:00',
                'jmbgStud' => '3112983320569',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1177',
                'imeStud' => 'Kristian',
                'prezStud' => 'Klarin',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-06-10 00:00:00',
                'jmbgStud' => '1006985330028',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1178',
                'imeStud' => 'Kristijan',
                'prezStud' => 'Vrabec',
                'pbrRod' => '20000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-10-07 00:00:00',
                'jmbgStud' => '0710984361315',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1180',
                'imeStud' => 'Iva',
                'prezStud' => 'Mioč',
                'pbrRod' => '21000',
                'pbrStan' => '21000',
                'datRodStud' => '1985-01-31 00:00:00',
                'jmbgStud' => '3101985340008',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1181',
                'imeStud' => 'Arsenio',
                'prezStud' => 'Minić',
                'pbrRod' => '10000',
                'pbrStan' => '20000',
                'datRodStud' => '1984-09-17 00:00:00',
                'jmbgStud' => '1709984320508',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1182',
                'imeStud' => 'Gorana',
                'prezStud' => 'Božić',
                'pbrRod' => '20000',
                'pbrStan' => '20000',
                'datRodStud' => '1983-07-21 00:00:00',
                'jmbgStud' => '2107983340011',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1184',
                'imeStud' => 'Tihomir',
                'prezStud' => 'Fabris',
                'pbrRod' => '10000',
                'pbrStan' => '20000',
                'datRodStud' => '1984-09-08 00:00:00',
                'jmbgStud' => '0809984360058',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1185',
                'imeStud' => 'Ozren',
                'prezStud' => 'Smolić',
                'pbrRod' => '20000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-06-23 00:00:00',
                'jmbgStud' => '2306985330083',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1186',
                'imeStud' => 'Zlatko',
                'prezStud' => 'Kolar',
                'pbrRod' => '21000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-09-18 00:00:00',
                'jmbgStud' => '1809984391008',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1188',
                'imeStud' => 'Kristina',
                'prezStud' => 'Mandić',
                'pbrRod' => '20000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-01-19 00:00:00',
                'jmbgStud' => '1901985391825',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1189',
                'imeStud' => 'Juraj',
                'prezStud' => 'Maček',
                'pbrRod' => '21000',
                'pbrStan' => '21000',
                'datRodStud' => '1985-01-27 00:00:00',
                'jmbgStud' => '2701985390206',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1190',
                'imeStud' => 'Domagoj',
                'prezStud' => 'Krišto',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-03-13 00:00:00',
                'jmbgStud' => '1303985330094',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1192',
                'imeStud' => 'Helena',
                'prezStud' => 'Mandić',
                'pbrRod' => '21000',
                'pbrStan' => '21000',
                'datRodStud' => '1985-07-10 00:00:00',
                'jmbgStud' => '1007985300028',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1193',
                'imeStud' => 'Krunoslav',
                'prezStud' => 'Brezak',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-11-03 00:00:00',
                'jmbgStud' => '0311984370805',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1194',
                'imeStud' => 'Antun Ivan',
                'prezStud' => 'Herak',
                'pbrRod' => '20000',
                'pbrStan' => '20000',
                'datRodStud' => '1984-07-04 00:00:00',
                'jmbgStud' => '0407984330073',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1196',
                'imeStud' => 'Pavao',
                'prezStud' => 'Falk',
                'pbrRod' => '20000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-07-12 00:00:00',
                'jmbgStud' => '1207984330057',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1197',
                'imeStud' => 'Dominik',
                'prezStud' => 'Hacek',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-04-12 00:00:00',
                'jmbgStud' => '1204985306801',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1198',
                'imeStud' => 'Helena',
                'prezStud' => 'Vidaković',
                'pbrRod' => '21000',
                'pbrStan' => '21000',
                'datRodStud' => '1984-08-31 00:00:00',
                'jmbgStud' => '3108984330057',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1200',
                'imeStud' => 'Davor',
                'prezStud' => 'Bunčec',
                'pbrRod' => '21000',
                'pbrStan' => '21000',
                'datRodStud' => '1984-05-05 00:00:00',
                'jmbgStud' => '0505984330124',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1201',
                'imeStud' => 'Doris',
                'prezStud' => 'Končar',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-06-01 00:00:00',
                'jmbgStud' => '0106985392713',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1202',
                'imeStud' => 'Perica',
                'prezStud' => 'Mikulec',
                'pbrRod' => '21000',
                'pbrStan' => '21000',
                'datRodStud' => '1984-04-10 00:00:00',
                'jmbgStud' => '1004984340304',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1204',
                'imeStud' => 'Ksenija',
                'prezStud' => 'Čular',
                'pbrRod' => '51000',
                'pbrStan' => '51000',
                'datRodStud' => '1985-08-10 00:00:00',
                'jmbgStud' => '1008985311207',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1205',
                'imeStud' => 'Dragan',
                'prezStud' => 'Vranešić',
                'pbrRod' => '51000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-11-28 00:00:00',
                'jmbgStud' => '2811984330185',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1206',
                'imeStud' => 'Jozefina',
                'prezStud' => 'Blauhorn',
                'pbrRod' => '51000',
                'pbrStan' => '51000',
                'datRodStud' => '1985-06-10 00:00:00',
                'jmbgStud' => '1006985383925',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1208',
                'imeStud' => 'Franjo',
                'prezStud' => 'Stipanov',
                'pbrRod' => '31000',
                'pbrStan' => '31000',
                'datRodStud' => '1984-08-11 00:00:00',
                'jmbgStud' => '1108984385042',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1209',
                'imeStud' => 'Petar',
                'prezStud' => 'Škrinjarić',
                'pbrRod' => '31000',
                'pbrStan' => '31000',
                'datRodStud' => '1984-12-14 00:00:00',
                'jmbgStud' => '1412984380046',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1210',
                'imeStud' => 'Lea',
                'prezStud' => 'Dostal',
                'pbrRod' => '31000',
                'pbrStan' => '31000',
                'datRodStud' => '1984-12-28 00:00:00',
                'jmbgStud' => '2812984335123',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1212',
                'imeStud' => 'Josip',
                'prezStud' => 'Zelić',
                'pbrRod' => '47000',
                'pbrStan' => '47000',
                'datRodStud' => '1984-10-01 00:00:00',
                'jmbgStud' => '0110984330012',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1213',
                'imeStud' => 'Petra',
                'prezStud' => 'Čuljak',
                'pbrRod' => '47000',
                'pbrStan' => '47000',
                'datRodStud' => '1984-12-23 00:00:00',
                'jmbgStud' => '2312984380051',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1214',
                'imeStud' => 'Drago',
                'prezStud' => 'Bartolinčić',
                'pbrRod' => '40000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-05-26 00:00:00',
                'jmbgStud' => '2605985383309',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1216',
                'imeStud' => 'Lidija',
                'prezStud' => 'Leonard',
                'pbrRod' => '43000',
                'pbrStan' => '43000',
                'datRodStud' => '1984-11-09 00:00:00',
                'jmbgStud' => '0911984330036',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1217',
                'imeStud' => 'Lovre',
                'prezStud' => 'Huk',
                'pbrRod' => '52000',
                'pbrStan' => '52000',
                'datRodStud' => '1984-12-11 00:00:00',
                'jmbgStud' => '1112984370017',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1218',
                'imeStud' => 'Majo',
                'prezStud' => 'Hemetek',
                'pbrRod' => '31000',
                'pbrStan' => '31000',
                'datRodStud' => '1985-06-23 00:00:00',
                'jmbgStud' => '2306985340015',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1219',
                'imeStud' => 'Predrag',
                'prezStud' => 'Smirčić',
                'pbrRod' => '21000',
                'pbrStan' => '21000',
                'datRodStud' => '1985-03-17 00:00:00',
                'jmbgStud' => '1703985335145',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1221',
                'imeStud' => 'Slavko',
                'prezStud' => 'Prelec',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-06-27 00:00:00',
                'jmbgStud' => '2706985362104',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1222',
                'imeStud' => 'Dragutin',
                'prezStud' => 'Ladišić',
                'pbrRod' => '34000',
                'pbrStan' => '34000',
                'datRodStud' => '1984-12-15 00:00:00',
                'jmbgStud' => '1512984391826',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1223',
                'imeStud' => 'Kristina',
                'prezStud' => 'Rubinić',
                'pbrRod' => '44000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-07-02 00:00:00',
                'jmbgStud' => '0207985335087',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1225',
                'imeStud' => 'Mirko',
                'prezStud' => 'Dubravić',
                'pbrRod' => '32000',
                'pbrStan' => '32000',
                'datRodStud' => '1984-08-05 00:00:00',
                'jmbgStud' => '0508984380043',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1226',
                'imeStud' => 'Tin',
                'prezStud' => 'Mikulaj',
                'pbrRod' => '42000',
                'pbrStan' => '42000',
                'datRodStud' => '1985-04-11 00:00:00',
                'jmbgStud' => '1104985392619',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1227',
                'imeStud' => 'Dražen',
                'prezStud' => 'Bošnjak',
                'pbrRod' => '51000',
                'pbrStan' => '51000',
                'datRodStud' => '1984-11-24 00:00:00',
                'jmbgStud' => '2411984340712',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1229',
                'imeStud' => 'Vjeran',
                'prezStud' => 'Brezovec',
                'pbrRod' => '44000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-09-24 00:00:00',
                'jmbgStud' => '2409985330058',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1230',
                'imeStud' => 'Predrag',
                'prezStud' => 'Buljat',
                'pbrRod' => '53000',
                'pbrStan' => '53000',
                'datRodStud' => '1985-01-06 00:00:00',
                'jmbgStud' => '0601985320007',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1231',
                'imeStud' => 'Lucija',
                'prezStud' => 'Matijašević',
                'pbrRod' => '32000',
                'pbrStan' => '32000',
                'datRodStud' => '1985-06-03 00:00:00',
                'jmbgStud' => '0306985300888',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1233',
                'imeStud' => 'Renato',
                'prezStud' => 'Stepinac',
                'pbrRod' => '51000',
                'pbrStan' => '51000',
                'datRodStud' => '1985-06-03 00:00:00',
                'jmbgStud' => '0306985300078',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1234',
                'imeStud' => 'Ksenija',
                'prezStud' => 'Pavišić',
                'pbrRod' => '21000',
                'pbrStan' => '10000',
                'datRodStud' => '1981-09-15 00:00:00',
                'jmbgStud' => '1509981330133',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1235',
                'imeStud' => 'Lea',
                'prezStud' => 'Kamenečki',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-01-29 00:00:00',
                'jmbgStud' => '2901985390007',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1237',
                'imeStud' => 'Luka',
                'prezStud' => 'Frankola',
                'pbrRod' => '21000',
                'pbrStan' => '21000',
                'datRodStud' => '1985-08-19 00:00:00',
                'jmbgStud' => '1908985320002',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1238',
                'imeStud' => 'Tihomir',
                'prezStud' => 'Crnković',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-06-22 00:00:00',
                'jmbgStud' => '2206984339303',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1239',
                'imeStud' => 'Duje',
                'prezStud' => 'Šimić',
                'pbrRod' => '20000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-09-07 00:00:00',
                'jmbgStud' => '0709984330054',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1241',
                'imeStud' => 'Ljiljana',
                'prezStud' => 'Valentić',
                'pbrRod' => '10000',
                'pbrStan' => '20000',
                'datRodStud' => '1984-10-04 00:00:00',
                'jmbgStud' => '0410984330044',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1242',
                'imeStud' => 'Alan',
                'prezStud' => 'Samodol',
                'pbrRod' => '20000',
                'pbrStan' => '20000',
                'datRodStud' => '1984-10-12 00:00:00',
                'jmbgStud' => '1210984330177',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1243',
                'imeStud' => 'Lidija',
                'prezStud' => 'Žiljak',
                'pbrRod' => '21000',
                'pbrStan' => '21000',
                'datRodStud' => '1985-01-04 00:00:00',
                'jmbgStud' => '0401985330026',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1245',
                'imeStud' => 'Dujo Davor',
                'prezStud' => 'Folnegović',
                'pbrRod' => '10360',
                'pbrStan' => '10000',
                'datRodStud' => '1984-11-05 00:00:00',
                'jmbgStud' => '0511984391518',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1246',
                'imeStud' => 'Roko',
                'prezStud' => 'Novosel',
                'pbrRod' => '20340',
                'pbrStan' => '10000',
                'datRodStud' => '1985-04-04 00:00:00',
                'jmbgStud' => '0404985335091',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1247',
                'imeStud' => 'Alan',
                'prezStud' => 'Pasanec',
                'pbrRod' => '21450',
                'pbrStan' => '10000',
                'datRodStud' => '1984-09-29 00:00:00',
                'jmbgStud' => '2909984330071',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1249',
                'imeStud' => 'Maja',
                'prezStud' => 'Belić',
                'pbrRod' => '32280',
                'pbrStan' => '10000',
                'datRodStud' => '1985-06-12 00:00:00',
                'jmbgStud' => '1206985330109',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1250',
                'imeStud' => 'Antonijo',
                'prezStud' => 'Franjković',
                'pbrRod' => '35420',
                'pbrStan' => '10000',
                'datRodStud' => '1984-11-23 00:00:00',
                'jmbgStud' => '2311984360005',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1251',
                'imeStud' => 'Lucija',
                'prezStud' => 'Brčić',
                'pbrRod' => '47240',
                'pbrStan' => '10000',
                'datRodStud' => '1985-05-07 00:00:00',
                'jmbgStud' => '0705985391019',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1253',
                'imeStud' => 'Božidar',
                'prezStud' => 'Cetto',
                'pbrRod' => '53230',
                'pbrStan' => '10000',
                'datRodStud' => '1985-05-24 00:00:00',
                'jmbgStud' => '2405985330205',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1254',
                'imeStud' => 'Edo',
                'prezStud' => 'Marić',
                'pbrRod' => '21420',
                'pbrStan' => '21420',
                'datRodStud' => '1985-02-27 00:00:00',
                'jmbgStud' => '2702985390302',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1255',
                'imeStud' => 'Antonijo',
                'prezStud' => 'Dumančić',
                'pbrRod' => '32100',
                'pbrStan' => '32100',
                'datRodStud' => '1984-09-21 00:00:00',
                'jmbgStud' => '2109984302141',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1257',
                'imeStud' => 'Adrian',
                'prezStud' => 'Lukač',
                'pbrRod' => '44320',
                'pbrStan' => '10000',
                'datRodStud' => '1985-08-17 00:00:00',
                'jmbgStud' => '1708985383929',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1258',
                'imeStud' => 'Majo',
                'prezStud' => 'Varga',
                'pbrRod' => '10430',
                'pbrStan' => '10000',
                'datRodStud' => '1984-04-21 00:00:00',
                'jmbgStud' => '2104984340015',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1259',
                'imeStud' => 'Ljiljana',
                'prezStud' => 'Bulić',
                'pbrRod' => '31301',
                'pbrStan' => '10000',
                'datRodStud' => '1984-07-22 00:00:00',
                'jmbgStud' => '2207984383304',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1261',
                'imeStud' => 'Silvana',
                'prezStud' => 'Novosel',
                'pbrRod' => '47302',
                'pbrStan' => '10000',
                'datRodStud' => '1984-12-11 00:00:00',
                'jmbgStud' => '1112984308219',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1262',
                'imeStud' => 'Maja',
                'prezStud' => 'Šeremet',
                'pbrRod' => '40000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-12-17 00:00:00',
                'jmbgStud' => '1712984311413',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1263',
                'imeStud' => 'Davor',
                'prezStud' => 'Plečko',
                'pbrRod' => '42000',
                'pbrStan' => '42000',
                'datRodStud' => '1985-01-05 00:00:00',
                'jmbgStud' => '0501985392729',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1265',
                'imeStud' => 'Marija',
                'prezStud' => 'Barbić',
                'pbrRod' => '31000',
                'pbrStan' => '31000',
                'datRodStud' => '1985-07-12 00:00:00',
                'jmbgStud' => '1207985330096',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1266',
                'imeStud' => 'Eduard',
                'prezStud' => 'Petrović',
                'pbrRod' => '21000',
                'pbrStan' => '21000',
                'datRodStud' => '1984-09-25 00:00:00',
                'jmbgStud' => '2509984383927',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1267',
                'imeStud' => 'Adrijan',
                'prezStud' => 'Vuković',
                'pbrRod' => '44400',
                'pbrStan' => '10000',
                'datRodStud' => '1983-07-12 00:00:00',
                'jmbgStud' => '1207983330073',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1268',
                'imeStud' => 'Adrijana',
                'prezStud' => 'Buršić',
                'pbrRod' => '34000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-05-19 00:00:00',
                'jmbgStud' => '1905985320026',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1270',
                'imeStud' => 'Nino',
                'prezStud' => 'Triska',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-04-25 00:00:00',
                'jmbgStud' => '2504985334318',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1271',
                'imeStud' => 'Marijan',
                'prezStud' => 'Mirošević',
                'pbrRod' => '20000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-08-27 00:00:00',
                'jmbgStud' => '2708985334008',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1272',
                'imeStud' => 'Emil',
                'prezStud' => 'Sertić',
                'pbrRod' => '21000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-04-09 00:00:00',
                'jmbgStud' => '0904985820084',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1274',
                'imeStud' => 'Silvestar',
                'prezStud' => 'Sabljak',
                'pbrRod' => '21000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-05-15 00:00:00',
                'jmbgStud' => '1505984335045',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1275',
                'imeStud' => 'Dubravko',
                'prezStud' => 'Toth',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-07-02 00:00:00',
                'jmbgStud' => '0207985361927',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1276',
                'imeStud' => 'Filip',
                'prezStud' => 'Jurić',
                'pbrRod' => '20000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-05-04 00:00:00',
                'jmbgStud' => '0405985303209',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1278',
                'imeStud' => 'Gordan',
                'prezStud' => 'Dular',
                'pbrRod' => '10000',
                'pbrStan' => '20000',
                'datRodStud' => '1984-11-29 00:00:00',
                'jmbgStud' => '2911984317209',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1279',
                'imeStud' => 'Martina',
                'prezStud' => 'Krizmanić',
                'pbrRod' => '20000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-01-10 00:00:00',
                'jmbgStud' => '1001985383921',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1280',
                'imeStud' => 'Marin',
                'prezStud' => 'Jurić',
                'pbrRod' => '21000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-10-26 00:00:00',
                'jmbgStud' => '2610984311907',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1282',
                'imeStud' => 'Alan',
                'prezStud' => 'Matuna',
                'pbrRod' => '20000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-02-01 00:00:00',
                'jmbgStud' => '0102985334042',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1283',
                'imeStud' => 'Vinko',
                'prezStud' => 'Padovan',
                'pbrRod' => '21000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-04-05 00:00:00',
                'jmbgStud' => '0504985335094',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1284',
                'imeStud' => 'Albert',
                'prezStud' => 'Hunić',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-01-08 00:00:00',
                'jmbgStud' => '0801985366002',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1286',
                'imeStud' => 'Fran',
                'prezStud' => 'Šef',
                'pbrRod' => '21000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-08-21 00:00:00',
                'jmbgStud' => '2108984383317',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1287',
                'imeStud' => 'Adrijan',
                'prezStud' => 'Trnski',
                'pbrRod' => '10000',
                'pbrStan' => '20000',
                'datRodStud' => '1984-03-11 00:00:00',
                'jmbgStud' => '1103984361305',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1288',
                'imeStud' => 'Mirjana',
                'prezStud' => 'Iveković',
                'pbrRod' => '20000',
                'pbrStan' => '20000',
                'datRodStud' => '1985-03-01 00:00:00',
                'jmbgStud' => '0103985320504',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1290',
                'imeStud' => 'Slavica',
                'prezStud' => 'Pavić',
                'pbrRod' => '20000',
                'pbrStan' => '22000',
                'datRodStud' => '1984-12-20 00:00:00',
                'jmbgStud' => '2012984321406',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1291',
                'imeStud' => 'Gordan',
                'prezStud' => 'Kačar',
                'pbrRod' => '21000',
                'pbrStan' => '21000',
                'datRodStud' => '1984-11-15 00:00:00',
                'jmbgStud' => '1511984330125',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1292',
                'imeStud' => 'Juraj',
                'prezStud' => 'Sabljak',
                'pbrRod' => '10000',
                'pbrStan' => '20000',
                'datRodStud' => '1985-02-26 00:00:00',
                'jmbgStud' => '2602985330075',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1294',
                'imeStud' => 'Iva',
                'prezStud' => 'Devčić',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-03-21 00:00:00',
                'jmbgStud' => '2103985330067',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1295',
                'imeStud' => 'Frane',
                'prezStud' => 'Plavetić',
                'pbrRod' => '21000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-01-06 00:00:00',
                'jmbgStud' => '0601985330138',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1296',
                'imeStud' => 'Slavko',
                'prezStud' => 'Petreković',
                'pbrRod' => '10000',
                'pbrStan' => '20000',
                'datRodStud' => '1985-07-23 00:00:00',
                'jmbgStud' => '2307985330036',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1298',
                'imeStud' => 'Marinko',
                'prezStud' => 'Horvat',
                'pbrRod' => '10000',
                'pbrStan' => '20000',
                'datRodStud' => '1985-04-11 00:00:00',
                'jmbgStud' => '1104985390303',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1299',
                'imeStud' => 'Davorka',
                'prezStud' => 'Ilić',
                'pbrRod' => '51000',
                'pbrStan' => '51000',
                'datRodStud' => '1985-04-15 00:00:00',
                'jmbgStud' => '1504985380055',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1300',
                'imeStud' => 'Alenka',
                'prezStud' => 'Lozić',
                'pbrRod' => '51000',
                'pbrStan' => '51000',
                'datRodStud' => '1985-07-22 00:00:00',
                'jmbgStud' => '2207985330193',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1302',
                'imeStud' => 'Lovre',
                'prezStud' => 'Smiljanec',
                'pbrRod' => '31000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-04-17 00:00:00',
                'jmbgStud' => '1704985381105',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1303',
                'imeStud' => 'Juraj',
                'prezStud' => 'Szirovicza',
                'pbrRod' => '31000',
                'pbrStan' => '31000',
                'datRodStud' => '1985-05-23 00:00:00',
                'jmbgStud' => '2305985330039',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1304',
                'imeStud' => 'Mario',
                'prezStud' => 'Babić',
                'pbrRod' => '31000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-07-31 00:00:00',
                'jmbgStud' => '3107984381518',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1306',
                'imeStud' => 'Helena',
                'prezStud' => 'Octenjak',
                'pbrRod' => '47000',
                'pbrStan' => '47000',
                'datRodStud' => '1983-07-14 00:00:00',
                'jmbgStud' => '1407983330042',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1307',
                'imeStud' => 'Franjo',
                'prezStud' => 'Zdilar',
                'pbrRod' => '47000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-09-16 00:00:00',
                'jmbgStud' => '1609984330314',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1308',
                'imeStud' => 'Stipe',
                'prezStud' => 'Pugelnik',
                'pbrRod' => '22000',
                'pbrStan' => '22000',
                'datRodStud' => '1984-12-02 00:00:00',
                'jmbgStud' => '0212984391814',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1310',
                'imeStud' => 'Marko',
                'prezStud' => 'Mateković',
                'pbrRod' => '48000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-06-21 00:00:00',
                'jmbgStud' => '2106985334006',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1311',
                'imeStud' => 'Goran',
                'prezStud' => 'Remenar',
                'pbrRod' => '40000',
                'pbrStan' => '40000',
                'datRodStud' => '1984-05-20 00:00:00',
                'jmbgStud' => '2005984390118',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1312',
                'imeStud' => 'Nina',
                'prezStud' => 'Kućan',
                'pbrRod' => '33000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-06-25 00:00:00',
                'jmbgStud' => '2506985330144',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1314',
                'imeStud' => 'Marko',
                'prezStud' => 'Suhina',
                'pbrRod' => '52000',
                'pbrStan' => '52000',
                'datRodStud' => '1984-10-28 00:00:00',
                'jmbgStud' => '2810984330097',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1315',
                'imeStud' => 'Aljoša',
                'prezStud' => 'Sobol',
                'pbrRod' => '31000',
                'pbrStan' => '31000',
                'datRodStud' => '1985-05-11 00:00:00',
                'jmbgStud' => '1105985335128',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1316',
                'imeStud' => 'Gorana',
                'prezStud' => 'Frljak',
                'pbrRod' => '21000',
                'pbrStan' => '21000',
                'datRodStud' => '1984-05-06 00:00:00',
                'jmbgStud' => '0605984334017',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1317',
                'imeStud' => 'Mijo',
                'prezStud' => 'Vucelić',
                'pbrRod' => '49000',
                'pbrStan' => '49000',
                'datRodStud' => '1985-05-23 00:00:00',
                'jmbgStud' => '2305985383905',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1319',
                'imeStud' => 'Petra',
                'prezStud' => 'Školnik',
                'pbrRod' => '34000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-11-13 00:00:00',
                'jmbgStud' => '1311984330155',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1320',
                'imeStud' => 'Martin',
                'prezStud' => 'Kovačić',
                'pbrRod' => '44000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-09-20 00:00:00',
                'jmbgStud' => '2009984311404',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1321',
                'imeStud' => 'Marko',
                'prezStud' => 'Meljanac',
                'pbrRod' => '53000',
                'pbrStan' => '53000',
                'datRodStud' => '1985-02-09 00:00:00',
                'jmbgStud' => '0902985390011',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1323',
                'imeStud' => 'Ivan',
                'prezStud' => 'Jambrak',
                'pbrRod' => '21000',
                'pbrStan' => '21000',
                'datRodStud' => '1984-06-18 00:00:00',
                'jmbgStud' => '1806984330251',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1324',
                'imeStud' => 'Petar',
                'prezStud' => 'Nemet',
                'pbrRod' => '49000',
                'pbrStan' => '49000',
                'datRodStud' => '1984-11-17 00:00:00',
                'jmbgStud' => '1711984335042',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1325',
                'imeStud' => 'Martina',
                'prezStud' => 'Simon',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-02-03 00:00:00',
                'jmbgStud' => '0302984383304',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1327',
                'imeStud' => 'Andrej',
                'prezStud' => 'Jurić',
                'pbrRod' => '44000',
                'pbrStan' => '44000',
                'datRodStud' => '1983-11-27 00:00:00',
                'jmbgStud' => '2711983370016',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1328',
                'imeStud' => 'Renata',
                'prezStud' => 'Vujnovac',
                'pbrRod' => '53000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-10-08 00:00:00',
                'jmbgStud' => '0810984334302',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1329',
                'imeStud' => 'Mijo',
                'prezStud' => 'Poljak',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-05-26 00:00:00',
                'jmbgStud' => '2605985153755',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1331',
                'imeStud' => 'Gordan',
                'prezStud' => 'Lacković',
                'pbrRod' => '21000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-09-03 00:00:00',
                'jmbgStud' => '0309984330249',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1332',
                'imeStud' => 'Svebor',
                'prezStud' => 'Keščec',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-02-09 00:00:00',
                'jmbgStud' => '0902985383308',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1333',
                'imeStud' => 'Adrijan',
                'prezStud' => 'Fabrični',
                'pbrRod' => '20000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-09-04 00:00:00',
                'jmbgStud' => '0409984391807',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1335',
                'imeStud' => 'Andrija',
                'prezStud' => 'Topolovac',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-04-18 00:00:00',
                'jmbgStud' => '1804985391514',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1336',
                'imeStud' => 'Slavko',
                'prezStud' => 'Hrvojević',
                'pbrRod' => '20000',
                'pbrStan' => '20000',
                'datRodStud' => '1985-06-29 00:00:00',
                'jmbgStud' => '2906985350009',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1337',
                'imeStud' => 'Mate',
                'prezStud' => 'Crnjak',
                'pbrRod' => '21000',
                'pbrStan' => '21000',
                'datRodStud' => '1985-01-19 00:00:00',
                'jmbgStud' => '1901985360076',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1339',
                'imeStud' => 'Andro',
                'prezStud' => 'Popović',
                'pbrRod' => '21000',
                'pbrStan' => '21000',
                'datRodStud' => '1984-12-24 00:00:00',
                'jmbgStud' => '2412984330067',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1340',
                'imeStud' => 'Matej',
                'prezStud' => 'Dukić',
                'pbrRod' => '20230',
                'pbrStan' => '10000',
                'datRodStud' => '1985-08-02 00:00:00',
                'jmbgStud' => '0208985361006',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1341',
                'imeStud' => 'Sanja',
                'prezStud' => 'Babić',
                'pbrRod' => '21240',
                'pbrStan' => '10000',
                'datRodStud' => '1985-06-28 00:00:00',
                'jmbgStud' => '2806985371019',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1343',
                'imeStud' => 'Davorka',
                'prezStud' => 'Kralj',
                'pbrRod' => '31530',
                'pbrStan' => '10000',
                'datRodStud' => '1984-01-05 00:00:00',
                'jmbgStud' => '0501984330031',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1344',
                'imeStud' => 'Sven',
                'prezStud' => 'Rac',
                'pbrRod' => '34330',
                'pbrStan' => '34330',
                'datRodStud' => '1984-12-25 00:00:00',
                'jmbgStud' => '2512984330145',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1345',
                'imeStud' => 'Helena',
                'prezStud' => 'Medved',
                'pbrRod' => '43290',
                'pbrStan' => '10000',
                'datRodStud' => '1984-12-10 00:00:00',
                'jmbgStud' => '1012984320027',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1347',
                'imeStud' => 'Mateo',
                'prezStud' => 'Maković',
                'pbrRod' => '52100',
                'pbrStan' => '52100',
                'datRodStud' => '1985-02-23 00:00:00',
                'jmbgStud' => '2302985363032',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1348',
                'imeStud' => 'Silvana',
                'prezStud' => 'Vrbanić',
                'pbrRod' => '10370',
                'pbrStan' => '10000',
                'datRodStud' => '1985-03-19 00:00:00',
                'jmbgStud' => '1903985110036',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1349',
                'imeStud' => 'Šime',
                'prezStud' => 'Kovačić',
                'pbrRod' => '22010',
                'pbrStan' => '10000',
                'datRodStud' => '1984-09-19 00:00:00',
                'jmbgStud' => '1909984302127',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1351',
                'imeStud' => 'Želimir',
                'prezStud' => 'Babić',
                'pbrRod' => '42250',
                'pbrStan' => '10000',
                'datRodStud' => '1985-02-02 00:00:00',
                'jmbgStud' => '0202985330149',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1352',
                'imeStud' => 'Marko',
                'prezStud' => 'Levačić',
                'pbrRod' => '44410',
                'pbrStan' => '10000',
                'datRodStud' => '1985-07-15 00:00:00',
                'jmbgStud' => '1507985388902',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1353',
                'imeStud' => 'Slavica',
                'prezStud' => 'Đurak',
                'pbrRod' => '34330',
                'pbrStan' => '10000',
                'datRodStud' => '1984-10-13 00:00:00',
                'jmbgStud' => '1310984363004',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1355',
                'imeStud' => 'Ante',
                'prezStud' => 'Budimir',
                'pbrRod' => '51251',
                'pbrStan' => '10000',
                'datRodStud' => '1985-03-01 00:00:00',
                'jmbgStud' => '0103985320023',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1356',
                'imeStud' => 'Matija',
                'prezStud' => 'Bujas',
                'pbrRod' => '40000',
                'pbrStan' => '40000',
                'datRodStud' => '1985-04-22 00:00:00',
                'jmbgStud' => '2204985391517',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1357',
                'imeStud' => 'Nino',
                'prezStud' => 'Barić',
                'pbrRod' => '31000',
                'pbrStan' => '31000',
                'datRodStud' => '1985-03-25 00:00:00',
                'jmbgStud' => '2503985381527',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1359',
                'imeStud' => 'Matija Tvrtko',
                'prezStud' => 'Andrišek',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-01-22 00:00:00',
                'jmbgStud' => '2201985335002',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1360',
                'imeStud' => 'Sunčica',
                'prezStud' => 'Bošnjak',
                'pbrRod' => '21000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-08-25 00:00:00',
                'jmbgStud' => '2508984330069',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1361',
                'imeStud' => 'Anto',
                'prezStud' => 'Globlek',
                'pbrRod' => '44400',
                'pbrStan' => '44400',
                'datRodStud' => '1984-06-14 00:00:00',
                'jmbgStud' => '1406984330053',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1363',
                'imeStud' => 'Matko',
                'prezStud' => 'Grgić',
                'pbrRod' => '32000',
                'pbrStan' => '32000',
                'datRodStud' => '1985-06-08 00:00:00',
                'jmbgStud' => '0806985383315',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1364',
                'imeStud' => 'Antun',
                'prezStud' => 'Ferenc',
                'pbrRod' => '20000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-01-20 00:00:00',
                'jmbgStud' => '2001985302121',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1365',
                'imeStud' => 'Anton',
                'prezStud' => 'Bečić',
                'pbrRod' => '21000',
                'pbrStan' => '21000',
                'datRodStud' => '1985-05-11 00:00:00',
                'jmbgStud' => '1105985330025',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1366',
                'imeStud' => 'Vinko',
                'prezStud' => 'Kontak',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-04-09 00:00:00',
                'jmbgStud' => '0904985330095',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1368',
                'imeStud' => 'Tea',
                'prezStud' => 'Međimorec',
                'pbrRod' => '10000',
                'pbrStan' => '20000',
                'datRodStud' => '1984-07-17 00:00:00',
                'jmbgStud' => '1707984330129',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1369',
                'imeStud' => 'Mato',
                'prezStud' => 'Kobal',
                'pbrRod' => '20000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-07-30 00:00:00',
                'jmbgStud' => '3007984383313',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1370',
                'imeStud' => 'Tibor',
                'prezStud' => 'Poljanec',
                'pbrRod' => '21000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-09-22 00:00:00',
                'jmbgStud' => '2209984370027',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1372',
                'imeStud' => 'Adrijan',
                'prezStud' => 'Herceg',
                'pbrRod' => '20000',
                'pbrStan' => '20000',
                'datRodStud' => '1985-04-30 00:00:00',
                'jmbgStud' => '3004985330071',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1373',
                'imeStud' => 'Antonijo',
                'prezStud' => 'Bilić',
                'pbrRod' => '21000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-12-03 00:00:00',
                'jmbgStud' => '0312984391218',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1374',
                'imeStud' => 'Tea',
                'prezStud' => 'Mihaljević',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-06-28 00:00:00',
                'jmbgStud' => '2806984370019',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1376',
                'imeStud' => 'Darko',
                'prezStud' => 'Mrduljaš',
                'pbrRod' => '21000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-07-16 00:00:00',
                'jmbgStud' => '1607985330152',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1377',
                'imeStud' => 'Davorka',
                'prezStud' => 'Čavrak',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-07-31 00:00:00',
                'jmbgStud' => '3107984390009',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1378',
                'imeStud' => 'Antonio',
                'prezStud' => 'Pamučar',
                'pbrRod' => '20000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-05-10 00:00:00',
                'jmbgStud' => '1005985330166',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1380',
                'imeStud' => 'Tihomir',
                'prezStud' => 'Medić',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-10-15 00:00:00',
                'jmbgStud' => '1510984330055',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1381',
                'imeStud' => 'Antun',
                'prezStud' => 'Balog',
                'pbrRod' => '20000',
                'pbrStan' => '20000',
                'datRodStud' => '1984-08-30 00:00:00',
                'jmbgStud' => '3008984335037',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1382',
                'imeStud' => 'Vlatka',
                'prezStud' => 'Relota',
                'pbrRod' => '21000',
                'pbrStan' => '21000',
                'datRodStud' => '1985-06-11 00:00:00',
                'jmbgStud' => '1106985330115',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1384',
                'imeStud' => 'Helena',
                'prezStud' => 'Budimir',
                'pbrRod' => '21000',
                'pbrStan' => '21000',
                'datRodStud' => '1984-11-18 00:00:00',
                'jmbgStud' => '1811984312506',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1385',
                'imeStud' => 'Tin',
                'prezStud' => 'Krajtner',
                'pbrRod' => '21000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-12-27 00:00:00',
                'jmbgStud' => '2712984330082',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1386',
                'imeStud' => 'Dragan',
                'prezStud' => 'Vidaković',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-12-02 00:00:00',
                'jmbgStud' => '0212984340003',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1388',
                'imeStud' => 'Antun Ivan',
                'prezStud' => 'Šimić',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-01-09 00:00:00',
                'jmbgStud' => '0901985330269',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1389',
                'imeStud' => 'Mihovil',
                'prezStud' => 'Slaviček',
                'pbrRod' => '21000',
                'pbrStan' => '21000',
                'datRodStud' => '1985-08-12 00:00:00',
                'jmbgStud' => '1208985330046',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1390',
                'imeStud' => 'Zdenka',
                'prezStud' => 'Jureta',
                'pbrRod' => '10000',
                'pbrStan' => '20000',
                'datRodStud' => '1985-05-10 00:00:00',
                'jmbgStud' => '1005985391503',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1392',
                'imeStud' => 'Filip',
                'prezStud' => 'Cigrovski',
                'pbrRod' => '51000',
                'pbrStan' => '51000',
                'datRodStud' => '1983-11-27 00:00:00',
                'jmbgStud' => '2711983330077',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1393',
                'imeStud' => 'Stjepan',
                'prezStud' => 'Tomić',
                'pbrRod' => '51000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-05-06 00:00:00',
                'jmbgStud' => '0605985330013',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1394',
                'imeStud' => 'Augustina',
                'prezStud' => 'Šimek',
                'pbrRod' => '51000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-01-15 00:00:00',
                'jmbgStud' => '1501985320515',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1396',
                'imeStud' => 'Gordana',
                'prezStud' => 'Husak',
                'pbrRod' => '31000',
                'pbrStan' => '31000',
                'datRodStud' => '1982-01-18 00:00:00',
                'jmbgStud' => '1801982380065',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1397',
                'imeStud' => 'Mijo',
                'prezStud' => 'Legović',
                'pbrRod' => '31000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-12-28 00:00:00',
                'jmbgStud' => '2812984361908',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1398',
                'imeStud' => 'Zdravka',
                'prezStud' => 'Budiša',
                'pbrRod' => '31000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-01-04 00:00:00',
                'jmbgStud' => '0401985383929',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1400',
                'imeStud' => 'Miljenko',
                'prezStud' => 'Tuđen',
                'pbrRod' => '47000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-07-22 00:00:00',
                'jmbgStud' => '2207984391806',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1401',
                'imeStud' => 'Vinko',
                'prezStud' => 'Marković',
                'pbrRod' => '47000',
                'pbrStan' => '47000',
                'datRodStud' => '1984-10-19 00:00:00',
                'jmbgStud' => '1910984334304',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1402',
                'imeStud' => 'Slavko',
                'prezStud' => 'Kavčič',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-04-15 00:00:00',
                'jmbgStud' => '1504985383908',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1404',
                'imeStud' => 'Željka',
                'prezStud' => 'Puljek',
                'pbrRod' => '44000',
                'pbrStan' => '44000',
                'datRodStud' => '1985-03-05 00:00:00',
                'jmbgStud' => '0503985334317',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1405',
                'imeStud' => 'Jerko',
                'prezStud' => 'Ogresta',
                'pbrRod' => '53000',
                'pbrStan' => '53000',
                'datRodStud' => '1985-01-09 00:00:00',
                'jmbgStud' => '0901985302806',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1406',
                'imeStud' => 'Tomica',
                'prezStud' => 'Lulić',
                'pbrRod' => '32000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-11-20 00:00:00',
                'jmbgStud' => '2011984330107',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1408',
                'imeStud' => 'Mirjana',
                'prezStud' => 'Cesnik',
                'pbrRod' => '51000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-06-01 00:00:00',
                'jmbgStud' => '0106984330014',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1409',
                'imeStud' => 'Berislav',
                'prezStud' => 'Crnković',
                'pbrRod' => '22000',
                'pbrStan' => '22000',
                'datRodStud' => '1985-04-05 00:00:00',
                'jmbgStud' => '0504985330263',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1410',
                'imeStud' => 'Željka',
                'prezStud' => 'Koren',
                'pbrRod' => '35000',
                'pbrStan' => '35000',
                'datRodStud' => '1985-03-12 00:00:00',
                'jmbgStud' => '1203985334304',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1412',
                'imeStud' => 'Hana',
                'prezStud' => 'Birkić',
                'pbrRod' => '40000',
                'pbrStan' => '40000',
                'datRodStud' => '1984-08-10 00:00:00',
                'jmbgStud' => '1008984302118',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1413',
                'imeStud' => 'Antun Ivan',
                'prezStud' => 'Galić',
                'pbrRod' => '33000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-04-20 00:00:00',
                'jmbgStud' => '2004985301006',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1414',
                'imeStud' => 'Tin',
                'prezStud' => 'Šipek',
                'pbrRod' => '43000',
                'pbrStan' => '43000',
                'datRodStud' => '1984-11-24 00:00:00',
                'jmbgStud' => '2411984330174',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1415',
                'imeStud' => 'Tomislav',
                'prezStud' => 'Kovačić',
                'pbrRod' => '52000',
                'pbrStan' => '52000',
                'datRodStud' => '1984-06-15 00:00:00',
                'jmbgStud' => '1506984370008',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1417',
                'imeStud' => 'Toni',
                'prezStud' => 'Merlak',
                'pbrRod' => '35000',
                'pbrStan' => '35000',
                'datRodStud' => '1985-04-13 00:00:00',
                'jmbgStud' => '1304985310024',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1418',
                'imeStud' => 'Davor',
                'prezStud' => 'Roketinec',
                'pbrRod' => '48000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-11-05 00:00:00',
                'jmbgStud' => '0511984330035',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1419',
                'imeStud' => 'Mirko',
                'prezStud' => 'Brečić',
                'pbrRod' => '40000',
                'pbrStan' => '40000',
                'datRodStud' => '1984-10-29 00:00:00',
                'jmbgStud' => '2910984383906',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1421',
                'imeStud' => 'Ljiljana',
                'prezStud' => 'Jokić',
                'pbrRod' => '43000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-03-16 00:00:00',
                'jmbgStud' => '1603985383315',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1422',
                'imeStud' => 'Helena',
                'prezStud' => 'Crnković',
                'pbrRod' => '52000',
                'pbrStan' => '52000',
                'datRodStud' => '1985-04-12 00:00:00',
                'jmbgStud' => '1204985339016',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1423',
                'imeStud' => 'Vjeran',
                'prezStud' => 'Nakić',
                'pbrRod' => '20000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-07-28 00:00:00',
                'jmbgStud' => '2807984311904',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1425',
                'imeStud' => 'Martina',
                'prezStud' => 'Petrinec',
                'pbrRod' => '10000',
                'pbrStan' => '20000',
                'datRodStud' => '1984-10-24 00:00:00',
                'jmbgStud' => '2410984334004',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1426',
                'imeStud' => 'Vanja',
                'prezStud' => 'Bonačić',
                'pbrRod' => '20000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-02-14 00:00:00',
                'jmbgStud' => '1402985391809',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1427',
                'imeStud' => 'Hrvoje',
                'prezStud' => 'Juričić',
                'pbrRod' => '21000',
                'pbrStan' => '21000',
                'datRodStud' => '1985-03-06 00:00:00',
                'jmbgStud' => '0603985330122',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1429',
                'imeStud' => 'Karla',
                'prezStud' => 'Kafadar',
                'pbrRod' => '20000',
                'pbrStan' => '20000',
                'datRodStud' => '1984-08-13 00:00:00',
                'jmbgStud' => '1308984370016',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1430',
                'imeStud' => 'Želimir',
                'prezStud' => 'Pintar',
                'pbrRod' => '21000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-10-24 00:00:00',
                'jmbgStud' => '2410984320029',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1431',
                'imeStud' => 'Franjo',
                'prezStud' => 'Berač',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-04-29 00:00:00',
                'jmbgStud' => '2904985370026',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1433',
                'imeStud' => 'Igor',
                'prezStud' => 'Bogati',
                'pbrRod' => '10380',
                'pbrStan' => '10000',
                'datRodStud' => '1984-11-07 00:00:00',
                'jmbgStud' => '0711984385009',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1434',
                'imeStud' => 'Mijo',
                'prezStud' => 'Vrhoci',
                'pbrRod' => '21210',
                'pbrStan' => '10000',
                'datRodStud' => '1985-03-09 00:00:00',
                'jmbgStud' => '0903985330211',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1435',
                'imeStud' => 'Alan',
                'prezStud' => 'Franc',
                'pbrRod' => '22020',
                'pbrStan' => '10000',
                'datRodStud' => '1984-09-24 00:00:00',
                'jmbgStud' => '2409984392103',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1437',
                'imeStud' => 'Miro',
                'prezStud' => 'Pugar',
                'pbrRod' => '34310',
                'pbrStan' => '10000',
                'datRodStud' => '1984-07-02 00:00:00',
                'jmbgStud' => '0207984335112',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1438',
                'imeStud' => 'Vedran',
                'prezStud' => 'Meštrić',
                'pbrRod' => '42240',
                'pbrStan' => '42240',
                'datRodStud' => '1985-04-07 00:00:00',
                'jmbgStud' => '0704985368003',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1439',
                'imeStud' => 'Josip',
                'prezStud' => 'Škvorc',
                'pbrRod' => '47300',
                'pbrStan' => '10000',
                'datRodStud' => '1985-01-18 00:00:00',
                'jmbgStud' => '1801985392106',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1441',
                'imeStud' => 'Majo',
                'prezStud' => 'Meglaj',
                'pbrRod' => '47220',
                'pbrStan' => '10000',
                'datRodStud' => '1984-06-09 00:00:00',
                'jmbgStud' => '0906984383906',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1442',
                'imeStud' => 'Boris',
                'prezStud' => 'Jertec',
                'pbrRod' => '21450',
                'pbrStan' => '10000',
                'datRodStud' => '1984-02-29 00:00:00',
                'jmbgStud' => '2902984330072',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1443',
                'imeStud' => 'Nataša',
                'prezStud' => 'Cerjan',
                'pbrRod' => '33520',
                'pbrStan' => '33405',
                'datRodStud' => '1984-08-28 00:00:00',
                'jmbgStud' => '2808984335042',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1445',
                'imeStud' => 'Niko',
                'prezStud' => 'Grbić',
                'pbrRod' => '44400',
                'pbrStan' => '10000',
                'datRodStud' => '1985-01-04 00:00:00',
                'jmbgStud' => '0401985330196',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1446',
                'imeStud' => 'Antonijo',
                'prezStud' => 'Nikolić',
                'pbrRod' => '20210',
                'pbrStan' => '10000',
                'datRodStud' => '1984-09-06 00:00:00',
                'jmbgStud' => '0609984330247',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1447',
                'imeStud' => 'Vid',
                'prezStud' => 'Markulinčić',
                'pbrRod' => '31531',
                'pbrStan' => '10000',
                'datRodStud' => '1984-10-14 00:00:00',
                'jmbgStud' => '1410984330114',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1449',
                'imeStud' => 'Nataša',
                'prezStud' => 'Osredečki',
                'pbrRod' => '51211',
                'pbrStan' => '10000',
                'datRodStud' => '1985-05-23 00:00:00',
                'jmbgStud' => '2305985303534',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1450',
                'imeStud' => 'Borislav',
                'prezStud' => 'Gobin',
                'pbrRod' => '42000',
                'pbrStan' => '42000',
                'datRodStud' => '1985-08-04 00:00:00',
                'jmbgStud' => '0408985330169',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1451',
                'imeStud' => 'Mirko',
                'prezStud' => 'Kadić',
                'pbrRod' => '31000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-09-15 00:00:00',
                'jmbgStud' => '1509984382604',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1453',
                'imeStud' => 'Petra',
                'prezStud' => 'Tišlar',
                'pbrRod' => '31000',
                'pbrStan' => '31000',
                'datRodStud' => '1984-06-30 00:00:00',
                'jmbgStud' => '3006984335183',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1454',
                'imeStud' => 'Božidar',
                'prezStud' => 'Sesar',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1983-04-29 00:00:00',
                'jmbgStud' => '2904983383316',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1455',
                'imeStud' => 'Iva',
                'prezStud' => 'Hafner',
                'pbrRod' => '47300',
                'pbrStan' => '10000',
                'datRodStud' => '1984-09-18 00:00:00',
                'jmbgStud' => '1809984340007',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1457',
                'imeStud' => 'Borna',
                'prezStud' => 'Burtina',
                'pbrRod' => '34000',
                'pbrStan' => '34000',
                'datRodStud' => '1985-06-04 00:00:00',
                'jmbgStud' => '0406985380077',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1458',
                'imeStud' => 'Davor',
                'prezStud' => 'Kroflin',
                'pbrRod' => '21000',
                'pbrStan' => '21000',
                'datRodStud' => '1984-09-18 00:00:00',
                'jmbgStud' => '1809984383124',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1459',
                'imeStud' => 'Predrag',
                'prezStud' => 'Vlah',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-11-29 00:00:00',
                'jmbgStud' => '2911984330044',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1461',
                'imeStud' => 'Nenad',
                'prezStud' => 'Toth',
                'pbrRod' => '21000',
                'pbrStan' => '21000',
                'datRodStud' => '1985-04-08 00:00:00',
                'jmbgStud' => '0804985380005',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1462',
                'imeStud' => 'Vilim',
                'prezStud' => 'Živčić',
                'pbrRod' => '20000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-11-10 00:00:00',
                'jmbgStud' => '1011984370839',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1463',
                'imeStud' => 'Ivan',
                'prezStud' => 'Balenović',
                'pbrRod' => '21000',
                'pbrStan' => '10000',
                'datRodStud' => '1983-08-16 00:00:00',
                'jmbgStud' => '1608983335065',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1464',
                'imeStud' => 'Tihomir',
                'prezStud' => 'Fizir',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-05-06 00:00:00',
                'jmbgStud' => '0605985330058',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1466',
                'imeStud' => 'Neven',
                'prezStud' => 'Rubeša',
                'pbrRod' => '21000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-05-23 00:00:00',
                'jmbgStud' => '2305985335025',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1467',
                'imeStud' => 'Tea',
                'prezStud' => 'Stjepanović',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-10-27 00:00:00',
                'jmbgStud' => '2710984330142',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1468',
                'imeStud' => 'Ivana',
                'prezStud' => 'Kuzma',
                'pbrRod' => '20000',
                'pbrStan' => '20000',
                'datRodStud' => '1985-07-09 00:00:00',
                'jmbgStud' => '0907985335135',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1470',
                'imeStud' => 'Dubravko',
                'prezStud' => 'Bartolić',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-11-16 00:00:00',
                'jmbgStud' => '1611984392608',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1471',
                'imeStud' => 'Božidar',
                'prezStud' => 'Ježić',
                'pbrRod' => '20000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-11-26 00:00:00',
                'jmbgStud' => '2611984321729',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1472',
                'imeStud' => 'Ivana',
                'prezStud' => 'Muranić',
                'pbrRod' => '21000',
                'pbrStan' => '21000',
                'datRodStud' => '1985-08-07 00:00:00',
                'jmbgStud' => '0708985381113',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1474',
                'imeStud' => 'Vjekoslav',
                'prezStud' => 'Lacković',
                'pbrRod' => '20000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-10-24 00:00:00',
                'jmbgStud' => '2410984383901',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1475',
                'imeStud' => 'Branimir',
                'prezStud' => 'Bolfek',
                'pbrRod' => '21000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-09-23 00:00:00',
                'jmbgStud' => '2309984330054',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1476',
                'imeStud' => 'Zlatko',
                'prezStud' => 'Perčić',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-02-18 00:00:00',
                'jmbgStud' => '1802985301803',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1478',
                'imeStud' => 'Vid',
                'prezStud' => 'Kulišić',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-04-03 00:00:00',
                'jmbgStud' => '0304985380005',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1479',
                'imeStud' => 'Branko',
                'prezStud' => 'Car',
                'pbrRod' => '10000',
                'pbrStan' => '20000',
                'datRodStud' => '1985-07-19 00:00:00',
                'jmbgStud' => '1907985302136',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1480',
                'imeStud' => 'Vjeran',
                'prezStud' => 'Stipaničev',
                'pbrRod' => '21000',
                'pbrStan' => '21000',
                'datRodStud' => '1984-12-29 00:00:00',
                'jmbgStud' => '2912984330052',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1482',
                'imeStud' => 'Iva',
                'prezStud' => 'Klarin',
                'pbrRod' => '21000',
                'pbrStan' => '21000',
                'datRodStud' => '1984-11-10 00:00:00',
                'jmbgStud' => '1011984383918',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1483',
                'imeStud' => 'Ivica',
                'prezStud' => 'Čučković',
                'pbrRod' => '10000',
                'pbrStan' => '35400',
                'datRodStud' => '1984-12-20 00:00:00',
                'jmbgStud' => '2012984335149',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1484',
                'imeStud' => 'Antun Ivan',
                'prezStud' => 'Pužar',
                'pbrRod' => '21000',
                'pbrStan' => '21000',
                'datRodStud' => '1985-03-13 00:00:00',
                'jmbgStud' => '1303985390025',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1486',
                'imeStud' => 'Iva',
                'prezStud' => 'Kopjar',
                'pbrRod' => '21000',
                'pbrStan' => '21000',
                'datRodStud' => '1985-09-06 00:00:00',
                'jmbgStud' => '0609985380028',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1487',
                'imeStud' => 'Juraj',
                'prezStud' => 'Valjak',
                'pbrRod' => '51000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-04-23 00:00:00',
                'jmbgStud' => '2304984391802',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1488',
                'imeStud' => 'Davor',
                'prezStud' => 'Dilber',
                'pbrRod' => '51000',
                'pbrStan' => '51000',
                'datRodStud' => '1984-10-03 00:00:00',
                'jmbgStud' => '0310984330019',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1490',
                'imeStud' => 'Bruno',
                'prezStud' => 'Hundak',
                'pbrRod' => '31000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-12-21 00:00:00',
                'jmbgStud' => '2112984300052',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1491',
                'imeStud' => 'Jakov',
                'prezStud' => 'Bumbar',
                'pbrRod' => '31000',
                'pbrStan' => '31000',
                'datRodStud' => '1985-01-15 00:00:00',
                'jmbgStud' => '1501985330061',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1492',
                'imeStud' => 'Ivan',
                'prezStud' => 'Kordić',
                'pbrRod' => '31000',
                'pbrStan' => '31000',
                'datRodStud' => '1985-04-12 00:00:00',
                'jmbgStud' => '1204985388117',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1494',
                'imeStud' => 'Franjo',
                'prezStud' => 'Blažević',
                'pbrRod' => '31000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-01-21 00:00:00',
                'jmbgStud' => '2101985301004',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1495',
                'imeStud' => 'Lovre',
                'prezStud' => 'Šimek',
                'pbrRod' => '47000',
                'pbrStan' => '21000',
                'datRodStud' => '1984-11-14 00:00:00',
                'jmbgStud' => '1411984303204',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1496',
                'imeStud' => 'Cvijeta',
                'prezStud' => 'Erceg',
                'pbrRod' => '32000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-08-16 00:00:00',
                'jmbgStud' => '1608985390075',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1498',
                'imeStud' => 'Janko',
                'prezStud' => 'Jakopović',
                'pbrRod' => '51000',
                'pbrStan' => '51000',
                'datRodStud' => '1984-07-06 00:00:00',
                'jmbgStud' => '0607984307828',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1499',
                'imeStud' => 'Vlaho',
                'prezStud' => 'Roginić',
                'pbrRod' => '22000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-04-07 00:00:00',
                'jmbgStud' => '0704985340301',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1500',
                'imeStud' => 'Dalibor',
                'prezStud' => 'Gradečak',
                'pbrRod' => '35000',
                'pbrStan' => '35000',
                'datRodStud' => '1985-05-27 00:00:00',
                'jmbgStud' => '2705985311411',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1502',
                'imeStud' => 'Josip',
                'prezStud' => 'Nikl',
                'pbrRod' => '40000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-09-30 00:00:00',
                'jmbgStud' => '3009984383005',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1503',
                'imeStud' => 'Majo',
                'prezStud' => 'Posavec',
                'pbrRod' => '33000',
                'pbrStan' => '33000',
                'datRodStud' => '1984-09-03 00:00:00',
                'jmbgStud' => '0309984330118',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1504',
                'imeStud' => 'Josip',
                'prezStud' => 'Poljak',
                'pbrRod' => '43000',
                'pbrStan' => '43000',
                'datRodStud' => '1984-12-06 00:00:00',
                'jmbgStud' => '0612984391807',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1506',
                'imeStud' => 'Damir',
                'prezStud' => 'Buković',
                'pbrRod' => '31000',
                'pbrStan' => '31000',
                'datRodStud' => '1984-12-08 00:00:00',
                'jmbgStud' => '0812984383608',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1507',
                'imeStud' => 'Mijo',
                'prezStud' => 'Bitar',
                'pbrRod' => '21000',
                'pbrStan' => '21000',
                'datRodStud' => '1984-12-15 00:00:00',
                'jmbgStud' => '1512984330055',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1508',
                'imeStud' => 'Vlasta',
                'prezStud' => 'Ciković',
                'pbrRod' => '49000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-04-03 00:00:00',
                'jmbgStud' => '0304985330026',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1510',
                'imeStud' => 'Vlatka',
                'prezStud' => 'Ćurković',
                'pbrRod' => '34000',
                'pbrStan' => '34000',
                'datRodStud' => '1984-12-19 00:00:00',
                'jmbgStud' => '1912984360007',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1511',
                'imeStud' => 'Mirko',
                'prezStud' => 'Rech',
                'pbrRod' => '43000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-04-12 00:00:00',
                'jmbgStud' => '1204984321701',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1512',
                'imeStud' => 'Josip',
                'prezStud' => 'Horvat',
                'pbrRod' => '52000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-08-05 00:00:00',
                'jmbgStud' => '0508985383312',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1513',
                'imeStud' => 'Josip',
                'prezStud' => 'Ivanović',
                'pbrRod' => '31000',
                'pbrStan' => '31000',
                'datRodStud' => '1984-07-30 00:00:00',
                'jmbgStud' => '3007984370022',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1515',
                'imeStud' => 'Predrag',
                'prezStud' => 'Fugaj',
                'pbrRod' => '49000',
                'pbrStan' => '49000',
                'datRodStud' => '1984-08-31 00:00:00',
                'jmbgStud' => '3108984334004',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1516',
                'imeStud' => 'Vlatko',
                'prezStud' => 'Bedeniković',
                'pbrRod' => '10000',
                'pbrStan' => '10000',
                'datRodStud' => '1985-01-27 00:00:00',
                'jmbgStud' => '2701985341117',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1517',
                'imeStud' => 'Daniel',
                'prezStud' => 'Kamenar',
                'pbrRod' => '20000',
                'pbrStan' => '10000',
                'datRodStud' => '1984-07-05 00:00:00',
                'jmbgStud' => '0507984312503',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            ),

            Array
            (
                'mbrStud' => '1519',
                'imeStud' => 'Slavko',
                'prezStud' => 'Prstačić',
                'pbrRod' => '10000',
                'pbrStan' => '20000',
                'datRodStud' => '1984-01-15 00:00:00',
                'jmbgStud' => '1501984330074',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
            )

            
        ));
    }
}
