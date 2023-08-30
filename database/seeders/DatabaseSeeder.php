<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\CentroDeCusto::factory(500)->create();
        // \App\Models\Departamento::factory(500)->create();
        // \App\Models\Empreendimento::factory(500)->create();
        // \App\Models\Projeto::factory(500)->create();
        // \App\Models\PrevisaoDeGastos::factory(2000)->create();
        // \App\Models\Valores::factory(200000)->create();

        // Define a quantidade total de registros que você deseja criar
        $totalRecords = 200000;

        // Define o tamanho do lote para inserção em lote
        $batchSize = 100;

        // Criação em lote usando um loop
        for ($i = 0; $i < $totalRecords; $i += $batchSize) {
            $batch = [];
            $remainingRecords = min($batchSize, $totalRecords - $i);

            // Gera os registros usando a factory e adiciona ao lote
            for ($j = 0; $j < $remainingRecords; $j++) {
                $batch[] = \App\Models\Valores::factory()->make()->toArray();
            }

            // Insere o lote no banco de dados
            \App\Models\Valores::insert($batch);
        }

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'password' => '123456789'
        // ]);
    }
}