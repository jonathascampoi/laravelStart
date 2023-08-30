<?php

namespace Database\Factories;

use App\Models\PrevisaoDeGastos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Valores>
 */
class ValoresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $previsaoDeGastoIds = PrevisaoDeGastos::pluck('id')->toArray();
        return [
            'previsao_de_gastos_id' => function () use ($previsaoDeGastoIds) {
                return \Arr::random($previsaoDeGastoIds);
            },
            'valor' => fake()->randomNumber(),
            'data' => fake()->date()
        ];
    }
}
