<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IbuHamilFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name('female'),
            'umur' => $this->faker->numberBetween(18, 45),
            'alamat' => $this->faker->address(),
        ];
    }
}
