<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class zbrojTest extends TestCase
{
    /**
     * @param number $a
     * @param number $b 
     *
     * @dataProvider providerZbroj
     */
    public function testZbroj($a,$b,$c){
           
        $this->assertEquals($a+$b,$c,'Greska! ocekivani zbroj nije jednak rezultatu');
        
    }
    
        public function providerZbroj()
    {
        return array(
            array(1,2,3),
            array(4,2,6),
            array(-777,777,0),
            array(0,2000000000,2000000000),
            array(9.99999999,9.99999999,19.99999998),
            array(1,-2,-1),
            array(15,45,60),
            array(1,2,3),
            array(1,2,3),
            array(1,2,3),
            array(1,2,3)
        );
    }
}

