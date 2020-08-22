<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajadores extends Model
{
    protected $fillabled=[
        'nombre','apellidos','correo_electronico','direccion','perfil_laboral','experiencia'
    ];
}

