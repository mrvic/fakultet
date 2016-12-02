<?php
namespace Fakultet;
use Illuminate\Database\Eloquent\Model;

class Mjesto extends Model
{
    protected $table    = 'mjesto',
              $primaryKey='pbr';
    
    public function zupanija() {
        return $this->belongsTo('Zupanija');
    }

}
