<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TiposVehiculos extends Model
{
    protected $table = "tipovehiculo";

    protected $fillable = [
        'id_tipo',
        'tipo',
        'descripcion'
    ];
}
