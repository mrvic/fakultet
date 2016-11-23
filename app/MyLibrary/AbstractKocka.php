<?php
/**
 * Created by PhpStorm.
 * User: SkyLucy
 * Date: 13.11.2016.
 * Time: 22:06
 */

namespace App\MyLibrary;


abstract class AbstractKocka
{
    public $broj_strana;
    private $trenutniBroj;
    public function varaj()
    {
        $this->trenutniBroj = random_int(5, 6);
    }
    public function setTrenutni()
    {
        $this->trenutniBroj=3;
    }
    abstract public function sayHello();

}