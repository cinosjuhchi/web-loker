<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;
use App\Models\Post;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * 
     */
    protected $model = Post::class;
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 4)),
            'slug' => $this->faker->slug(),
            'content' => $this->faker->sentence(mt_rand(2, 10)),
            'id_company' => mt_rand(1, 10),
            'id_category' => mt_rand(1, 10),
            'salary' => $this->faker->numberBetween(1000000, 100000000),
        ];
    }
}
