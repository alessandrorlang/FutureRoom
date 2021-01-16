<?php

namespace Database\Seeders;


use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MainFeaturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mainFeatures')->insert([
            [
                'title' => 'New! Memperkenalkan para servicemen',
                'description' => 'Telah hadir para servicemen yang dapat memenuhi kebutuhan reparasi atau hal teknis lainnya pada kediaman anda. Kami telah bekerja sama dengan beberapa
                mitra terpercaya yang dapat memberikan kualitas terbaik untuk anda.',
                'photo' => 'images\mainfeatures\mainfeatures-2.jpg',
            ],
            [
                'title' => 'New! FutureRoom 3D Design',
                'description' => 'Nikmati fitur terbaru kami 3D Design room untuk mewujudkan ruangan sesuai dengan keinginan anda. Fitur ini menggunakan teknologi AR serta sangat mudah
                sekali untuk digunakan.',
                'photo' => 'images\mainfeatures\mainfeatures-1.jpg',
            ],
            [
                'title' => 'Plenty of Room Designs',
                'description' => 'FutureRoom menyediakan berbagai macam ide inspirasi ruangan untuk anda. Terdapat banyak kategori ruangan yang anda
                bisa temui di dalam aplikasi kami. Terdapat juga perkiraan harga estimasi pengeluaran untuk setiap ruangan yang ada di FutureRoom, sehingga anda
                dapat memilih sesuai budget anda.',
                'photo' => 'images\mainfeatures\mainfeatures-3.jpg',
            ],

            [
                'title' => 'New! Stay updated with FutureRoom Feeds',
                'description' => 'FutureRoom memiliki fitur baru yang memungkinkan anda untuk melihat tren desain ataupun update terbaru dari teman - teman pengguna 
                Futureroom lainnya. Tunggu apalagi? ajak teman anda sekarang untuk mengunduh FutureRoom sekarang.',
                'photo' => 'images\mainfeatures\mainfeatures-4.jpg',
            ],
        ]);
    }
}
