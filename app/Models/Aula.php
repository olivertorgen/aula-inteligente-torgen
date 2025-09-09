<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'ubicacion', 'capacidad'];

    // Relación de uno a muchos con Reserva
    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }

    // Relación de muchos a muchos con Docente
    public function docentes()
    {
        return $this->belongsToMany(Docente::class, 'reserva_docente');
    }

    // Relación de muchos a muchos con Mueble
    public function muebles()
    {
        return $this->belongsToMany(Mueble::class, 'aula_mueble');
    }

    // Relación de muchos a muchos con Foco
    public function focos()
    {
        return $this->belongsToMany(Foco::class, 'aula_foco');
    }

    // Relación de muchos a muchos con AiresAcondicionado
    public function airesAcondicionados()
    {
        return $this->belongsToMany(AiresAcondicionado::class, 'aula_aire_acondicionado');
    }

    // Relación de muchos a muchos con Cortina
    public function cortinas()
    {
        return $this->belongsToMany(Cortina::class, 'aula_cortina');
    }

    // Relación de muchos a muchos con Horario
    public function horarios()
    {
        return $this->belongsToMany(Horario::class, 'aula_horario');
    }

    // Relación de muchos a muchos con Disponibilidad
    public function disponibilidad()
    {
        return $this->belongsToMany(Disponibilidad::class, 'aula_disponibilidad');
    }
}
