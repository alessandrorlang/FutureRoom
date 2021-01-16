<?php

namespace Database\Seeders;

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
        $this->call(HomepageSeeder::class);
        $this->call(Room_Categories::class);
        $this->call(Room_List::class);
        $this->call(MainFeaturesSeeder::class);
    }
}
