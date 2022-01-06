<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PessoaFactory extends Factory
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
            'bairro' => $this->faker->streetName,
            'cidade' => $this->faker->city,
            'estado' => $this->faker->state,
            'data_nascimento' => $this->faker->date($format = 'd-m-Y', $max = 'now'),
            'cpf' => $this->faker->numberBetween($min = 10000000000, $max = 99999999999),
        ];
    }
}
