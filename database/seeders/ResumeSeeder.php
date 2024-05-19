<?php

namespace Database\Seeders;

use App\Models\Resume;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Resume::factory()->count(100)->create();
    }
}
