<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $companies = [
            'PT Astra International Tbk',
            'PT Bank Central Asia Tbk',
            'PT Bank Mandiri Tbk',
            'PT Bank Negara Indonesia Tbk',
            'PT Bank Rakyat Indonesia Tbk',
            'PT Pertamina (Persero)',
            'PT Telekomunikasi Indonesia Tbk',
            'PT Unilever Indonesia Tbk',
            'PT Gudang Garam Tbk',
            'PT Indofood Sukses Makmur Tbk'
        ];

        $provinces = [
            'Jawa Barat', 'Jawa Tengah', 'Jawa Timur', 'DKI Jakarta',
            'Banten', 'Bali', 'Sumatera Utara', 'Sumatera Selatan',
            'Kalimantan Timur', 'Sulawesi Selatan'
        ];

        $cities = [
            'Bandung', 'Semarang', 'Surabaya', 'Jakarta',
            'Tangerang', 'Denpasar', 'Medan', 'Palembang',
            'Samarinda', 'Makassar'
        ];

        return [
            'company_name' => $this->faker->unique()->randomElement($companies),
            'company_email' => $this->faker->unique()->safeEmail,
            'slug' => Str::slug($this->faker->unique()->company),
            'password' => bcrypt('password'), // Default password
            'address' => $this->faker->streetAddress . ', ' . $this->faker->randomElement($cities) . ', ' . $this->faker->randomElement($provinces),
            'province' => $this->faker->randomElement($provinces),
            'number_phone' => $this->faker->phoneNumber,
            'photo_profile' => $this->faker->optional()->imageUrl(640, 480, 'business', true, 'Profile'),
            'photo_banner' => $this->faker->optional()->imageUrl(1280, 720, 'business', true, 'Banner'),
            'description' => $this->faker->optional()->paragraph,
            'category_id' => $this->faker->numberBetween(1, 10), // Adjust category_id as needed
            'status' => $this->faker->randomElement(['active', 'pending', 'suspend']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
