<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\IbuHamil;
use App\Models\User;

class PemeriksaanIbuHamilFactory extends Factory
{
    public function definition(): array
    {
        return [
            'ibu_hamil_id' => IbuHamil::factory(),
            'tanggal' => $this->faker->dateTimeBetween('-6 months', 'now'),
            'tekanan_darah' => $this->faker->randomElement(['110/70', '120/80', '130/90']),
            'berat_badan' => $this->faker->randomFloat(1, 40, 90),
            'tinggi_fundus' => $this->faker->randomFloat(1, 10, 38),
            'detak_janin' => $this->faker->randomElement(['Normal', 'Lemah', 'Kuat']),
            'keterangan' => $this->faker->optional()->sentence(),
            'diperiksa_oleh' => User::factory(),
        ];
    }
}
