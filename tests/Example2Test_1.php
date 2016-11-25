<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class Example2Test extends TestCase
{
    # ovo je kreirano pomoću naredbe:
    # vagrant@homestead:~/Code/blog$ php artisan make:test Example2Test
    # Test created successfully.
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
}
