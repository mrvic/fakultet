<?php
namespace Fakultet;
use Illuminate\Database\Eloquent\Model;

//class Zupanija extends Eloquent  // prije verzije laravela 5.3
/**
 * Zupanija je dio fakulteta, ima ima oznaku zupanije te vezu 1-n prema mjestima.
 * 
 * Model kreiramo putem konzole:
 * php artisan make:model Zupanija --migration
 */
class Zupanija extends Model
{
    protected $table    = 'zupanija';
    protected $primaryKey= 'sifZupanija';
    
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected  $fillable = ['sifZupanija','nazZupanija'];
    public  $fillable = ['sifZupanija','nazZupanija'];
    

    
    public function mjesto(){
        //return $this->hasOne('App\Phone', 'foreign_key', 'local_key');
        return $this->hasMany('Fakultet\Mjesto', 'sifZupanija', 'sifZupanija'); 
    }
    
    public function getnazZupanijaAttribute(){
        // Accessor
        return $this->attributes['nazZupanija'];
    }
    
    public function setnazZupanijaAttribute($in){
        // Mutator
        // 
        // BDD
        // - Koristeći http://localhost:8000/zupanija
        // - kada se klikne na uredi županiju
        // - kada se unese MALIM SLOVIMA ime županije
        // - tada pretvori prvo slovo u veliko
        $this->attributes['nazZupanija']=  ucfirst($in);
    }

    
}
#--------- TINKER -------------------
    /*
[pmrvic@partedmagic ~]$ cd Code/fakultet/
[pmrvic@partedmagic fakultet]$ php artisan tinker
  >>> $z=new Fakultet\Zupanija;
=> Fakultet\Zupanija {#817}
>>> $z::all();
=> Illuminate\Database\Eloquent\Collection {#848
     all: [
       Fakultet\Zupanija {#849
         sifZupanija: "0",
         nazZupanija: "Nepoznata županija",
         created_at: null,
         updated_at: "2016-12-01 13:24:26",
       },

>>> $z->find(1);                                                                                                                                                        
=> Fakultet\Zupanija {#830
     sifZupanija: "1",
     nazZupanija: "Zagrebačka",
     created_at: null,
     updated_at: null,
   }
>>> $z->find(1)->mjesto;
=> Illuminate\Database\Eloquent\Collection {#811
     all: [
       Fakultet\Mjesto {#825
         pbr: "10250",
         nazMjesto: "Lučko",
         sifZupanija: "1",
         created_at: null,
         updated_at: null,
       },
       Fakultet\Mjesto {#829
         pbr: "10255",
         nazMjesto: "Gornji Stupnik",
         sifZupanija: "1",
         created_at: null,
         updated_at: null,
       },

>>> $z->find(1)->mjesto->find(10455)->nazMjesto="Kostanjevac NOVI NAZIV";                                                                                               
=> "Kostanjevac NOVI NAZIV"
>>> $z->find(1)->mjesto->find(10455)->save();                                                                                                                           
=> true
>>> 

     * 
     * 
     * 
     */

