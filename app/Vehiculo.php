<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculo';

    public $incrementing = false;

    protected $fillable = [
      'placa',
      'tipo',
      'marca',
      'color',
      'tarjeta_circ',
      'propietario',
      'multas_boleta_no',
      'monto',
      'fecha',
      'lugar',
      'conductor'
    ];
}
