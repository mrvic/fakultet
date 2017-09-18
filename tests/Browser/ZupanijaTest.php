<?php

//use Illuminate\Foundation\Testing\WithoutMiddleware;
//use Illuminate\Foundation\Testing\DatabaseMigrations;
//use Illuminate\Foundation\Testing\DatabaseTransactions;


use Faker\Factory as Faker;
use Fakultet\Zupanija;
use Tests\DuskTestCase;
use Laravel\Dusk\Chrome;

//use Fakultet;

class ZupanijaTest extends DuskTestCase {

    public function testModelZupanija() {
        //$lista_mjesta->Zupanija::find(1)->mjesto;
        //print_r($lista_mjesta);
        //TODO $lista_mjesta->Zupanija::find(1)->mjesto;
        /*
          $z= new Zupanija();
          echo "\n".get_class($this).": ispis Zupanije()\n";
          print_r( $z->fillable);
         */

        $this->assertArraySubset(
                (new Zupanija())->fillable
                , array('sifZupanija', 'nazZupanija')
                , 'Županija mora imati $fillable=["sifZupanija","nazZupanija"] ');
    }

    /**
     * Potrebno je kreirati view-ove unutar:
     * \resources\views\fakultet\zupanija\
     *
     * @return void
     */
    public function testProvjeriViewZupanija() {
        $this->assertTrue(view()->exists('fakultet.zupanija.index')
                , 'Kreiraj view "\resources\views\fakultet\zupanija\index.blade.php"');

        $this->assertTrue(view()->exists('fakultet.zupanija.create')
                , 'Kreiraj view "\resources\views\fakultet\zupanija\create.blade.php"');

        $this->assertTrue(view()->exists('fakultet.zupanija.edit')
                , 'Kreiraj view "\resources\views\fakultet\zupanija\edit.blade.php"');

        $this->assertTrue(view()->exists('fakultet.zupanija.show')
                , 'Kreiraj view "\resources\views\fakultet\zupanija\show.blade.php"');
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPogledajJeliSeUcitalaZupanijaLista() {
        //TODO Treba dopuniti test za Županije
        //static::markTestSkipped('');
        $this->browse(function ($browser) {
            $browser->visit('/zupanija')
                    //->assertSee('Sve županije')
                    ->assertSee('Sve županije')    // ne prepoznaje hr slova?    
                    ->assertdontSee('Ovo je string koji ne smije biti na stranici');
        });
    }

    public function testKlikniNaPokaziZupaniju() {
        $this->browse(function ($browser) {
            $browser->visit('/zupanija')
                    //->click('zupanija-0')  // neće jer nije text linka
                    // mora ovao ako je link ima ID
                    ->visit($browser->attribute('#zupanija-0', 'href'))
                    ->assertPathIs('/zupanija/0');
        });
    }

    public function testKreirajNovo() {
        //static::markTestSkipped('');
        
        $this->browse(function ($browser) {
            $faker = Faker::create();
            $browser->visit('/zupanija/create')
                    //->type("$faker->randomElement(33, 44, 55, 77, 99)", 'sifZupanija')
                    ->type('sifZupanija',"99")  // testiramo brojem 99
                    ->type( 'nazZupanija',"_test_ $faker->city")
                    //->click($browser->attribute('zupanija-dodaj'))
                    ->click('#zupanija-dodaj')
                    //->seePageIs('/zupanija');
                    //->onPage('/zupanija');
                    ->assertPathIs('/zupanija');
        });
    }
     /**
     * @depends testKreirajNovo
     */
    public function testPokusajObrisati() {
        //  static::markTestSkipped('');
        $this->browse(function ($browser) {
            $browser->visit('/zupanija')
                    //->press('Delete this zupanija')
                    ->click('#zupanija-del-99')
                    ->assertSee('Successfully deleted!');
        });
    }

}
