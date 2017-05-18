<?php
// php artisan make:model Dummy -m
namespace Fakultet;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Dummy extends Model
{
public function setimeDummijaAttribute($in){
        // Mutator
        $this->attributes['imeDummija'].= 'XXY';
        $this->attributes['created_at'] = Carbon::now();
    }
}
