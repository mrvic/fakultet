<?php
//use Illuminate\Foundation\Testing\WithoutMiddleware;
//use Illuminate\Foundation\Testing\DatabaseMigrations;
//use Illuminate\Foundation\Testing\DatabaseTransactions;
//use Faker\Factory as Faker;
use Fakultet\Zupanija;
use Fakultet\Mjesto;

class ZupanijaMjestoTest extends TestCase {
    
     /**
     * Na ovaj način preskačemo testove koje ne želimo da se izvrše
     */
    public function testPreskociOvajTest() {    
        $this->markTestSkipped('must be revisited.');
        $this->assertTrue(false);
    }
     
    /**
     * Potrebno je dohvatiti naziv mjesta u Županiji sa šifrom 1 (Zagrebačka)
     * Koje počinje sa "Ko"
     * Ovo radi ali nije dovoljno dobro jer smo upisali PBR
     */
    public function testDohvatiMjestoUZupaniji() {
        $z = new Fakultet\Zupanija;
        
        $this->assertEquals("Kostanjevac",
                           $z->find(1)->mjesto->find(10455)->nazMjesto
                           , 'Mjesto sa pbr 10455 je trebao biti Kostanjevac');
        $this->assertEquals("Brinje",
                           $z->find(9)->mjesto->find(53260)->nazMjesto
                           , 'Mjesto sa pbr 53260 je trebao biti Brinje');
        
    }
          

    /**
     * Potrebno je dohvatiti naziv mjesta u Županiji sa šifrom 1 (Zagrebačka)
     * Koje počinje sa "Ko"
     * OVO radi ali je grozno dohvaćanje pomoću $result[0]['nazMjesto']
     */
    public function testDohvatiMjestoUZupaniji2() {
        $z =new Fakultet\Zupanija;
        
        // Sa get() dobijamo array
        $result=$z->find(1)->mjesto()->where('nazMjesto', 'LIKE', 'Ko%')->get();
        $this->assertEquals("Kostanjevac",
                           $result[0]['nazMjesto']
                           , 'Mjesto sa pbr 10455 je trebao biti Kostanjevac');
    }
    
    /*
     * OVO je jedini ispravan & elegantan način
     * 
     */
    public function testDohvatiMjestoUZupaniji3() {
        $z = Fakultet\Zupanija::find(1);
                
        // Sa first() dobijamo model ili NULL
        $result=$z->mjesto()->where('nazMjesto', 'LIKE', 'Ko%')->first();  
        
        $this->assertEquals("Kostanjevac",
                           $result->nazMjesto
                           , 'Mjesto sa pbr 10455 je trebao biti Kostanjevac');
    }     
    
/**
 * Potrebno je pomoću eloquenta izmjeniti ime mjesta "Kostanjevac" u "STARI Kostanjevac"
 * provjeriti jeli se promjena zbilja dogodila zatim vratiti na staro i opet provjeriti
 */
    public function testEloquentMjestoSave() {
        $m=Mjesto::find(10455);
        $m->nazMjesto="STARI Kostanjevac";
        $m->save();
        $this->assertEquals("STARI Kostanjevac", (new Fakultet\Mjesto)->find(10455)->nazMjesto);
        
        $m=Fakultet\Mjesto::find(10455);
        $m->nazMjesto="Kostanjevac";
        $m->save();
        $this->assertEquals("Kostanjevac", (new Fakultet\Mjesto)->find(10455)->nazMjesto);
    }    
    

    /**
     * Potrebno je promjeniti ime županije vezano uz mjesto na način da
     * se prvo pronađe mjesto sa poštanskim brojem 10455 a nakon toga 
     * se dohvati i izmjeni ime pripadajuće županije
     * podatke sačuvati u bazu, provjeriti pa vratiti na staro
     */
     public function testEloquentMjestoZupanijaSave() {
        $m1=Mjesto::find(10455);
        $this->assertEquals('Zagrebačka',$m1->zupanija->nazZupanija);  
        $m1->zupanija->nazZupanija='Zagrebačka9';
        $m1->push();
        unset($m1);
        
        $m2=Mjesto::find(10455);
        $this->assertEquals('Zagrebačka9',$m2->zupanija->nazZupanija); 
        $m2->zupanija->nazZupanija='Zagrebačka';
        $m2->push();      
        
    }   

}
