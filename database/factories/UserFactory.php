<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => $this->faker->unique()->userName,
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'), // Default password
            'number_phone' => $this->faker->phoneNumber,
            'category_id' => $this->faker->numberBetween(1, 10), // Adjust range as needed
            'datebirth' => $this->faker->optional()->date('Y-m-d'),
            'jk' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'academy' => $this->faker->randomElement(['SMA', 'Diploma', 'Sarjana', 'Magister']),
            'photo' => $this->faker->optional()->imageUrl(640, 480, 'people', true, 'Faker'), // Placeholder image
            'photo_banner' => $this->faker->optional()->imageUrl(640, 480, 'people', true, 'Faker'), // Placeholder image
            'description' => $this->faker->optional()->paragraph,
            'province' => 'DKI Jakarta',
            'status' => $this->faker->randomElement(['active', 'pending', 'suspend']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return $this
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
