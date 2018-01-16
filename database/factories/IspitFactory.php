<?php

/**
pmrvic@partedmagic ~> cd ~/Code/fakultet/
php artisan make:factory IspitFactory --model=Ispit
Factory created successfully.
 */

use Faker\Generator as Faker;
use Fakultet\Ispit;
use Fakultet\Nastavnik;
use Fakultet\Pred;
use Fakultet\Stud;
use Illuminate\Support\Carbon;

$factory->define(Ispit::class, function (Faker $faker) {
return [
'mbrStud'      => $faker->randomElement(Stud::all()->pluck('mbrStud')->toArray()), // '1210', //$faker->randomElement(User::all()->pluck('id')->toArray();)
'sifPred'      => $faker->randomElement(Pred::all()->pluck('sifPred')->toArray()), //'545',
'sifNastavnik' => $faker->randomElement(Nastavnik::all()->pluck('sifNastavnik')->toArray()), //'481',
'datIspit'     => $faker->dateTimeBetween('-3 years','now', $timezone = null), //'2002-10-22 00:00:00',
'ocjena'       => $faker->numberBetween(1,5), 
'created_at'   => Carbon::now()->format('Y-m-d H:i:s'),
'updated_at'   => NULL,
];
});
