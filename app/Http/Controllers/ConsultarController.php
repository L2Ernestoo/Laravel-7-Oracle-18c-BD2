<?php

namespace App\Http\Controllers;

use App\Persona;
use App\Vehiculo;
use Illuminate\Http\Request;

class ConsultarController extends Controller
{
    //mostrar formulario para consultar multa
    public function index(){
        return view('consulta.index');
    }

    public function show(Request $request){
        $validate = $request->validate([
           'boletadpi' => 'string|required'
        ]);

        $vehiculo = Vehiculo::where('placa',$request->boletadpi)->first();

        if(!empty($vehiculo)){
            $dpi = Persona::where('multas_boleta_no',$vehiculo->multas_boleta_no)->first();
            return view('consulta.index',compact('dpi','vehiculo'));
        }else if (empty($vehiculo)) {
            $dpi = Persona::where('licen_dpi',$request->boletadpi)->first();

            if(!empty($dpi)){
                $vehiculo = Vehiculo::where('multas_boleta_no',$dpi->multas_boleta_no)->first();
                return view('consulta.index',compact('dpi','vehiculo'));
            }else{
                return redirect()->route('consulta.index')->with('message', 'No existe ninguna multa!');
            }
        }else{
            return redirect()->route('consulta.index')->with('message', 'No existe ninguna multa!');
        }

    }
}
