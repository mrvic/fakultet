<?php
namespace Fakultet;
use Illuminate\Database\Eloquent\Model;

//class Zupanija extends Eloquent
class Zupanija extends Model
{
    protected $table    = 'zupanija';
    protected $primaryKey= 'sifZupanija';
    public    $fillable = ['sifZupanija','nazZupanija'];
    
    public function mjesto(){
        //return $this->hasOne('App\Phone', 'foreign_key', 'local_key');
        return $this->hasMany('Mjesto', 'sifZupanija', 'sifZupanija'); 
    }
}