<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomepageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homepage')->insert([
            [
                'title' => 'Hadir Dengan Tampilan Baru!',
                'description' => 'Myroom telah berganti nama menjadi FutureRoom. Banyak Sekali fitur yang baru!',
                'photo' => 'images\homepage-banner-1.jpg',
            ],
            [
                'title' => 'Wujudkan Kamar Idaman mu bersama FutureRoom',
                'description' => 'Nikmati diskon sebesar 25% untuk project pertama anda bersama mitra kami',
                'photo' => 'images\homepage-banner-2.jpg',
            ],
            [
                'title' => 'Ratusan Designers dan Servicemen menanti anda',
                'description' => 'FutureRoom telah memilih para designer dan servicemen berkualitas dan berpengalaman, serta kamu bisa memilih sesuai dengan kriteria mu!',
                'photo' => 'images\homepage-banner-3.jpg',
            ],
        ]);
    }
}
