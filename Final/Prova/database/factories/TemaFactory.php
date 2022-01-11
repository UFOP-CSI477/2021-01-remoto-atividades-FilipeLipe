<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TemaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descricao' => $this->faker->text($maxNbChars = 45),
            'ordem' => $this->faker->numberBetween($min = 0, $max = 9999)
        ];
    }
}
