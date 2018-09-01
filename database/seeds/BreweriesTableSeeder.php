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
        DB::table('breweries')->insert([
            'name' => str_random(10),
            'website_url' => str_random(10)
        ]);

        DB::table('breweries')->insert([
            'name' => str_random(10),
            'website_url' => str_random(10)
        ]);
    }
}
