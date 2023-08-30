<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valores extends Model
{
    use HasFactory;
    protected $table = 'valores';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'valor',
        'data',
        'previsao_de_gastos_id'
    ];
}
