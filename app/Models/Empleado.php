<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    /**
     * Campos que se pueden registrar o actualizar.
     */
    protected $fillable = [
        'nombre',
        'documento',
        'cargo',
        'salario',
        'fecha_ingreso',
        'correo',
        'telefono',
        'estado',
    ];
}
