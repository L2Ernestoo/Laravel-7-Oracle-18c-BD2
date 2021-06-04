<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Multas extends Model
{
    protected $fillable = [
        'boleta_no',
        'tipovehic_id_tipo',
        'placa',
        'marcas_idmarca',
        'color',
        'articulos_articulo',
        'observacion',
        'lugar',
        'tarj_circu',
        'propietario',
        'conductor',
        'licencia',
        'monto',
        'fecha_mul',
        'id_user',
        'chapa',
        'fechaven'
    ];
}