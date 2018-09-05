<?php
/**
 * Created by Revision Technology, Corp.
 * Project: bierbrauen
 */

use Faker\Generator as Faker;
use msherer\BeersGenerator\BeersGeneratorProvider;

/**
 * BeerFactory
 */

$factory->define(App\Beer::class, function (Faker $faker) {

    /**
     * Temporary work around to using app/Providers/BeerFakerServiceProvider
     * For some reason we're using two different objects.
     * BeerFakerServiceProvider is using the generic base set of generators and
     * BeerFactory is using the EN_US set of generators and formatters.
     */
    $faker = \Faker\Factory::create();
    $faker->addProvider(new BeersGeneratorProvider($faker));

    $minId = 1;
    $breweriesCount = App\Brewery::count();

    if ($breweriesCount > $minId) {
        $breweriesIds = App\Brewery::pluck('id')->toArray();
        $breweryKey = array_rand($breweriesIds);
        $id = $breweriesIds[$breweryKey];
    } elseif ($breweriesCount == $minId) {
        $id = App\Brewery::get('id')->first()->toArray();
    } else {
        $id = $minId;
    }

    return [
        'name' => $faker->beerGenerator(),
        'brewery_id' => $id
    ];
});