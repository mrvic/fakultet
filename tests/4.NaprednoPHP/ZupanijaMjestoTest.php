<?php
//use Illuminate\Foundation\Testing\WithoutMiddleware;
//use Illuminate\Foundation\Testing\DatabaseMigrations;
//use Illuminate\Foundation\Testing\DatabaseTransactions;
//use Faker\Factory as Faker;
use Fakultet\Zupanija;
use Fakultet\Mjesto;

class ZupanijaMjestoTest extends TestCase {

    public function testEloquentMjestoZupanija() {
        $z = new Fakultet\Zupanija;
        $this->assertEquals("Kostanjevac", 
                $z->find(1)->mjesto->find(10455)->nazMjesto
                , 'Mjesto sa pbr 10455 je trebao biti Kostanjevac');
    }

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
    
    
    public function testEloquentMjestoZupanijaSave() {
        
        $this->markTestSkipped('must be revisited.');
        
        
        $z = new Zupanija;
        
        // pokušamo promjeniti ime
        $z->find(1)->mjesto->find(10455)->nazMjesto="NOVI Kostanjevac";
        $z->find(1)->mjesto->find(10455)->save();
        $this->assertEquals("NOVI Kostanjevac", 
                $z->find(1)->mjesto->find(10455)->nazMjesto
                , 'Mjesto sa pbr 10455 je trebao biti Kostanjevac');

        // vraćamo na staro
        $z->find(1)->mjesto->find(10455)->nazMjesto="Kostanjevac";
        $z->find(1)->mjesto->find(10455)->save();
        $this->assertEquals("Kostanjevac", 
                $z->find(1)->mjesto->find(10455)->nazMjesto
                , 'Mjesto sa pbr 10455 je trebao biti Kostanjevac');        
        
    }
    

}
