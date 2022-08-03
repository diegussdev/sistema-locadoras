<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locadora extends Model
{
    use HasFactory;

    /**
     * Campos de atribuição
     * 
     * @var array
     */
    protected $fillable = [
        'nome_fantasia',
        'razao_social',
        'cnpj',
        'email',
        'telefone',
        'cep',
        'rua',
        'bairro',
        'estado',
        'cidade',
    ];
}
