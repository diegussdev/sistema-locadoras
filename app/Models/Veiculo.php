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

    /**
     * Locadora
     * 
     * @return Locadora|null
     */
    public function locadora()
    {
        $log = Log::where('veiculo_id', '=', $this->id)->whereNull('data_fim')->first();
        return $log ? $log->locadora : null;
    }

    /**
     * Último log
     * 
     * @return Locadora|null
     */
    public function ultimoLog()
    {
        return Log::where('veiculo_id', '=', $this->id)->whereNull('data_fim')->first();
    }
}
