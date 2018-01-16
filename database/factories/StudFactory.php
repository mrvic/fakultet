<?php
/*
 * pmrvic@partedmagic ~/C/fakultet> php artisan make:factory StudFactory --model=Stud
 * Factory created successfully.
 * 
 */
//'mbrStud' => '1519',
//'imeStud' => 'Slavko',
//'prezStud' => 'Prstačić',
//'pbrRod' => '10000',
//'pbrStan' => '20000',
//'datRodStud' => '1984-01-15 00:00:00',
//'jmbgStud' => '1501984330074',
//'slikaStud' => false,
//'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
//'updated_at' => NULL


use Faker\Generator as Faker;
use Fakultet\Mjesto;
use Fakultet\Stud;
use Illuminate\Support\Carbon;

$factory->define(Stud::class, function (Faker $faker) {
    
    // da bi generirali JMBG treba nam datum rođenja i random 6 znamenakaka 
    $datumRodjenja=$faker->dateTimeBetween('-22 years','-18 years', $timezone = null);
    
    return [
                //'mbrStud' => 1000,  // Nepotrebno jer smo postavili autoincrement u StudTableSeeder.php
                'imeStud' => $faker->firstName,
                'prezStud' => $faker->lastName,
                'pbrRod' => $faker->randomElement(Mjesto::all()->pluck('pbr')->toArray()),
                'pbrStan' => $faker->randomElement(Mjesto::all()->pluck('pbr')->toArray()),
                'datRodStud' => $datumRodjenja,
                'jmbgStud' => date("dm", $datumRodjenja->getTimestamp())
                              .substr(date("Y",$datumRodjenja->getTimestamp()),-3)
                              .$faker->numberBetween($min=100000, $max=400000), //'1501984330074',
                'slikaStud' => false,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => NULL
    ];
});
