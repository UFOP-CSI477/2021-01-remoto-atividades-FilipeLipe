<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VacinaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->firstNameMale,
            'fabricante' => $this->faker->company,
            'pais' => $this->faker->country,
            'doses' => $this->faker->numberBetween($min = 1, $max = 3)
        ];
    }
}
