<?php
use Fakultet\MyLibrary\Motor;

class motorClassTest extends TestCase
{
    // Ovo sigurno prolazi, služi za provjeru PHPUNIT-a
    public function testIsPhpunitRunning(){
      $this->assertTrue(TRUE);
      $this->assertTrue(class_exists(TestCase::class));
    }

    /**
     * [pmrvic@partedmagic blog]$ pwd
     * /home/pmrvic/Code/blog
     * [pmrvic@partedmagic blog]$ composer dump-autoload
     * cd ~/Code/blog
     * [pmrvic@partedmagic blog]$ vendor/bin/phpunit /home/pmrvic/Code/blog/tests/
     * @param type $myclass
     */
    public function testMotorExist($myclass= Motor::class){
     // potrebno je napraviti Direktorij app\MyLibrary\
     // unutar njega klasu: Motor.class.php
    $this->assertTrue(class_exists($myclass)
            ,"Ne mogu dohvatiti klasu $myclass je li ga kreirana? Jel dobar Namespace?");
    }
    
    /**
     * @author pmrvic1
     * @param type $myclass
     */
    public function testMotor2Exist($myclass= Fakultet\MyLibrary\Motor::class){
     // potrebno je napraviti Direktorij app\MyLibrary\
     // unutar njega klasu: Motor.class.php
    $this->assertTrue(class_exists($myclass)
            ,"Ne mogu dohvatiti klasu $myclass USE namespacima? Jel dobar Namespace?");
    }
            /**
     * A basic functional test example.
     * @author pmrvic2
     * @return void
     */
    public function testMotorClass(){
        $this->assertEquals(
                (new Motor(20))->zvuk
                ,20
                ,'Klasa motor ima gresku, provjeri je li kreirana sa new Motor(int)');
    }

    
    // OVO RADI! Znači direktan poziv na klasu 
    // radilo je dok nisam pozvao composer dump-autoload
    public function test2MotorClass(){
        // Radi. zakomentirao sam da ne printa na output
        //echo (new Motor(30))->status;
        $this->assertEquals((new Fakultet\MyLibrary\Motor(40))->zvuk,40,  'Klasa Motor ');
        
    }
    
    /**
     * Ovo je primjer testiranja anotacijama!!!! ErrorException InvalidArgumentException
     * @expectedException InvalidArgumentException
     */
    public function testPokusajDaKreiramoMotorSaKrivimArgumentima() {
        // radimo bez try-catch namjerno kako bi izazvali grešku
        // pokušamo kreirati motor tako da namjerno ubacimo string unutra
        
        return new Motor("Bla bla bla");
        
        //$m1=new Motor(55);    // Ovo je ono što klasa očekuje
    }
}

