<?php
class PoljaTest extends TestCase {

    function testUsporediDvaPolja() {
        // Pripremi prvo polje za usporedbu
        $arr1 = Array(
            'boja' => Array
                (
                '0' => 'crvena',
                '1' => 'zuta',
                '2' => 'plava'
            ),
            'broj' => 1
        );

        // Pripremi drugo polje za usporedbu
        $arr2 = ['boja' => ['crvena', 'zuta', 'plava'],'broj' => 1];

        // Usporedi dva arraya
        $this->assertArraySubset($arr1, $arr2);
    }

}
