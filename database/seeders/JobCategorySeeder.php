<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Pengembang Perangkat Lunak',
            'Analisis Data',
            'Administrator Sistem Jaringan',
            'Ahli Keamanan Informasi',
            'Spesialis Cloud Computing',
            'Pengembang Aplikasi Mobile',
            'Spesialis Kecerdasan Buatan (AI)',
            'Ahli Robotik',
            'Pengembang Game',
            'Analisis Keamanan Siber',
        ];

        foreach ($categories as $category) {
            DB::table('job_categories')->insert([
                'name' => $category,
            ]);
        }
    }
}
