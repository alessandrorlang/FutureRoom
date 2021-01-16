<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Room_Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_categories')->insert([
            [
                'category_name' => 'Bedroom'
            ],
            [
                'category_name' => 'Living Room'
            ],
            [
                'category_name' => 'Bathroom'
            ],
            [
                'category_name' => 'Kitchen'
            ],
        ]);
    }
}
