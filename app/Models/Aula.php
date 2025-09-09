<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'ubicacion',
        'capacidad',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'aulas';
}