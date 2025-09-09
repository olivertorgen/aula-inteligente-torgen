<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'dni', 'especialidad'];

    // Relación de muchos a muchos con Materia
    public function materias()
    {
        return $this->belongsToMany(Materia::class, 'docente_materia');
    }

    // Relación de muchos a muchos con Reserva
    public function reservas()
    {
        return $this->belongsToMany(Reserva::class, 'reserva_docente');
    }
}
