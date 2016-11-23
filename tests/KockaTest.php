<?php
/**
 * Created by PhpStorm.
 * User: SkyLucy
 * Date: 13.11.2016.
 * Time: 22:07
 */

namespace App\MyLibrary;


class KockaTest extends \PHPUnit_Framework_TestCase
{
    public function testBrojStrana(){
        $this->assertEquals   ((new Kocka())->broj_strana,6);
        $this->assertNotEquals((new Kocka())->broj_strana,5);
        $this->assertNotEquals((new Kocka())->broj_strana,7);
    }

}
