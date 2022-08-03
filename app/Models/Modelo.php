<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Modelo extends Model
{
    use HasFactory;

    /**
     * Campos de atribuição
     * 
     * @var array
     */
    protected $fillable = [
        'nome',
        'montadora_id'
    ];

    /**
     * Modelos
     * 
     * @return BelongsTo
     */
    public function montadora()
    {
        return $this->belongsTo(Montadora::class);
    }
}
