<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Teknologi Informasi',
            'Keuangan dan Perbankan',
            'Energi dan Pertambangan',
            'Konstruksi dan Properti',
            'Manufaktur',
            'Telekomunikasi',
            'Transportasi dan Logistik',
            'Kesehatan dan Farmasi',
            'Ritel dan E-commerce',
            'Pariwisata dan Perhotelan',
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category,
            ]);
        }
    }
}
