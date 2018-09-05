<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use msherer\BeersGenerator\BeersGeneratorProvider;

class BeerFakerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Faker', function($app) {
            $faker = \Faker\Factory::create();
            $faker->addProvider(new BeersGeneratorProvider($faker));
            return $faker;
        });
    }
}
