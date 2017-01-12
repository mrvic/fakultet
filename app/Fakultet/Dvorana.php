<?php

namespace Fakultet;

use Illuminate\Database\Eloquent\Model;

class Dvorana extends Model
{
    // Ime tablice nije isto kao ime klase pa ga moramo ručno definirati
    protected $table    = 'dvorana';
   
    // primarni ključ nije id pa moramo ručno naglasiti koja kolumna je PK
    protected $primaryKey='oznDvorana'; 
    
    // primarni ključ nije INT pa moramo dodati idući red jer ga laravel 
    // automatizmom casta u int
    public $incrementing = false;
    
    // spječavamo mass promjenu nad poljem PK
    protected $guarded = array('oznDvorana');
    
    // odobravamo mass promjenu nad poljem kapacitet
    protected  $fillable = ['kapacitet'];
    
}
