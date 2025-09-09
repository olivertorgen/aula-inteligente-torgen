<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Focos extends Model
{
    use HasFactory;

    protected $fillable = ['tipo', 'intensidad', 'estado'];

    /**
     * Get the aulas that own the Foco.
     */
    public function aulas()
    {
        return $this->belongsToMany(Aula::class, 'aula_foco');
    }
}
