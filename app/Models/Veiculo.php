<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Veiculo extends Model
{
    use HasFactory;

    /**
     * Campos de atribuição
     * 
     * @var array
     */
    protected $fillable = [
        'modelo_id',
        'numero_portas',
        'cor',
        'fabricante',
        'ano_modelo',
        'ano_fabricacao',
        'placa',
        'chassi'
    ];

    /**
     * Modelos
     * 
     * @return BelongsTo
     */
    public function modelo()
    {
        return $this->belongsTo(Modelo::class);
    }
}
