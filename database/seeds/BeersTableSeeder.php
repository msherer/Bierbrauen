<?php
/**
 * Created by Revision Technology, Corp.
 * Project: bierbrauen
 */

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class BeersTableSeeder
 */
class BeersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Beer::class, 5)->create()->each(function ($beer) {
            $beer->save();
        });
    }
}
