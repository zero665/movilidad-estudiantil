<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';
    protected $primaryKey = 'numeroDeControl';
    public $timestamps = false;

    protected $fillable = [
    	'numeroDeControl',
    	'contrasenia',
    	'nombre',
    	'apellidoPaterno',
    	'apellidoMaterno',
    	'correo',
    	'idInstitucion',
    	'carrera',
    ];

}
