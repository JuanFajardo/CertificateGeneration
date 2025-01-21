<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_certificado',
        'fecha_consulta',
        'ip_consulta',
    ];

    public function certificado()
    {
        return $this->belongsTo(Certificado::class, 'id_certificado');
    }
}
