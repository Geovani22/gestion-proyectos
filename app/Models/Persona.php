<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'personas';

    protected $primaryKey = 'Idpersona';

    public $timestamps = false;

    protected $fillable = [
        'Nombre',
        'Apellidos',
        'Dirección',
        'Teléfono',
        'Sexo',
        'Fecha_nacimiento',
        'Profesión',
    ];
}
