<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = ['fecha', 'horario_inicio', 'horario_fin'];

    // Relación de uno a muchos (inversa) con Aula
    public function aula()
    {
        return $this->belongsTo(Aula::class);
    }

    // Relación de muchos a muchos con Docente
    public function docentes()
    {
        return $this->belongsToMany(Docente::class, 'reserva_docente');
    }

    // Relación de muchos a muchos con HistoricoAiresAcondicionado
    public function historicoAiresAcondicionados()
    {
        return $this->belongsToMany(HistoricoAiresAcondicionado::class, 'reserva_historico_aire_acondicionado');
    }

    // Relación de muchos a muchos con HistoricoFoco
    public function historicoFocos()
    {
        return $this->belongsToMany(HistoricoFoco::class, 'reserva_historico_foco');
    }
}
