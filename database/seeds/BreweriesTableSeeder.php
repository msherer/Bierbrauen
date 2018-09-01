<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class BreweriesTableSeeder
 *
 * NOTE: For now, populates 'website_url' with a non-url
 */
class BreweriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Brewery::class, 5)->create()->each(function ($brewery) {
            $brewery->save();
        });
    }
}
