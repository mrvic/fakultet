<?php
/**
 * Created by PhpStorm.
 * User: SkyLucy
 * Date: 13.11.2016.
 * Time: 22:06
 */
namespace Fakultet\MyLibrary;


class Kocka Extends AbstractKocka  implements IKocka
{
    public  $broj_strana =6;

    public function baci(){
       $this->trenutniBroj=random_int(1,6);
    }

    public function getTrenutniBroj(){
       return $this->trenutniBroj;
    }
    public function sayHello(){
        return "Hello";
    }

}