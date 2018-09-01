<?php

use Faker\Generator as Faker;

/**
 * BreweryFactory
 */
$factory->define(App\Brewery::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'website_url' => $faker->url()
    ];
});
