<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Faker\Factory as Faker;
use Zupanija;

class ZupanijaTest extends TestCase
{
     /**
     * Potrebno je kreirati view-ove unutar:
     * \resources\views\fakultet\zupanija\
     *
     * @return void
     */
    public function testProvjeriViewZupanija(){
         $this->assertTrue(view()->exists('fakultet.zupanija.index')
                 ,'Kreiraj view "\resources\views\fakultet\zupanija\index.blade.php"');
         
         $this->assertTrue(view()->exists('fakultet.zupanija.create')
                 ,'Kreiraj view "\resources\views\fakultet\zupanija\create.blade.php"');  
         
         $this->assertTrue(view()->exists('fakultet.zupanija.edit')
                 ,'Kreiraj view "\resources\views\fakultet\zupanija\edit.blade.php"');
         
         $this->assertTrue(view()->exists('fakultet.zupanija.show')
                 ,'Kreiraj view "\resources\views\fakultet\zupanija\show.blade.php"');
    }


    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPogledajJeliSeUcitalaZupanijaLista()
    {
        //TODO Treba dopuniti test za Županije
        static::markTestSkipped('');
        $this->visit('/zupanija')
            ->see('Sve županije')
            ->dontSee('Errfor');
        
        $this->assertTrue(true);
    }
    public function testKlikniNaCreateLinkUMeniju()
    {
                static::markTestSkipped('');
        $this->visit('/zupanija')
                ->click('Create a Nerd')
                ->seePageIs('/nerds/create');
    }  
     public function testKlikniNaPokaziZupaniju()
    {
                $this->visit('/zupanija')
                //click('Pokaži ovu županiju') // vjerojatno neće zbog ž ??
                ->click('zupanija-0')     
                ->seePageIs('/zupanija/0');
    }     
    
    public function testKlikniNaButtonCrate()
    {
                static::markTestSkipped('');
        $this->visit('/zupanija')
                ->click('Create a Nerd')
                ->seePageIs('/nerds/create');
    } 
    public function testKreirajNovo()
{
                       //static::markTestSkipped('');
$faker = Faker::create();
        $this->visit('/zupanija/create')
         //->type("$faker->randomElement(33, 44, 55, 77, 99)", 'sifZupanija')
         ->type("99", 'sifZupanija')  // testiramo brojem 99
         ->type("_test_ $faker->city", 'nazZupanija')
         ->press('zupanija-dodaj')
         ->seePageIs('/zupanija');
}
    public function testPokusajObrisati()
    {
                      //  static::markTestSkipped('');
        $this->visit('/zupanija')
                //->press('Delete this zupanija')
                ->press('zupanija-del-99')
                ->see('Successfully deleted');
    } 

    
}
