<?php
/**
 * Created by PhpStorm.
 * User: SkyLucy
 * Date: 13.11.2016.
 * Time: 22:07
 */
namespace Fakultet\MyLibrary;

class KockaTest extends \PHPUnit_Framework_TestCase
{
    public function testExistKocka(){
         $this->assertTrue(class_exists(Kocka::class)
                 ,"Klasa kocka ne postoji, jeste li kreirali app\MyLibrary\Kocka.php?");
    }

    public function testKockaHasMethodsAndAtribbutes($myclass=Kocka::class){
              // provjeriti postoji li \App\MyLibrary\Kocka->getTrenutniBroj()
        $this->assertTrue(method_exists($myclass, 'getTrenutniBroj'),  'Klasa Kocka nema metodu getTrenutniBroj()');
        $this->assertClassHasAttribute('broj_strana', $myclass, "Klasa Kocka nema svojstvo 'broj_strana'");  
    }

    public function testAutoControllerCall($myclass=Kocka::class){

        // mogu li dohvatKocku?
         $mojaKockica= new Kocka();
         
         $this->assertEquals($mojaKockica->getTrenutniBroj(), 1, "Trenutni broj nije 1 ili ga ne mogu dohvatiti");
         
         // mogu li promjeniti model auta?
         $mojaKockica->setTrenutni(2);  
         $this->assertEquals($mojaKockica->getTrenutniBroj(), 2," Pokušavam postaviti na broj 2 ali ne uspjevam");
    }  
    
    

    public function testBrojStrana(){
        $this->assertEquals   ((new Kocka())->broj_strana,6);
        $this->assertNotEquals((new Kocka())->broj_strana,5);
        $this->assertNotEquals((new Kocka())->broj_strana,7);
    }

}
