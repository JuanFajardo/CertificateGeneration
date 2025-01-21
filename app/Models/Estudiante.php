<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_curso',
        'ci',
        'nombre',
        'paterno',
        'materno',
        'ciudad',
        'departamento',
        'sexo',
        'correo',
        'celular',
        'profesion',
        'aceptado',
    ];
}
