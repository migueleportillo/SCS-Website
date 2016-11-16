<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/**
 * This is a template for how the fake data
 * will be create by the factory methods
 * in the various database seeder files
 */


/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Project::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->paragraph,
        'link_to_github' =>
            'https://www.github.com/' . 'profile-name/' . 'my-repo'
    ];
});