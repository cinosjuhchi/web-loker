<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\PostSeeder;
use Database\Seeders\CompanySeeder;
use Database\Seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([CategorySeeder::class, CompanySeeder::class, PostSeeder::class, JobCategorySeeder::class]);

        // Menambahkan beberapa user contoh
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'pacino447@gmail.com',
            'username' => 'test',
            'password' => bcrypt('12345678'),
            'number_phone' => '087732762247',
            'category_id' => 1,
            'academy' => 'SMA',
            'description' => 'selesai',
            'status' => 'pending'
        ]);

        // Menambahkan 10 user contoh lainnya
        \App\Models\User::factory(10)->create();
    }
}
