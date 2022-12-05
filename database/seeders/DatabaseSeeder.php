<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Location;
use App\Models\Regions;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Country::factory(9)->create();
        Regions::factory(18)->create();
        Location::factory(36)->create();
    }
}
