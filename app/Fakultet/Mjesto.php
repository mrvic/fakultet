<?php
namespace Fakultet;
use Illuminate\Database\Eloquent\Model;

class Mjesto extends Model
{
    protected $table    = 'mjesto',
              $primaryKey='pbr';
    
    
     /**
     * The attributes that are NOT mass assignable.
     * U ovom primjeru iz modela Fakultet\Zupanija koji je povezan
     * "pbr" se ne može postaviti iz 1:1 ili 1:n relacije
     *
     * @var array
     */
    protected $guarded = array('pbr');
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected  $fillable = ['nazMjesto'];
    
    public function zupanija() {
  
   // Ovo dolje ne radi!, mora se unijeti foreign key od parent modela Fakultet\zupanija
   // return $this->belongsTo('Fakultet\Zupanija');
        
   /**
    *  ispravno!  
    * Sada možemo pozvati modal na slijedeći način:
    *    
    */
   return $this->belongsTo('Fakultet\Zupanija', 'sifZupanija');    

    }

}
