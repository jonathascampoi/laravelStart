<?php

use App\Models\Empreendimento;
use App\Models\Departamento;
use App\Models\CentroDeCusto;
use App\Models\Projeto;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('previsao_de_gastos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(Empreendimento::class);
            $table->foreignIdFor(Departamento::class);
            $table->foreignIdFor(CentroDeCusto::class);
            $table->foreignIdFor(Projeto::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('previsao_de_gastos');
    }
};
