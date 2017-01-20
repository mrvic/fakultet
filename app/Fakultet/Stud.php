<?php

namespace Fakultet;

use Illuminate\Database\Eloquent\Model;

/**
 * Stud je dio fakulteta, ima svoju oznaku.
 * 
 * Model kreiramo putem konzole:
 * php artisan make:model Stud --migration
 */
class Stud extends Model
{
    protected $table    = 'stud';
    protected $primaryKey='mbrStud';
    
    public    $fillable = [
        'imeStud',
        'prezStud',
        'pbrRod',
        'pbrStan',
        'datRodStud',
        'jmbgStud'];
    
    function mjesto(){
        return $this->belongsTo('Fakultet\Mjesto', 'pbr');  
    }
}
