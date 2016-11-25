<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Faker\Factory as Faker;
use Nerd;

class NerdTest extends TestCase
{
    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPogledajJeliSeUcitalaNerdsLista()
    {
        //TODO Treba ispraviti Nerds i maknuti Angular pristup
        static::markTestSkipped('');
        $this->visit('/nerds')
            ->see('All the Nerds')
            ->dontSee('Errfor');
        
        $this->assertTrue(true);
    }
    public function testKlikniNaCreateLinkUMeniju()
    {
                static::markTestSkipped('');
        $this->visit('/nerds')
                ->click('Create a Nerd')
                ->seePageIs('/nerds/create');
    }  
    public function testKlikniNaButtonCrate()
    {
                static::markTestSkipped('');
        $this->visit('/nerds')
                ->click('Create a Nerd')
                ->seePageIs('/nerds/create');
    } 
    public function testKreirajNovogNerda()
{
$faker = Faker::create();
        $this->visit('/nerds/create')
         ->type("_brisi $faker->name", 'name')
         ->type("$faker->email", 'email')
         ->select('2','nerd_level')
         ->press('Create the Nerd!')
         ->seePageIs('/nerds');
}
    public function testPokusajObrisatiNerda()
    {
        $this->visit('/nerds')
                ->press('Delete this Nerd')
                ->see('Successfully deleted the nerd!');
    } 

    
}
