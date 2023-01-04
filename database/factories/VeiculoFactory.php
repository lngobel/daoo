<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Veiculo>
 */
class VeiculoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "placa" => fake()->regexify('[A-Z]{3}[0-9]{1}[A-Z]{1}[0-9]{2}'),
            "renavam" => fake()->numberBetween(10000000,99999999),
            "vencimento_doc" => fake()->dateTimeBetween($startDate = 'now', $endDate = '+5years')->format('Y-m-d'),
            "entregador_id" => fake()->numberBetween(1,10),
        ];
    }
}
