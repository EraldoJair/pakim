<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    use HasFactory;
    protected $table = 'trabajadors';
    protected $fillable = [
        'nombres', 'apellido_paterno', 'apellido_materno', 'DNI', 'direccion', 'fecha_nacimiento', 'correo', 'telefono', 'grupo_sanguineo', 'cuenta_bancaria', 'estado', 'fondo_pensiones'
];
}
