<?php

/**
 * Stud je dio fakulteta, ima svoju oznaku.
 * 
 * Model kreiramo putem konzole:
 * php artisan make:model Stud --migration
 */
class Stud extends Model
{
    protected $table    = 'stud';
    public    $fillable = ['imeStud','prezStud','pbrRod','pbrStan','datRodStud','jmbgStud'];
}
