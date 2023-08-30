<?php

namespace Database\Factories;

use App\Models\CentroDeCusto;
use App\Models\Departamento;
use App\Models\Empreendimento;
use App\Models\Projeto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PrevisaoDeGastos>
 */
class PrevisaoDeGastosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $empreendimentoIds = Empreendimento::pluck('id')->toArray();
        $projetoIds = Projeto::pluck('id')->toArray();
        $centroDeCustoIds = CentroDeCusto::pluck('id')->toArray();
        $departamentoIds = Departamento::pluck('id')->toArray();
        return [
            'empreendimento_id' => function () use ($empreendimentoIds) {
                return \Arr::random($empreendimentoIds);
            },
            'projeto_id' => function () use ($projetoIds) {
                return \Arr::random($projetoIds);
            },
            'centro_de_custo_id' => function () use ($centroDeCustoIds) {
                return \Arr::random($centroDeCustoIds);
            },
            'departamento_id' => function () use ($departamentoIds) {
                return \Arr::random($departamentoIds);
            }
        ];
    }
}
