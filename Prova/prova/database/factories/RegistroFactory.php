<?php

namespace Database\Factories;

use App\Models\Pessoa;
use App\Models\Vacina;
use App\Models\Unidade;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pessoa_id' => Pessoa::factory(),
            'unidade_id' => Unidade::factory(),
            'vacina_id' => Vacina::factory(),
            'doses' => $this->faker->numberBetween($min = 1, $max = 3),
            'data' => $this->faker->date($format = 'd-m-Y', $max = 'now')
        ];
    }
}
