<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 11/15/16
 * Time: 12:57 AM
 */

use App\User;

/*
 * These are the test user's credentials
 */
define('USER_NAME', "Blezzoh");
define('USER_EMAIL', "temp@helloworld.com");
define('USER_PASS', "password");

class ValidRecord
{
    /**
     * Creates a valid test user for interacting
     * with the database
     * @return User a valid test user instance
     */
    public static function make()
    {
        $blaise = new User();
        $blaise->name = USER_NAME;
        $blaise->email = USER_EMAIL;
        $blaise->password = Hash::make(USER_PASS);
        $blaise->saveOrFail();
        return $blaise;
    }

    /**
     * Wipes database of any records/tables and
     * remigrates tables to databse; use if you need
     * to be certain that extraneous data in DB is not
     * messing up your tests. BUT it is VERY slow
     * so make sure you actually need it
     */
    public static function artisanMigrateRefresh()
    {
        Artisan::call('migrate:refresh');
    }
}