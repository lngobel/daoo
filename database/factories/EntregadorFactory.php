<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entregador>
 */
class EntregadorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nome" => fake()->name(),
            "cpf" => fake()->cpf(),
            "email" => fake()->email(),
            "senha" => fake()->password(),
            "vencimento_cnh" => fake()->dateTimeBetween($startDate = 'now', $endDate = '+5years')
        ];
    }
}
