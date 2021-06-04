<?php

namespace App\Http\Controllers;

use App\Articulos;
use App\Marcas;
use App\Multas;
use App\TiposVehiculos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MultasController extends Controller
{
    //Funcion para mostrar el formulario para registrar la multa
    public function index(){
        $tipos_vehiculos = TiposVehiculos::all(); // Llamamos todos los tipos de vehiculos
        $articulos = Articulos::all();
        $marcas = Marcas::all();

        return view('multa.index',compact('tipos_vehiculos','articulos','marcas')); //Retornamos la vista en resources/views/multa.index.php
    }

    //Guardamos el formulario de multa
    public function store(Request $request)
    {
        //Validamos los datos que nos envia por el submit el formulario y revisivos por la variable $request
        $validate = $request->validate([
            'tipovehic_id_tipo' => 'integer|required',
            'placa' => 'string|max:20|required',
            'marcas_idmarca' => 'integer|required',
            'color' => 'string|max:30|required'
        ]);

        $multa = new Multas;
        $multa->tipovehic_id_tipo = $request->tipo_vehiculo;
        $multa->placa = $request->placa;
        $multa->marcas_idmarca = $request->marca;
        $multa->color = $request->color;
        $multa->articulos_articulo = $request->articulo;
        $multa->observacion = $request->observacion;
        $multa->lugar = $request->lugar;
        $multa->tarj_circu = $request->tarjeta_circulacion;
        $multa->propietario = $request->propietario;
        $multa->conductor = $request->conductor;
        $multa->licencia = $request->licencia;
        $multa->monto = $request->monto;
        $multa->fecha_mul = today();
        $multa->id_user = Auth::user()->id;
        $multa->chapa = $request->chapa;
        $multa->fechavenc = $request->fecha_vencimiento;
        $multa->save();


    }
}
