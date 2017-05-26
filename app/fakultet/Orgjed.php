<?php

namespace Fakultet;

use Illuminate\Database\Eloquent\Model;

class Orgjed extends Model
{
    protected $table='orgJed';
    protected $primaryKey= 'sifOrgjed';
    public    $fillable = [
        'nazOrgjed',
       'sifNadorgjed'];
    
}
