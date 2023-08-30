<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrevisaoDeGastos extends Model
{
    use HasFactory;
    protected $table = 'previsao_de_gastos';
    public function empreendimento(): BelongsTo
    {
        return $this->belongsTo(Empreendimento::class);
    }
    public function projeto(): BelongsTo
    {
        return $this->belongsTo(Projeto::class);
    }
    public function centroDeCusto(): BelongsTo
    {
        return $this->belongsTo(CentroDeCusto::class);
    }
    public function departamento(): BelongsTo
    {
        return $this->belongsTo(Departamento::class);
    }
    public function valor(): HasMany
    {
        return $this->hasMany(Valores::class);
    }
}
