<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * The only functions phpunit will recognize as
     * tests is the ones prefixed with "test" or
     * you can annotate the comment above it with
     * "@test" e.g.
     *
     * @test tests that the home page contains
     * the text "Boom!"
     *
     * Use camelCase b/c it will be useful for
     * generating test docs later on
     *
     * @return void
     */
    public function Home()
    {
        // go to web root (/), assert that we don't redirect (seePageAs /)
        // and make sure the text there contains 'Sewanee Computing'
        $this->visit('/')
            ->seePageIs('/')
            ->see('Sewanee Computing');
    }

    /**
     * @test tests that when you click
     * on the About Us link on the home page
     * you are directed to the about us link
     */
    public function AboutUs()
    {
        $this->visit('/')
            ->click('About Us')
            ->seePageIs('/about');
    }
}
