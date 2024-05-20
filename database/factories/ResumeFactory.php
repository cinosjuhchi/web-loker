<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resume>
 */
class ResumeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => mt_rand(1, 11),
            'company_id' => mt_rand(1, 10),
            'post_id' => mt_rand(1, 30),
            'cv' => $this->faker->url, // Assuming cv is a URL to the CV document
            'description' => $this->faker->paragraph,
            'number_phone' => $this->faker->phoneNumber,
        ];
    }
}
