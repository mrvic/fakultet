<?php

use Tests\DuskTestCase;
use Laravel\Dusk\Chrome;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Faker\Factory as Faker;

//php artisan make:test StudTest
//php artisan dusk .\tests\4.NaprednoPHP\StudTest.php
//class StudTest extends TestCase {
class StudTest extends DuskTestCase {

    public function testProvjeriViewStud() {
        $this->assertTrue(view()->exists('fakultet.student.index')
                , 'Kreiraj view "\resources\views\fakultet\student\index.blade.php"');

        $this->assertTrue(view()->exists('fakultet.student.edit')
                , 'Kreiraj view "\resources\views\fakultet\student\edit.blade.php"');

        $this->assertTrue(view()->exists('fakultet.student.show')
                , 'Kreiraj view "\resources\views\fakultet\student\show.blade.php"');

        $this->assertTrue(view()->exists('fakultet.student.create')
                , 'Kreiraj view "\resources\views\fakultet\student\create.blade.php"');
    }

    public function testPogledajJeliSeUcitalaListaStudenata() {
        $this->browse(function ($browser) {
            $browser->visit('/studenti')
                    ->assertSee('Svi studenti')
                    ->assertSee('Daniel Kamenar')
                    ->assertDontSee('Ovo je string koji ne smije biti na stranici');
        });
        /*
          $this->visit('/studenti')
          ->see('Svi studenti')
          ->see('Slavko Prstačić')
          ->dontSee('Ovo je string koji ne smije biti na stranici');
         */
    }

public function testStudentCRUD() {
    $this->browse(function ($browser) {
        $faker = Faker::create();
        $student = new \Fakultet\Stud;

        $student->imeStud = $faker->name;
        $student->prezStud = $faker->lastName;
        $student->pbrRod = \Fakultet\Mjesto::all()->first()->pbr;
        $student->pbrStan = \Fakultet\Mjesto::all()->random()->pbr;
        
        /* 
// DUSK javlja grešku: 
Illuminate\Support\ViewErrorBag Object ( [bags:protected] => Array ( [default] => Illuminate\Support\MessageBag Object ( [messages:protected] => Array ( [datRodStud] => Array ( [0] => The dat rod stud does not match the format Y-n-j. ) ) [format:protected] => :message ) ) ) 1
         */
       // $student->datRodStud = $faker->date('Y-n-j');//date('Y-m-d');
        $student->datRodStud = '1984-12-15 00:00:00';
        $student->jmbgStud = 123456789;
        // Prvo kreiramo studenta da nam dodjeli autoincrement mbrStud
        $student->slikaStud = 0; // Input::get('slikaStud');

        $student->save();

        $browser->visit('/studenti')
                ->clickLink('Pokaži ovog studenta')
                ->assertPathIs('/studenti/' . $student->mbrStud)
                ->assertSee($student->prezStud)
                ->clickLink('Uredi ovog studenta')
                ->assertPathIs('/studenti/' . $student->mbrStud . '/edit')
                ->type('jmbgStud',1501984330075)
                ->press('Uredi studenta')
                ->pause(3000)
                ->assertPathIs('/studenti')
                ->clickLink('Uredi ovog studenta')
                ->pause(3000)
                ->assertPathIs('/studenti/' . $student->mbrStud . '/edit')
                // provjera vrijednosti polja forme
                ->assertInputValue('jmbgStud', 1501984330075) 
                ->pause(3000)
                ->type('jmbgStud',1501984330074)
                ->press('Uredi studenta')
                ->assertPathIs('/studenti');

        $student->delete();
    });
// Resetira PRIMARNI KLJUČ mbrStud kako nebi rastao kako dodajemo i brisemo studente
        DB::statement("ALTER TABLE `stud` AUTO_INCREMENT = 1535;");
    }

}

/*
  // stari phpunit nacin testiranja
 * 
  $this->visit('/studenti')
  ->click('Pokaži ovog studenta')
  ->seePageIs('/studenti/'.$student->mbrStud)
  ->see($student->prezStud)
  ->click('Uredi ovog studenta')
  ->seePageIs('/studenti/'.$student->mbrStud.'/edit')
  ->type(1501984330075, 'jmbgStud')
  ->press('Uredi studenta')
  ->seePageIs('/studenti')
  ->click('Uredi ovog studenta')
  ->seePageIs('/studenti/'.$student->mbrStud.'/edit')
  ->see(1501984330075)
  ->type(1501984330074, 'jmbgStud')
  ->press('Uredi studenta')
  ->seePageIs('/studenti');
 */