<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Montadora extends Model
{
    use HasFactory;

    /**
     * Campos de atribuição
     * 
     * @var array
     */
    protected $fillable = [
        'nome'
    ];

    /**
     * Modelos
     * 
     * @return HasMany
     */
    public function modelos()
    {
        return $this->hasMany(Modelo::class);
    }
}
