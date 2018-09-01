<?php

use Illuminate\Database\Seeder;

/**
 * Class DatabaseSeeder
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        // $this->call(BreweriesTableSeeder::class);

        factory(App\Brewery::class, 5)->create()->each(function ($brewery) {
            $brewery->save();
        });
    }
}
