<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IbuHamilFactory extends Factory
{
    public function definition(): array
    {
        $hpht = $this->faker->dateTimeBetween('-7 months', '-1 months');
        $hpl = (clone $hpht)->modify('+9 months');

        return [
            'nama' => $this->faker->name('female'),
            'umur' => $this->faker->numberBetween(18, 45),
            'alamat' => $this->faker->address(),
            'hpht' => $hpht,
            'hpl' => $hpl,
        ];
    }
}
