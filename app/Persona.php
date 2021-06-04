<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'persona';

    protected $fillable = [
        'licen_dpi',
        'nombre',
        'multas_boleta_no',
        'monto',
        'fecha',
        'lugar'
    ];
}
