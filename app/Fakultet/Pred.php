<?php

namespace Fakultet;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Stud je dio fakulteta, ima svoju oznaku.
 * 
 * Model kreiramo putem konzole:
 * php artisan make:model Stud --migration
 */
class Pred extends Model
{
    protected $table    = 'pred';
    protected $primaryKey='sifPred';
    
    public    $fillable = [
        'sifPred',
        'kratPred',
        'nazPred',
        'sifOrgjed',
        'upisanoStud',
        'brojSatiTjedno',
        'created_at',
        'updated_at'];
    
   
}
