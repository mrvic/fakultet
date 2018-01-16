<?php
//php artisan make:model Ispit
namespace Fakultet;
use Illuminate\Database\Eloquent\Model;

class Ispit extends Model
{
    protected $table    = 'ispit';
    public    $fillable = [
        'mbrStud',
        'sifPred',
        'sifNastavnik',
        'datIspit',
        'ocjena',
        'created_at',
        'updated_at'];
    
    
}