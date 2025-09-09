<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AiresAcondicionados extends Model
{
    use HasFactory;

    protected $fillable = ['marca', 'modelo', 'estado', 'mantenimiento'];

    // Relación de muchos a muchos con Aula
    public function aulas()
    {
        return $this->belongsToMany(Aula::class, 'aula_aire_acondicionado');
    }
}
