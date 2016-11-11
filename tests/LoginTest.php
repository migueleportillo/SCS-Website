<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
    /**
     * @test Ensures that when a user signs in,
     * they are directed back to the home page
     * which contains there name
     */
    public function Login() {

        $this->visit('login')
            ->type('iradub0@sewanee.edu','email')
            ->type('helloworld','password')
            ->press('Login')
            ->seePageIs('/')
            ->see('Blaise Iradukunda');
    }
}
