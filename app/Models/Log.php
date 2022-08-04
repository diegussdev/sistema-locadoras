<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Log extends Model
{
    use HasFactory;

    /**
     * Define timestamps
     */
    public $timestamps = false;

    /**
     * Campos de atribuição
     * 
     * @var array
     */
    protected $fillable = [
        'locadora_id',
        'veiculo_id',
        'data_inicio',
        'data_fim'
    ];

    /**
     * Locadora
     * 
     * @return BelongsTo
     */
    public function locadora()
    {
        return $this->belongsTo(Locadora::class);
    }
}
