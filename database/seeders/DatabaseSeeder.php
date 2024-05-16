<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@gmail.com',
            'username' => 'test',
            'password' => bcrypt('12345678'),
            'number_phone' => '087732762247',
            'category_id' => 1,
            'academy' => 'SMA',
            'description' => 'selesai',
            'status' => 'pending'
        ]);
        $this->call(CategorySeeder::class);
    }
}
