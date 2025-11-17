<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_completo',
        'documento',
        'correo',
        'telefono',
        'direccion',
        'ciudad',
        'tipo_cliente',
        'estado',
    ];
}
