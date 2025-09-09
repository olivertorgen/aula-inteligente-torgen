<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'tipo_cursada', 'horario_inicio', 'horario_fin'];

    // Relación de muchos a muchos con Docente
    public function docentes()
    {
        return $this->belongsToMany(Docente::class, 'docente_materia');
    }
}
