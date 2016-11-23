<?php

use Illuminate\Database\Seeder;

class OrgJedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // delete orgjed table records
        Schema::disableForeignKeyConstraints();
        
        DB::table('orgjed')->delete();
        DB::table('orgjed')->insert(array(


        Array
        (
            'sifOrgjed' => '6',
            'nazOrgjed' => 'Farmaceutsko-biokemijski fakultet',
            'sifNadorgjed' => '9996',
            'created_at' => NULL,
            'updated_at' => NULL
        ),
Array
(
    'sifOrgjed' => '7',
    'nazOrgjed' => 'Geodetski fakultet',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '9',
    'nazOrgjed' => 'Filozofski fakultet u Rijeci',
    'sifNadorgjed' => '9998',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '10',
    'nazOrgjed' => 'Ekonomski fakultet',
    'sifNadorgjed' => '9997',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '11',
    'nazOrgjed' => 'Kemijsko-tehnološki fakultet',
    'sifNadorgjed' => '9999',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '13',
    'nazOrgjed' => 'Edukacijsko-rehabilitacijski fakultet',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '15',
    'nazOrgjed' => 'Fakultet političkih znanosti',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '16',
    'nazOrgjed' => 'Fakultet organizacije i informatike u Varaždinu',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '18',
    'nazOrgjed' => 'Pravni fakultet',
    'sifNadorgjed' => '9999',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '23',
    'nazOrgjed' => 'Fakultet elektrotehnike, strojarstva i brodogradnje',
    'sifNadorgjed' => '9999',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '33',
    'nazOrgjed' => 'Fakultet za turizam i vanjsku trgovinu',
    'sifNadorgjed' => '9999',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '34',
    'nazOrgjed' => 'Fakultet za fizičku kulturu',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '36',
    'nazOrgjed' => 'Fakultet elektrotehnike i računarstva',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '37',
    'nazOrgjed' => 'Prirodoslovno-matematički fakultet Matematički odjel',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '53',
    'nazOrgjed' => 'Veterinarski fakultet',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '54',
    'nazOrgjed' => 'Arhitektonski fakultet',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '55',
    'nazOrgjed' => 'Ekonomski fakultet',
    'sifNadorgjed' => '9999',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '58',
    'nazOrgjed' => 'Prehrambeno-biotehnološki fakultet',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '62',
    'nazOrgjed' => 'Medicinski fakultet',
    'sifNadorgjed' => '9998',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '63',
    'nazOrgjed' => 'Medicinski fakultet',
    'sifNadorgjed' => '9999',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '65',
    'nazOrgjed' => 'Stomatološki fakultet',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '66',
    'nazOrgjed' => 'Pravni fakultet',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '67',
    'nazOrgjed' => 'Ekonomski fakultet',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '68',
    'nazOrgjed' => 'Šumarski fakultet',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '69',
    'nazOrgjed' => 'Tehnički fakultet',
    'sifNadorgjed' => '9998',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '70',
    'nazOrgjed' => 'Filozofski fakultet',
    'sifNadorgjed' => '9999',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '79',
    'nazOrgjed' => 'Poljoprivredni fakultet',
    'sifNadorgjed' => '9997',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '81',
    'nazOrgjed' => 'Ekonomski fakultet',
    'sifNadorgjed' => '9998',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '82',
    'nazOrgjed' => 'Građevinski fakultet',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '83',
    'nazOrgjed' => 'Građevinski fakultet',
    'sifNadorgjed' => '9999',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '108',
    'nazOrgjed' => 'Medicinski fakultet',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '111',
    'nazOrgjed' => 'Pravni fakultet',
    'sifNadorgjed' => '9997',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '113',
    'nazOrgjed' => 'Prehrambeno tehnološki fakultet',
    'sifNadorgjed' => '9997',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '114',
    'nazOrgjed' => 'Građevinski fakultet',
    'sifNadorgjed' => '9998',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '115',
    'nazOrgjed' => 'Pravni fakultet',
    'sifNadorgjed' => '9998',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '116',
    'nazOrgjed' => 'Hotelijerski fakultet',
    'sifNadorgjed' => '9998',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '117',
    'nazOrgjed' => 'Tekstilno-tehnološki fakultet',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '119',
    'nazOrgjed' => 'Prirodoslovno-matematički fakultet Prirodoslovni odsjeci',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '120',
    'nazOrgjed' => 'Fakultet strojarstva i brodogradnje',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '122',
    'nazOrgjed' => 'Pedagoški fakultet',
    'sifNadorgjed' => '9997',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '124',
    'nazOrgjed' => 'Metalurški fakultet',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '125',
    'nazOrgjed' => 'Fakultet kemijskog inženjerstva i tehnologije',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '128',
    'nazOrgjed' => 'Grafički fakultet',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '130',
    'nazOrgjed' => 'Filozofski fakultet',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '131',
    'nazOrgjed' => 'Učiteljska akademija',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '135',
    'nazOrgjed' => 'Fakultet prometnih znanosti',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '140',
    'nazOrgjed' => 'Filozofski fakultet u Puli',
    'sifNadorgjed' => '9998',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '145',
    'nazOrgjed' => 'Fakultet ekonomije i turizma "Dr. Mijo Mirković"',
    'sifNadorgjed' => '9998',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '149',
    'nazOrgjed' => 'Građevinski fakultet',
    'sifNadorgjed' => '9997',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '152',
    'nazOrgjed' => 'Strojarski fakultet',
    'sifNadorgjed' => '9997',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '160',
    'nazOrgjed' => 'Geotehnički fakultet',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '165',
    'nazOrgjed' => 'Elektrotehnički fakultet',
    'sifNadorgjed' => '9997',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '177',
    'nazOrgjed' => 'Fakultet prirodoslovno matematičkih znanosti i odgojnih podr',
    'sifNadorgjed' => '9999',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '178',
    'nazOrgjed' => 'Agronomski fakultet',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '195',
    'nazOrgjed' => 'Rudarsko-geološko-naftni fakultet',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '203',
    'nazOrgjed' => 'Katolički bogoslovni fakultet',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '215',
    'nazOrgjed' => 'Umjetnička akademija',
    'sifNadorgjed' => '9999',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '224',
    'nazOrgjed' => 'Veleučilište u Dubrovniku',
    'sifNadorgjed' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '236',
    'nazOrgjed' => 'Medicinski fakultet',
    'sifNadorgjed' => '9997',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '239',
    'nazOrgjed' => 'Odjel za pomorstvo u Rijeci',
    'sifNadorgjed' => '9998',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '245',
    'nazOrgjed' => 'Odjel za pomorstvo u Splitu',
    'sifNadorgjed' => '9999',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '262',
    'nazOrgjed' => 'Visoka učiteljska škola',
    'sifNadorgjed' => '9999',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '263',
    'nazOrgjed' => 'Visoka učiteljska škola',
    'sifNadorgjed' => '9999',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '264',
    'nazOrgjed' => 'Visoka učiteljska škola',
    'sifNadorgjed' => '9998',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '265',
    'nazOrgjed' => 'Visoka učiteljska škola',
    'sifNadorgjed' => '9998',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '266',
    'nazOrgjed' => 'Visoka učiteljska škola',
    'sifNadorgjed' => '9998',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '267',
    'nazOrgjed' => 'Visoka učiteljska škola',
    'sifNadorgjed' => '9997',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '302',
    'nazOrgjed' => 'Studij poslovne informatike',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '381',
    'nazOrgjed' => 'Akademija likovnih umjetnosti',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '1053',
    'nazOrgjed' => 'Akademija dramske umjetnosti',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '1298',
    'nazOrgjed' => 'Katolički bogoslovni fakultet',
    'sifNadorgjed' => '9999',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '1349',
    'nazOrgjed' => 'Muzička akademija',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '2223',
    'nazOrgjed' => 'Hrvatski studiji',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '2241',
    'nazOrgjed' => 'Nautički odjel',
    'sifNadorgjed' => '224',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '2242',
    'nazOrgjed' => 'Strojarski odjel',
    'sifNadorgjed' => '224',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '2243',
    'nazOrgjed' => 'Odjel elektrotehnike i računarstva',
    'sifNadorgjed' => '224',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '2244',
    'nazOrgjed' => 'Turistički odjel',
    'sifNadorgjed' => '224',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '8888',
    'nazOrgjed' => 'SPECIMEN',
    'sifNadorgjed' => '9996',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '9996',
    'nazOrgjed' => 'Sveučilište u Zagrebu',
    'sifNadorgjed' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '9997',
    'nazOrgjed' => 'Sveučilište u Osijeku',
    'sifNadorgjed' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '9998',
    'nazOrgjed' => 'Sveučilište u Rijeci',
    'sifNadorgjed' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '9999',
    'nazOrgjed' => 'Sveučilište u Splitu',
    'sifNadorgjed' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100001',
    'nazOrgjed' => 'Zavod za primijenjenu fiziku',
    'sifNadorgjed' => '36',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100002',
    'nazOrgjed' => 'Zavod za primijenjenu matematiku',
    'sifNadorgjed' => '36',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100003',
    'nazOrgjed' => 'Zavod za osnove elektrotehnike i električka mjerenja',
    'sifNadorgjed' => '36',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100004',
    'nazOrgjed' => 'Zavod za elektrostrojarstvo i automatizaciju',
    'sifNadorgjed' => '36',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100005',
    'nazOrgjed' => 'Zavod za visoki napon i energetiku',
    'sifNadorgjed' => '36',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100006',
    'nazOrgjed' => 'Zavod za telekomunikacije',
    'sifNadorgjed' => '36',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100007',
    'nazOrgjed' => 'Zavod za elektroničke sustave i obradbu informacija',
    'sifNadorgjed' => '36',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100008',
    'nazOrgjed' => 'Zavod za automatiku i procesno računarstvo',
    'sifNadorgjed' => '36',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100009',
    'nazOrgjed' => 'Zavod za elektroakustiku',
    'sifNadorgjed' => '36',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100010',
    'nazOrgjed' => 'Zavod za elektroniku, mikroelektroniku, računalne i intelige',
    'sifNadorgjed' => '36',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100011',
    'nazOrgjed' => 'Zavod za radiokomunikacije i visokofrekvencijsku elektroniku',
    'sifNadorgjed' => '36',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100012',
    'nazOrgjed' => 'Centar informacijske potpore',
    'sifNadorgjed' => '36',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100013',
    'nazOrgjed' => 'Služba održavanja',
    'sifNadorgjed' => '100017',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100015',
    'nazOrgjed' => 'Studentska služba',
    'sifNadorgjed' => '100017',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100016',
    'nazOrgjed' => 'Opća i kadrovska služba',
    'sifNadorgjed' => '100017',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100017',
    'nazOrgjed' => 'Tajništvo',
    'sifNadorgjed' => '36',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100020',
    'nazOrgjed' => 'Računovodstvo',
    'sifNadorgjed' => '100017',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100021',
    'nazOrgjed' => 'Bibliotekarska služba',
    'sifNadorgjed' => '100017',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100023',
    'nazOrgjed' => 'Grupa za fiziku',
    'sifNadorgjed' => '100001',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100024',
    'nazOrgjed' => 'Grupa fizikalnih osnova novih energetskih tehnologija',
    'sifNadorgjed' => '100001',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100025',
    'nazOrgjed' => 'Grupa za primijenjenu matematiku',
    'sifNadorgjed' => '100002',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100026',
    'nazOrgjed' => 'Grupa računarskih znanosti',
    'sifNadorgjed' => '100002',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100027',
    'nazOrgjed' => 'Grupa za osnove elektrotehnike',
    'sifNadorgjed' => '100003',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100028',
    'nazOrgjed' => 'Grupa za mjerenja u elektrotehnici',
    'sifNadorgjed' => '100003',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100029',
    'nazOrgjed' => 'Grupa za električne strojeve',
    'sifNadorgjed' => '100004',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100030',
    'nazOrgjed' => 'Grupa za regulaciju električnih strojeva',
    'sifNadorgjed' => '100004',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100031',
    'nazOrgjed' => 'Grupa za tehnologiju',
    'sifNadorgjed' => '100004',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100032',
    'nazOrgjed' => 'Grupa za mehaničke konstrukcije',
    'sifNadorgjed' => '100004',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100033',
    'nazOrgjed' => 'Grupa za električne aparate',
    'sifNadorgjed' => '100004',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100034',
    'nazOrgjed' => 'Grupa za energetsku elektroniku',
    'sifNadorgjed' => '100004',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100035',
    'nazOrgjed' => 'Grupa za elektrometriju',
    'sifNadorgjed' => '36',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100036',
    'nazOrgjed' => 'Grupa za električnu vuču',
    'sifNadorgjed' => '100004',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100037',
    'nazOrgjed' => 'Grupa za metode organizacije',
    'sifNadorgjed' => '36',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100038',
    'nazOrgjed' => 'Grupa za električna postrojenja',
    'sifNadorgjed' => '100005',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100039',
    'nazOrgjed' => 'Grupa za nuklearne elektrane',
    'sifNadorgjed' => '100005',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100040',
    'nazOrgjed' => 'Grupa za prijenos električne energije',
    'sifNadorgjed' => '100005',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100041',
    'nazOrgjed' => 'Grupa za električnu rasvjetu',
    'sifNadorgjed' => '100005',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100042',
    'nazOrgjed' => 'Grupa za električne željeznice',
    'sifNadorgjed' => '100005',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100043',
    'nazOrgjed' => 'Grupa za telekomunikacije i informatiku',
    'sifNadorgjed' => '100006',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100044',
    'nazOrgjed' => 'Grupa za mreže, sisteme i signale',
    'sifNadorgjed' => '100007',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100045',
    'nazOrgjed' => 'Grupa za elektronička mjerenja i biomedicinsku elektroniku',
    'sifNadorgjed' => '100007',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100046',
    'nazOrgjed' => 'Grupa za automatsko upravljanje sistemima',
    'sifNadorgjed' => '100008',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100047',
    'nazOrgjed' => 'Grupa za računarske sisteme i procese',
    'sifNadorgjed' => '100008',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100048',
    'nazOrgjed' => 'Grupa za tonfrekvencijsku i prijemničku elektroniku',
    'sifNadorgjed' => '100009',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100049',
    'nazOrgjed' => 'Grupa za akustiku i elektroakustiku',
    'sifNadorgjed' => '100009',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100050',
    'nazOrgjed' => 'Grupa za elektroničke sklopove',
    'sifNadorgjed' => '100010',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100051',
    'nazOrgjed' => 'Grupa za računarsku tehniku',
    'sifNadorgjed' => '100010',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100052',
    'nazOrgjed' => 'Grupa za radiokomunikacijske sustave',
    'sifNadorgjed' => '100011',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100053',
    'nazOrgjed' => 'Grupa za visokofrekvencijsku elektroniku',
    'sifNadorgjed' => '100011',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100054',
    'nazOrgjed' => 'Grupa za strani jezik',
    'sifNadorgjed' => '100002',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100062',
    'nazOrgjed' => 'Grupa za teoretsku elektrotehniku',
    'sifNadorgjed' => '100003',
    'created_at' => NULL,
    'updated_at' => NULL
),
Array
(
    'sifOrgjed' => '100063',
    'nazOrgjed' => 'Grupa za energetsku elektrotehniku',
    'sifNadorgjed' => '100004',
    'created_at' => NULL,
    'updated_at' => NULL
)
        ));


        Schema::enableForeignKeyConstraints();
    }
}