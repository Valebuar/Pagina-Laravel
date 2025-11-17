<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombres',
        'apellidos',
        'documento',
        'correo',
        'telefono',
        'programa',
        'semestre',
        'fecha_ingreso',
        'estado',
    ];
}
