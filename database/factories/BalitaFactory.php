<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BalitaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama' => $this->faker->firstName(),
            'tgl_lahir' => $this->faker->dateTimeBetween('-5 years', '-1 months'),
            'jenis_kelamin' => $this->faker->randomElement(['L', 'P']),
            'nama_ibu' => $this->faker->name('female'),
            'alamat' => $this->faker->address(),
        ];
    }
}
