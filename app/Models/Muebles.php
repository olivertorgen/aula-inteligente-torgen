<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Muebles extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'estado', 'es_proyector'];

    // Relación de muchos a muchos con Aula
    public function aulas()
    {
        return $this->belongsToMany(Aula::class, 'aula_mueble');
    }
}
