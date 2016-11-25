<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
//TODO UBACI BEHAT LIBRARY

class BehatTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testPublicBehat()
    {
//TODO kreiraj testove prema https://www.youtube.com/watch?v=0F7-Rr4s9is
        $this->visit('/')
             ->see('Laravel');
    }
}
