<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $fillable = [
        'imagen',
        'titulo',
        'descripcion_corta',
        'fecha_inicio',
        'fecha_fin',
        'carga_horario',
        'inversion',
        'modalidad',
        'horarios',
        'fecha_limite',
        'correo',
        'celular',
        'descripcion_larga',
        'requisitos',
        'id_docente',
    ];
}
