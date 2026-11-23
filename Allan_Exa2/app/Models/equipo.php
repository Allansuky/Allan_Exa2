<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use database\Factories\EquipoFactory;

class equipo extends Model
{
    protected $fillable = [
        'id',
        'codigo',
        'nombre',
        'marca',
        'fecha_adquisicion',
        'estado',
    ];
}
