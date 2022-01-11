<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Tema;
use Illuminate\Database\Eloquent\Factories\Factory;

class VotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'users_id' => User::factory(),
            'temas_id' => Tema::factory(),
            'opcao' => $this->faker->numberBetween($min = 1, $max = 3),
            'data' => $this->faker->date($format = 'd-m-Y', $max = 'now')

            
        ];
    }
}
