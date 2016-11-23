<?php

use Illuminate\Database\Seeder;

class PredTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete pred table records
        DB::table('pred')->delete();
        DB::table('pred')->insert(array(


            Array
            (
                'sifPred' => '36',
                'kratPred' => 'TEHNO',
                'nazPred' => 'Elektrotehnička tehnologija',
                'sifOrgjed' => '100003',
                'upisanoStud' => '2',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '37',
                'kratPred' => 'EEL',
                'nazPred' => 'Energetska elektronika',
                'sifOrgjed' => '100005',
                'upisanoStud' => '6',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '39',
                'kratPred' => 'RASAKO',
                'nazPred' => 'Radiorelejne i satelitske komunikacije',
                'sifOrgjed' => '100011',
                'upisanoStud' => '6',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '43',
                'kratPred' => 'ELAK',
                'nazPred' => 'Elektroakustika',
                'sifOrgjed' => '100009',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '47',
                'kratPred' => 'MUE',
                'nazPred' => 'Mjerenja u elektrotehnici',
                'sifOrgjed' => '100003',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '53',
                'kratPred' => 'ELTER',
                'nazPred' => 'Elektrotermija',
                'sifOrgjed' => '100001',
                'upisanoStud' => '1',
                'brojSatiTjedno' => '1',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '56',
                'kratPred' => 'GOMUAK',
                'nazPred' => 'Govorna i muzička akustika',
                'sifOrgjed' => '100009',
                'upisanoStud' => '2',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '57',
                'kratPred' => 'INSKEE',
                'nazPred' => 'Integrirani sklopovi energetske elektronike',
                'sifOrgjed' => '100005',
                'upisanoStud' => '6',
                'brojSatiTjedno' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '58',
                'kratPred' => 'KOELU',
                'nazPred' => 'Komponente elektroničkih uređaja i mjerne metode',
                'sifOrgjed' => '100010',
                'upisanoStud' => '3',
                'brojSatiTjedno' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '59',
                'kratPred' => 'KVELUR',
                'nazPred' => 'Kvaliteta elektroakustičkih uređaja',
                'sifOrgjed' => '100009',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '68',
                'kratPred' => 'PORAK',
                'nazPred' => 'Pokretne radiokomunikacije',
                'sifOrgjed' => '100011',
                'upisanoStud' => '5',
                'brojSatiTjedno' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '70',
                'kratPred' => 'PRAPO',
                'nazPred' => 'Projektiranje radiofrekvencijskih pojačala',
                'sifOrgjed' => '100011',
                'upisanoStud' => '2',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '71',
                'kratPred' => 'PROAK',
                'nazPred' => 'Prostorna akustika',
                'sifOrgjed' => '100009',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '76',
                'kratPred' => 'ULHID',
                'nazPred' => 'Ultrazvuk i hidroakustika',
                'sifOrgjed' => '100009',
                'upisanoStud' => '70',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '98',
                'kratPred' => 'EKELS',
                'nazPred' => 'Ekonomika elektroničkih sistema',
                'sifOrgjed' => '100010',
                'upisanoStud' => '45',
                'brojSatiTjedno' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '99',
                'kratPred' => 'EKONEN',
                'nazPred' => 'Ekonomika u energetici',
                'sifOrgjed' => '100005',
                'upisanoStud' => '21',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '101',
                'kratPred' => 'ELSTR1',
                'nazPred' => 'Električki strojevi I',
                'sifOrgjed' => '100004',
                'upisanoStud' => '1',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '102',
                'kratPred' => 'ELIZNA',
                'nazPred' => 'Elektronički izvori napajanja',
                'sifOrgjed' => '100010',
                'upisanoStud' => '5',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '103',
                'kratPred' => 'ELKOS',
                'nazPred' => 'Elektronički komutacijski sistemi',
                'sifOrgjed' => '100010',
                'upisanoStud' => '10',
                'brojSatiTjedno' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '104',
                'kratPred' => 'EEL-IP',
                'nazPred' => 'Energetska elektronika-izabrana poglavlja',
                'sifOrgjed' => '100005',
                'upisanoStud' => '110',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '105',
                'kratPred' => 'EEL',
                'nazPred' => 'Energetska elektronika',
                'sifOrgjed' => '100005',
                'upisanoStud' => '1',
                'brojSatiTjedno' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '106',
                'kratPred' => 'FLASER',
                'nazPred' => 'Fizika lasera',
                'sifOrgjed' => '100001',
                'upisanoStud' => '2',
                'brojSatiTjedno' => '1',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '107',
                'kratPred' => 'FOSE',
                'nazPred' => 'Fizikalne osnove spremanja energije',
                'sifOrgjed' => '100001',
                'upisanoStud' => '70',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '143',
                'kratPred' => 'OPES',
                'nazPred' => 'Optimalni pogon elektroenergetskog sustava',
                'sifOrgjed' => '100005',
                'upisanoStud' => '1',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '144',
                'kratPred' => 'OETEM',
                'nazPred' => 'Organizacija i eksploatacija telekomunikacijske mreže',
                'sifOrgjed' => '100006',
                'upisanoStud' => '2',
                'brojSatiTjedno' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '146',
                'kratPred' => 'ORAKOM',
                'nazPred' => 'Osnove radiokomunikacija',
                'sifOrgjed' => '100011',
                'upisanoStud' => '8',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '147',
                'kratPred' => 'OELAK',
                'nazPred' => 'Osnove elektroakustike',
                'sifOrgjed' => '100009',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '162',
                'kratPred' => 'PIESS',
                'nazPred' => 'Projektiranje integriranih elektroničkih sklopova',
                'sifOrgjed' => '100010',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '164',
                'kratPred' => 'PIP',
                'nazPred' => 'Projektiranje industrijskih postrojenja',
                'sifOrgjed' => '100004',
                'upisanoStud' => '0',
                'brojSatiTjedno' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '166',
                'kratPred' => 'ZPM06A2',
                'nazPred' => 'Projektiranje programske podrške',
                'sifOrgjed' => '100002',
                'upisanoStud' => '1',
                'brojSatiTjedno' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '167',
                'kratPred' => 'PROTEM',
                'nazPred' => 'Projektiranje telekomunikacijskih mreža',
                'sifOrgjed' => '100006',
                'upisanoStud' => '18',
                'brojSatiTjedno' => '1',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '169',
                'kratPred' => 'RAKOM',
                'nazPred' => 'Radiokomunikacije',
                'sifOrgjed' => '100011',
                'upisanoStud' => '1',
                'brojSatiTjedno' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '174',
                'kratPred' => 'RESE',
                'nazPred' => 'Regulacija električkih strojeva u elektranama',
                'sifOrgjed' => '100004',
                'upisanoStud' => '1',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '181',
                'kratPred' => 'STAEES',
                'nazPred' => 'Stabilnost elektroenergetskih sistema',
                'sifOrgjed' => '100005',
                'upisanoStud' => '2',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '194',
                'kratPred' => 'UNUF',
                'nazPred' => 'Uvod u nuklearnu fiziku',
                'sifOrgjed' => '100001',
                'upisanoStud' => '14',
                'brojSatiTjedno' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '199',
                'kratPred' => 'OSKLOP',
                'nazPred' => 'Osnovni elektronički sklopovi',
                'sifOrgjed' => '100010',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '207',
                'kratPred' => 'TEMRE',
                'nazPred' => 'Telekomunikacijske mreže',
                'sifOrgjed' => '100006',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '209',
                'kratPred' => 'ELENS',
                'nazPred' => 'Elektroenergetski sistem',
                'sifOrgjed' => '100005',
                'upisanoStud' => '10',
                'brojSatiTjedno' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '229',
                'kratPred' => 'OEEN',
                'nazPred' => 'Osnove elektroenergetike',
                'sifOrgjed' => '100005',
                'upisanoStud' => '25',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '232',
                'kratPred' => 'SISTR',
                'nazPred' => 'Sinkroni strojevi',
                'sifOrgjed' => '100004',
                'upisanoStud' => '1',
                'brojSatiTjedno' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '234',
                'kratPred' => 'PTEP',
                'nazPred' => 'Prelaz topline u energ. postrojenjima',
                'sifOrgjed' => '100004',
                'upisanoStud' => '2',
                'brojSatiTjedno' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '238',
                'kratPred' => 'ELSKLOP',
                'nazPred' => 'Elektronički sklopovi',
                'sifOrgjed' => '100010',
                'upisanoStud' => '10',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '241',
                'kratPred' => 'EINKO',
                'nazPred' => 'Elektronička instrumentacija i konstrukcije',
                'sifOrgjed' => '100010',
                'upisanoStud' => '9',
                'brojSatiTjedno' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '249',
                'kratPred' => 'ELMJE',
                'nazPred' => 'Elektronička mjerenja i komponente',
                'sifOrgjed' => '100010',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '253',
                'kratPred' => 'ESIB',
                'nazPred' => 'Energetski sistemi i bilance',
                'sifOrgjed' => '100005',
                'upisanoStud' => '2',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '254',
                'kratPred' => 'FIZ3',
                'nazPred' => 'Fizika III',
                'sifOrgjed' => '100001',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '256',
                'kratPred' => 'NUMAT',
                'nazPred' => 'Numerička matematika',
                'sifOrgjed' => '100002',
                'upisanoStud' => '2',
                'brojSatiTjedno' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '258',
                'kratPred' => 'OPEF',
                'nazPred' => 'Odabrana poglavlja energetske fizike',
                'sifOrgjed' => '100001',
                'upisanoStud' => '1',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '259',
                'kratPred' => 'OPOMAT',
                'nazPred' => 'Odabrana poglavlja matematike',
                'sifOrgjed' => '100002',
                'upisanoStud' => '25',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '260',
                'kratPred' => 'OES',
                'nazPred' => 'Osnove električkih strojeva',
                'sifOrgjed' => '100004',
                'upisanoStud' => '0',
                'brojSatiTjedno' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '262',
                'kratPred' => 'STOMAT',
                'nazPred' => 'Stohastička matematika',
                'sifOrgjed' => '100002',
                'upisanoStud' => '20',
                'brojSatiTjedno' => '1',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '264',
                'kratPred' => 'ELRAČ',
                'nazPred' => 'Elektronička računala',
                'sifOrgjed' => '100010',
                'upisanoStud' => '32',
                'brojSatiTjedno' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '265',
                'kratPred' => 'ELEL1',
                'nazPred' => 'Elektronički elementi',
                'sifOrgjed' => '100010',
                'upisanoStud' => '21',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '266',
                'kratPred' => 'ZFI01O1',
                'nazPred' => 'Fizika I',
                'sifOrgjed' => '100001',
                'upisanoStud' => '70',
                'brojSatiTjedno' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '267',
                'kratPred' => 'ZFI02O2',
                'nazPred' => 'Fizika II',
                'sifOrgjed' => '100001',
                'upisanoStud' => '2',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '271',
                'kratPred' => 'FOE',
                'nazPred' => 'Fizikalne osnove elektrotehnike',
                'sifOrgjed' => '100003',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '273',
                'kratPred' => 'OE',
                'nazPred' => 'Osnove elektrotehnike',
                'sifOrgjed' => '100003',
                'upisanoStud' => '2',
                'brojSatiTjedno' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '277',
                'kratPred' => 'TEOREL',
                'nazPred' => 'Teoretska elektrotehnika',
                'sifOrgjed' => '100003',
                'upisanoStud' => '1',
                'brojSatiTjedno' => '1',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '278',
                'kratPred' => 'EENMR3',
                'nazPred' => 'Elektroenergetske mreže III',
                'sifOrgjed' => '100005',
                'upisanoStud' => '5',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '282',
                'kratPred' => 'EENMR1',
                'nazPred' => 'Elektroenergetske mreže I',
                'sifOrgjed' => '100005',
                'upisanoStud' => '5',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '284',
                'kratPred' => 'ELSKLOP',
                'nazPred' => 'Elektronički sklopovi',
                'sifOrgjed' => '100010',
                'upisanoStud' => '10',
                'brojSatiTjedno' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '285',
                'kratPred' => 'RADAR',
                'nazPred' => 'Radari i radiokomunikacije',
                'sifOrgjed' => '100011',
                'upisanoStud' => '2',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '286',
                'kratPred' => 'RALOTE',
                'nazPred' => 'Radiolokacija i radiotelemetrija',
                'sifOrgjed' => '100011',
                'upisanoStud' => '13',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '288',
                'kratPred' => 'INE03O6',
                'nazPred' => 'Elektronička instrumentacija',
                'sifOrgjed' => '100010',
                'upisanoStud' => '15',
                'brojSatiTjedno' => '1',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '301',
                'kratPred' => 'EPROC',
                'nazPred' => 'Energetski procesi',
                'sifOrgjed' => '100005',
                'upisanoStud' => '2',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '303',
                'kratPred' => 'MAT1',
                'nazPred' => 'Matematika I',
                'sifOrgjed' => '100002',
                'upisanoStud' => '6',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '304',
                'kratPred' => 'MAT2',
                'nazPred' => 'Matematika II',
                'sifOrgjed' => '100002',
                'upisanoStud' => '6',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '305',
                'kratPred' => 'MAT3',
                'nazPred' => 'Matematika III',
                'sifOrgjed' => '100002',
                'upisanoStud' => '17',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '307',
                'kratPred' => 'ISKLOP',
                'nazPred' => 'Integrirani elektronički sklopovi',
                'sifOrgjed' => '100010',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '312',
                'kratPred' => 'UNUF',
                'nazPred' => 'Uvod u nuklearnu fiziku',
                'sifOrgjed' => '100001',
                'upisanoStud' => '13',
                'brojSatiTjedno' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '342',
                'kratPred' => 'NEP-K',
                'nazPred' => 'Nuklearna energetska postrojenja - konstrukcijske vježbe',
                'sifOrgjed' => '100004',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '343',
                'kratPred' => 'ZPM01O1',
                'nazPred' => 'Linearna algebra',
                'sifOrgjed' => '100002',
                'upisanoStud' => '110',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '344',
                'kratPred' => 'ZPM02O1',
                'nazPred' => 'Matematička analiza I',
                'sifOrgjed' => '100002',
                'upisanoStud' => '70',
                'brojSatiTjedno' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '345',
                'kratPred' => 'ZOM01O1',
                'nazPred' => 'Osnove elektrotehnike I',
                'sifOrgjed' => '100003',
                'upisanoStud' => '1',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '346',
                'kratPred' => 'ZPM03O1',
                'nazPred' => 'Primjena računala',
                'sifOrgjed' => '100002',
                'upisanoStud' => '17',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '347',
                'kratPred' => 'ZPM04O2',
                'nazPred' => 'Matematička analiza II',
                'sifOrgjed' => '100002',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '348',
                'kratPred' => 'ZOM02O2',
                'nazPred' => 'Osnove elektrotehnike II',
                'sifOrgjed' => '100003',
                'upisanoStud' => '3',
                'brojSatiTjedno' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '349',
                'kratPred' => 'ZPM2002',
                'nazPred' => 'Programiranje',
                'sifOrgjed' => '100002',
                'upisanoStud' => '15',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '351',
                'kratPred' => 'ZPM06O3',
                'nazPred' => 'Matematička analiza III',
                'sifOrgjed' => '100002',
                'upisanoStud' => '1',
                'brojSatiTjedno' => '1',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '352',
                'kratPred' => 'ZOM03O3',
                'nazPred' => 'Mjerenja u elektrotehnici',
                'sifOrgjed' => '100003',
                'upisanoStud' => '2',
                'brojSatiTjedno' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '353',
                'kratPred' => 'ZSE01O3',
                'nazPred' => 'Energetska elektrotehnika',
                'sifOrgjed' => '100003',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '354',
                'kratPred' => 'ZER3001',
                'nazPred' => 'Elektronički elementi',
                'sifOrgjed' => '100010',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '355',
                'kratPred' => 'ZPM07O3',
                'nazPred' => 'Algoritmi i strukture podataka',
                'sifOrgjed' => '100002',
                'upisanoStud' => '5',
                'brojSatiTjedno' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '356',
                'kratPred' => 'ZPM4001',
                'nazPred' => 'Stohastička i numerička matematika',
                'sifOrgjed' => '100002',
                'upisanoStud' => '13',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '357',
                'kratPred' => 'ZPM4002',
                'nazPred' => 'Diskretna i stohastička matematika',
                'sifOrgjed' => '100002',
                'upisanoStud' => '20',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '358',
                'kratPred' => 'ZOM03O4',
                'nazPred' => 'Mjerenja u elektrotehnici-praktikum',
                'sifOrgjed' => '100003',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '361',
                'kratPred' => 'ZRS01O4',
                'nazPred' => 'Osnove digitalnih računala',
                'sifOrgjed' => '100008',
                'upisanoStud' => '0',
                'brojSatiTjedno' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '362',
                'kratPred' => 'ZER4002',
                'nazPred' => 'Elektronički sklopovi',
                'sifOrgjed' => '100010',
                'upisanoStud' => '40',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '367',
                'kratPred' => 'ZFI03O5',
                'nazPred' => 'Fizika materijala',
                'sifOrgjed' => '100001',
                'upisanoStud' => '45',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '370',
                'kratPred' => 'AUT6003',
                'nazPred' => 'Elektronička instrumentacija i mjerenja',
                'sifOrgjed' => '100010',
                'upisanoStud' => '17',
                'brojSatiTjedno' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '371',
                'kratPred' => 'ZER15A2',
                'nazPred' => 'Složeni elektronički sklopovi',
                'sifOrgjed' => '100010',
                'upisanoStud' => '8',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '372',
                'kratPred' => 'ENE04O6',
                'nazPred' => 'Osnove energetske elektronike',
                'sifOrgjed' => '100005',
                'upisanoStud' => '18',
                'brojSatiTjedno' => '1',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '373',
                'kratPred' => 'ZRS11A2',
                'nazPred' => 'Analiza osjetljivosti, sinteza i optimiranje sustava',
                'sifOrgjed' => '100008',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '374',
                'kratPred' => 'ZRS17A2',
                'nazPred' => 'Procesna mjerenja',
                'sifOrgjed' => '100008',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '376',
                'kratPred' => 'ZRS12A2',
                'nazPred' => 'Otvoreno računarstvo',
                'sifOrgjed' => '100008',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '378',
                'kratPred' => 'ZPM05A2',
                'nazPred' => 'Matematičke osnove optimalnog upravljanja',
                'sifOrgjed' => '100002',
                'upisanoStud' => '25',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '382',
                'kratPred' => 'ENE02O5',
                'nazPred' => 'Električni strojevi i transformatori',
                'sifOrgjed' => '100004',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '384',
                'kratPred' => 'ZOM04O5',
                'nazPred' => 'Teorijska elektrotehnika',
                'sifOrgjed' => '100003',
                'upisanoStud' => '1',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '390',
                'kratPred' => 'ESA07O6',
                'nazPred' => 'Osnove čvrstoće i konstruiranja',
                'sifOrgjed' => '100004',
                'upisanoStud' => '2',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '391',
                'kratPred' => 'ESA5001',
                'nazPred' => 'Osnove električnih strojeva i transformatora',
                'sifOrgjed' => '100004',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '392',
                'kratPred' => 'ESA02O5',
                'nazPred' => 'Energetska elektronika',
                'sifOrgjed' => '100004',
                'upisanoStud' => '2',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '393',
                'kratPred' => 'ESA03O5',
                'nazPred' => 'Elektrotehnički materijali i tehnologija',
                'sifOrgjed' => '100004',
                'upisanoStud' => '110',
                'brojSatiTjedno' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '394',
                'kratPred' => 'ESA6002',
                'nazPred' => 'Kolektorski i elektronički komutirani motori',
                'sifOrgjed' => '100004',
                'upisanoStud' => '1',
                'brojSatiTjedno' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '397',
                'kratPred' => 'INE01O5',
                'nazPred' => 'Elektronička mjerenja i komponente',
                'sifOrgjed' => '100010',
                'upisanoStud' => '2',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '404',
                'kratPred' => 'RKP03O5',
                'nazPred' => 'Elektroakustika',
                'sifOrgjed' => '100009',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '407',
                'kratPred' => 'RKP09O7',
                'nazPred' => 'Optoelektronički sklopovi',
                'sifOrgjed' => '100010',
                'upisanoStud' => '70',
                'brojSatiTjedno' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '410',
                'kratPred' => 'TKI03O5',
                'nazPred' => 'Telekomunikacijske mreže',
                'sifOrgjed' => '100006',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '414',
                'kratPred' => 'ZPM11O5',
                'nazPred' => 'Programske paradigme i jezici',
                'sifOrgjed' => '100002',
                'upisanoStud' => '2',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '419',
                'kratPred' => 'ZPM02A1',
                'nazPred' => 'Operacijska istraživanja',
                'sifOrgjed' => '100002',
                'upisanoStud' => '10',
                'brojSatiTjedno' => '1',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '420',
                'kratPred' => 'ENE6101',
                'nazPred' => 'Energetski izvori',
                'sifOrgjed' => '100005',
                'upisanoStud' => '9',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '423',
                'kratPred' => 'IRB01A1',
                'nazPred' => 'Fizika poluvodiča',
                'sifOrgjed' => '100001',
                'upisanoStud' => '11',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '425',
                'kratPred' => 'ZPM01A1',
                'nazPred' => 'Stohastički procesi',
                'sifOrgjed' => '100002',
                'upisanoStud' => '70',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '429',
                'kratPred' => 'ZPM09O4',
                'nazPred' => 'Numerička matematika',
                'sifOrgjed' => '100002',
                'upisanoStud' => '8',
                'brojSatiTjedno' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '430',
                'kratPred' => 'AUT5002',
                'nazPred' => 'Elektronička računala',
                'sifOrgjed' => '100010',
                'upisanoStud' => '3',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '439',
                'kratPred' => 'ZPM08O4',
                'nazPred' => 'Stohastička matematika',
                'sifOrgjed' => '100002',
                'upisanoStud' => '18',
                'brojSatiTjedno' => '1',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '441',
                'kratPred' => 'ZPM10O4',
                'nazPred' => 'Diskretna matematika',
                'sifOrgjed' => '100002',
                'upisanoStud' => '17',
                'brojSatiTjedno' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '450',
                'kratPred' => 'ENE01O5',
                'nazPred' => 'Energetski procesi',
                'sifOrgjed' => '100005',
                'upisanoStud' => '11',
                'brojSatiTjedno' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '452',
                'kratPred' => 'ENE08O7',
                'nazPred' => 'Elektroenergetske mreže',
                'sifOrgjed' => '100005',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '453',
                'kratPred' => 'ENE09O7',
                'nazPred' => 'Numerička analiza elektroenergetskog sustava',
                'sifOrgjed' => '100005',
                'upisanoStud' => '2',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '458',
                'kratPred' => 'ENE14O8',
                'nazPred' => 'Zaštita i automatika elektroenergetskog sustava',
                'sifOrgjed' => '100005',
                'upisanoStud' => '5',
                'brojSatiTjedno' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '459',
                'kratPred' => 'ENE15O8',
                'nazPred' => 'Energetika i okoliš',
                'sifOrgjed' => '100005',
                'upisanoStud' => '9',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '461',
                'kratPred' => 'ESA04O6',
                'nazPred' => 'Regulacijska tehnika',
                'sifOrgjed' => '100004',
                'upisanoStud' => '2',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '464',
                'kratPred' => 'ESA10O7',
                'nazPred' => 'Elektromotorni pogoni',
                'sifOrgjed' => '100004',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '465',
                'kratPred' => 'ESA11O7',
                'nazPred' => 'Upravljanje elektromotornim pogonima',
                'sifOrgjed' => '100004',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '467',
                'kratPred' => 'ESA13O8',
                'nazPred' => 'Projektiranje industrijskih postrojenja',
                'sifOrgjed' => '100004',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '468',
                'kratPred' => 'ESA14O7',
                'nazPred' => 'Razvod električne energije',
                'sifOrgjed' => '100004',
                'upisanoStud' => '1',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '470',
                'kratPred' => 'ESA16O9',
                'nazPred' => 'Mehatronički sustavi',
                'sifOrgjed' => '100004',
                'upisanoStud' => '2',
                'brojSatiTjedno' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '474',
                'kratPred' => 'AUT06O6',
                'nazPred' => 'Elektronička mjerenja i instrumentacija',
                'sifOrgjed' => '100010',
                'upisanoStud' => '12',
                'brojSatiTjedno' => '1',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '483',
                'kratPred' => 'INE08O7',
                'nazPred' => 'Mikroelektronički sklopovi',
                'sifOrgjed' => '100010',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '489',
                'kratPred' => 'RKP08O7',
                'nazPred' => 'Osnove radiokomunikacijskih sustava',
                'sifOrgjed' => '100011',
                'upisanoStud' => '6',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '490',
                'kratPred' => 'RKP10O7',
                'nazPred' => 'Elektroakustički signali i sustavi',
                'sifOrgjed' => '100009',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '500',
                'kratPred' => 'TKI11O8',
                'nazPred' => 'Pouzdanost telekomunikacijskih sustava',
                'sifOrgjed' => '100006',
                'upisanoStud' => '1',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '505',
                'kratPred' => 'ZER07A1',
                'nazPred' => 'Osnove mikroelektroničkih sklopova',
                'sifOrgjed' => '100010',
                'upisanoStud' => '2',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '509',
                'kratPred' => 'ZFI03A2',
                'nazPred' => 'Fizika lasera',
                'sifOrgjed' => '100001',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '515',
                'kratPred' => 'ZVF01A1',
                'nazPred' => 'Radiolokacija i navigacija',
                'sifOrgjed' => '100011',
                'upisanoStud' => '10',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '517',
                'kratPred' => 'ZEA01A1',
                'nazPred' => 'Ultrazvuk i hidroakustika',
                'sifOrgjed' => '100009',
                'upisanoStud' => '70',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '525',
                'kratPred' => 'ZPM03A1',
                'nazPred' => 'Projektiranje informacijskih sustava',
                'sifOrgjed' => '100002',
                'upisanoStud' => '10',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '528',
                'kratPred' => 'ZRS16A2',
                'nazPred' => 'Upravljanje, slijedni sustavi i senzori u robotici',
                'sifOrgjed' => '100008',
                'upisanoStud' => '3',
                'brojSatiTjedno' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '529',
                'kratPred' => 'FSB13A2',
                'nazPred' => 'Regulacija u energetskim postrojenjima',
                'sifOrgjed' => '100004',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '532',
                'kratPred' => 'ZES15A1',
                'nazPred' => 'Sklopni i zaštitni uređaji u postrojenjima',
                'sifOrgjed' => '100004',
                'upisanoStud' => '1',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '535',
                'kratPred' => 'ZES12A2',
                'nazPred' => 'Projektiranje i konstruiranje u elektrostrojarstvu',
                'sifOrgjed' => '100004',
                'upisanoStud' => '2',
                'brojSatiTjedno' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '541',
                'kratPred' => 'ZEN01A1',
                'nazPred' => 'Pouzdanost elektroenergetskog sustava',
                'sifOrgjed' => '100005',
                'upisanoStud' => '5',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '545',
                'kratPred' => 'IHP10A2',
                'nazPred' => 'Energetski izvori',
                'sifOrgjed' => '100005',
                'upisanoStud' => '3',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '548',
                'kratPred' => 'ZEN04A1',
                'nazPred' => 'Ekonomika u energetici',
                'sifOrgjed' => '100005',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '549',
                'kratPred' => 'ZEN03A1',
                'nazPred' => 'Numerički postupci u elektroenergetici',
                'sifOrgjed' => '100005',
                'upisanoStud' => '5',
                'brojSatiTjedno' => '1',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '554',
                'kratPred' => 'ESA02O5',
                'nazPred' => 'Energetska elektronika',
                'sifOrgjed' => '100004',
                'upisanoStud' => '18',
                'brojSatiTjedno' => '1',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '576',
                'kratPred' => 'ZEN09B1',
                'nazPred' => 'Dinamika elektroenergetskog sustava',
                'sifOrgjed' => '100005',
                'upisanoStud' => '8',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '580',
                'kratPred' => 'ZRS01A1',
                'nazPred' => 'Adaptivno i robusno upravljanje',
                'sifOrgjed' => '100008',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '583',
                'kratPred' => 'ZPM04B1',
                'nazPred' => 'Objektno orijentirano programiranje',
                'sifOrgjed' => '100002',
                'upisanoStud' => '21',
                'brojSatiTjedno' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '588',
                'kratPred' => 'ZRS05B1',
                'nazPred' => 'Inteligentno upravljanje sustavima',
                'sifOrgjed' => '100008',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '589',
                'kratPred' => 'ZRS09B1',
                'nazPred' => 'Identifikacija procesa',
                'sifOrgjed' => '100008',
                'upisanoStud' => '70',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '590',
                'kratPred' => 'ZRS06B1',
                'nazPred' => 'Automatizacija brodskih procesa',
                'sifOrgjed' => '100008',
                'upisanoStud' => '1',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '594',
                'kratPred' => 'ZES09B1',
                'nazPred' => 'Elektronički pretvarači za elektromotorne pogone',
                'sifOrgjed' => '100010',
                'upisanoStud' => '23',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '595',
                'kratPred' => 'ESA15O8',
                'nazPred' => 'Automatizirana ispitivanja elektrotehničkih uređaja',
                'sifOrgjed' => '100004',
                'upisanoStud' => '0',
                'brojSatiTjedno' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '596',
                'kratPred' => 'ZRS02A1',
                'nazPred' => 'Alarmni sustavi',
                'sifOrgjed' => '100008',
                'upisanoStud' => '5',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '604',
                'kratPred' => 'ZES16A1',
                'nazPred' => 'Sinkroni strojevi i uzbude',
                'sifOrgjed' => '100004',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '605',
                'kratPred' => 'ZRS07B1',
                'nazPred' => 'Odabrana poglavlja iz programskog inženjerstva',
                'sifOrgjed' => '100008',
                'upisanoStud' => '1',
                'brojSatiTjedno' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '607',
                'kratPred' => 'ZVF11B1',
                'nazPred' => 'Projektiranje radiofrekvencijskih pojačala',
                'sifOrgjed' => '100011',
                'upisanoStud' => '20',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '609',
                'kratPred' => 'ZVF04A1',
                'nazPred' => 'Numerički postupci u radiokomunikacijama',
                'sifOrgjed' => '100011',
                'upisanoStud' => '23',
                'brojSatiTjedno' => '1',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '610',
                'kratPred' => 'ZRS10B1',
                'nazPred' => 'Vođenje projekata automatike',
                'sifOrgjed' => '100008',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '611',
                'kratPred' => 'ZRS03B1',
                'nazPred' => 'Vođenje i upravljanje plovila',
                'sifOrgjed' => '100008',
                'upisanoStud' => '1',
                'brojSatiTjedno' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '612',
                'kratPred' => 'ZRS08B1',
                'nazPred' => 'Realizacija upravljačkih algoritama i računalnih arhitektura',
                'sifOrgjed' => '100008',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '615',
                'kratPred' => 'ZVF09B1',
                'nazPred' => 'Tehnologija radiofrekvencijskih komponenata',
                'sifOrgjed' => '100011',
                'upisanoStud' => '0',
                'brojSatiTjedno' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '621',
                'kratPred' => 'TKI05B1',
                'nazPred' => 'Razvoj telekomunikacijske programske podrške',
                'sifOrgjed' => '100006',
                'upisanoStud' => '1',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '627',
                'kratPred' => 'TKI08B1',
                'nazPred' => 'Organizacija telekomunikacijske mreže',
                'sifOrgjed' => '100006',
                'upisanoStud' => '2',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '628',
                'kratPred' => 'TKI09B1',
                'nazPred' => 'Informacijski sustav telekmunikacijske mreže',
                'sifOrgjed' => '100006',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '634',
                'kratPred' => 'ZVF05A1',
                'nazPred' => 'Radiotelemetrija',
                'sifOrgjed' => '100011',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '636',
                'kratPred' => 'ZEA03A1',
                'nazPred' => 'Psihoakustika',
                'sifOrgjed' => '100009',
                'upisanoStud' => '1',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '637',
                'kratPred' => 'ZEA05A1',
                'nazPred' => 'Govorna i glazbena akustika',
                'sifOrgjed' => '100009',
                'upisanoStud' => '2',
                'brojSatiTjedno' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '641',
                'kratPred' => 'ESA17O6',
                'nazPred' => 'Električni strojevi',
                'sifOrgjed' => '100004',
                'upisanoStud' => '70',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '642',
                'kratPred' => 'ESA01O5',
                'nazPred' => 'Elektromehanička i elektromagnetska pretvorba',
                'sifOrgjed' => '100004',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '643',
                'kratPred' => 'ESA19O8',
                'nazPred' => 'Razvoj elektrotehničkih proizvoda',
                'sifOrgjed' => '100004',
                'upisanoStud' => '5',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '646',
                'kratPred' => 'ZPM06A2',
                'nazPred' => 'Projektiranje programske podrške',
                'sifOrgjed' => '100002',
                'upisanoStud' => '29',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '650',
                'kratPred' => 'ZPM05O2',
                'nazPred' => 'Programiranje',
                'sifOrgjed' => '100002',
                'upisanoStud' => '17',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '652',
                'kratPred' => 'ZRS16A2',
                'nazPred' => 'Fleksibilni proizvodni sustavi',
                'sifOrgjed' => '100008',
                'upisanoStud' => '18',
                'brojSatiTjedno' => '1',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '653',
                'kratPred' => 'ZRS08B1',
                'nazPred' => 'Realizacija algoritama i računalnih arhitektura',
                'sifOrgjed' => '100008',
                'upisanoStud' => '1',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '654',
                'kratPred' => 'Z0M03O3',
                'nazPred' => 'Mjerenja u elektrotehnici',
                'sifOrgjed' => '100003',
                'upisanoStud' => '2',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '656',
                'kratPred' => 'ZPM06A2',
                'nazPred' => 'Ergonomija računalne i programske opreme',
                'sifOrgjed' => '100002',
                'upisanoStud' => '0',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '657',
                'kratPred' => 'ZRS09B1',
                'nazPred' => 'Identifikacija procesa',
                'sifOrgjed' => '100008',
                'upisanoStud' => '70',
                'brojSatiTjedno' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '658',
                'kratPred' => 'ZPM07A1',
                'nazPred' => 'Osnove baza podataka',
                'sifOrgjed' => '100002',
                'upisanoStud' => '15',
                'brojSatiTjedno' => '2',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '662',
                'kratPred' => 'ENE15O8',
                'nazPred' => 'Energetika i okoliš',
                'sifOrgjed' => '100005',
                'upisanoStud' => '1',
                'brojSatiTjedno' => '3',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            Array
            (
                'sifPred' => '669',
                'kratPred' => 'ZOM03O3',
                'nazPred' => 'Mjerenja u elektrotehnici',
                'sifOrgjed' => '100003',
                'upisanoStud' => '2',
                'brojSatiTjedno' => '4',
                'created_at' => NULL,
                'updated_at' => NULL
            )




        ));
    }
}
