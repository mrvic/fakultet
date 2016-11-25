<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class autoTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testAutoController($myclass=\App\Http\Controllers\auto::class){

         // potrebno je napraviti kontroller auto
         // u konzoli: 
         // cd ~/Code/blog
         // php artisan make:controller auto --resource 
        $this->assertTrue(class_exists($myclass),"Kontroller auto ne postoji, jeste li ga kreirali?");
        
        // provjeriti postoji li \App\Http\Controllers\auto->index()
        $this->assertTrue(method_exists($myclass, 'index'),  'Klasa auto nema metodu index');
        $this->assertClassHasAttribute('model', $myclass, "Klasa auto nema svojstvo 'model'");
        
        // mogu li dohvattiti model auta?
         $mojauto= new \App\Http\Controllers\auto();
         
         $this->assertEquals($mojauto->model, 'Audi', "Model auta nije 'Audi' ili ga ne mogu dohvatiti");
         
         // mogu li promjeniti model auta?
         $mojauto->model="BMW";  
          $this->assertEquals($mojauto->model, 'BMW',"Pokušavam postaviti novi model ali ne uspjevam");
         
        
    }
}

