<?php

namespace App\Http\Controllers;

use App\Articulos;
use App\Marcas;
use App\Multas;
use App\TiposVehiculos;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class MultasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Funcion para mostrar el formulario para registrar la multa
    public function index(){
        $tipos_vehiculos = TiposVehiculos::all(); // Llamamos todos los tipos de vehiculos
        $articulos = Articulos::all();
        $marcas = Marcas::all();

        return view('multa.index',compact('tipos_vehiculos','articulos','marcas')); //Retornamos la vista en resources/views/multa.index.php
    }

    //Funcion para mostrar multas
    public function all(){
        $multas = Multas::all();

        return view('multa.all',compact('multas'));
    }

    //Guardamos el formulario de multa
    public function store(Request $request){
        //Validamos los datos que nos envia por el submit el formulario y revisivos por la variable $request

        $validate = $request->validate([
            'tipo_vehiculo' => 'integer|required',
            'placa' => 'string|max:20|required',
            'marca' => 'integer|required',
            'color' => 'string|max:30|required',
            'chapa' => 'numeric|max:9999|required|exists:elemento',
            'boleta_no' => 'numeric|required|max:99999|unique:multas',
            'lugar' => 'required|string|max:50',
            'tarjeta_circulacion' => 'required|numeric|max:999999999999999999999999',
            'propietario' => 'required|string|max:50',
            'conductor' => 'required|string|max:50',
            'licencia' => 'required|numeric|max:9999999999999999999999',
            'monto' => 'required|max:15',
        ]);

        $multa = new Multas;
        $multa->boleta_no = $request->boleta_no;
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
        $multa->fecha_mul = Carbon::now();
        $multa->id_user = Auth::user()->id;
        $multa->chapa = $request->chapa;
        $multa->fechavenc = Carbon::parse($request->fecha_vencimiento)->format('Y-m-d H:i:s');
        $multa->save();

        return redirect()->route('multa.index')->with('message', 'La multa fue ingresada correctamente!');
    }

    public function destroy($id)
    {
        $multa = Multas::find($id);

        $multa->delete();
        return redirect()->route('multa.all')->with('message', 'La Multa fue eliminada');
    }
}
