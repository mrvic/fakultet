<?php
/**
 * Created by PhpStorm.
 * User: SkyLucy
 * Date: 13.11.2016.
 * Time: 22:06
 */

namespace Fakultet\MyLibrary;


abstract class AbstractKocka
{

    protected $trenutniBroj=1;
    
    public function varaj()
    {
        $this->trenutniBroj = random_int(5, 6);
    }
    
    public function setTrenutni($defbroj=3)
    {
        $this->trenutniBroj=$defbroj;
    }
    
    abstract public function sayHello();

}