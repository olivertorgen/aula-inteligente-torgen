<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    protected $fillable = ['dia', 'turno', 'periodo', 'horario_inicio', 'horario_fin', 'codigo'];

    // Relación de muchos a muchos con Aula
    public function aulas()
    {
        return $this->belongsToMany(Aula::class, 'aula_horario');
    }
}
