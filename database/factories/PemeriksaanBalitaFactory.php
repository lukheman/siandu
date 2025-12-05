<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Balita;
use App\Models\User;

class PemeriksaanBalitaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'balita_id' => Balita::factory(),
            'tanggal' => $this->faker->dateTimeBetween('-6 months', 'now'),
            'berat_badan' => $this->faker->randomFloat(1, 5, 20), // kg
            'tinggi_badan' => $this->faker->randomFloat(1, 50, 120), // cm
            'lingkar_kepala' => $this->faker->randomFloat(1, 20, 55),
            'keterangan' => $this->faker->optional()->sentence(),
            'diperiksa_oleh' => User::factory(),
        ];
    }
}
