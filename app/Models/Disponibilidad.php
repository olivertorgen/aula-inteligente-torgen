<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disponibilidad extends Model
{
    use HasFactory;

    protected $table = 'disponibilidad'; // Nombre de la tabla
    protected $fillable = ['hora', 'fecha', 'estado'];

    // Relación de muchos a muchos con Aula
    public function aulas()
    {
        return $this->belongsToMany(Aula::class, 'aula_disponibilidad');
    }
}
