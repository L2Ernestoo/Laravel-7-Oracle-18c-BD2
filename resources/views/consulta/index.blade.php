@extends('layouts.app')

@section('content')
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Consultar Multa') }}</div>
                    <div class="card-body">
                        <form id="form_multa" method="post" action="{{route('consulta.show')}}">
                            <div class="form-row">
                            @csrf
                            @if (count($errors) > 0)
                                <div class="error">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                                <div class="form-group col-md-8">
                                    <label for="boletaInput">No Boleta / DPI</label>
                                    <input aria-describedby="boletaHelp" type="number" value="{{ old('boleta_no') }}" max="9000000000" name="boletadpi" class="form-control" id="boletaInput" required>
                                    <small id="boletaHelp" class="form-text text-muted">Ingrese su numero de boleta o DPI.</small>
                                </div>
                            <div class="form-group col-md-4 d-flex align-items-center justify-content-center">
                                <button type="submit" id="btnConsulta" class="btn btn-primary btn-block">Consultar</button>
                            </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(!empty($dpi))
        <hr>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Datos') }}</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li>DPI: {{$dpi->licen_dpi}}</li>
                                        <li>Nombre: {{$dpi->nombre}}</li>
                                        <li>NO_Boleta: {{$dpi->multas_boleta_no}}</li>
                                        <li>Monto: {{$dpi->monto}}</li>
                                        <li>Fecha: {{$dpi->fecha}}</li>
                                        <li>Lugar: {{$dpi->lugar}}</li>
                                    </ul>
                                </div>
                                @if(!empty($vehiculo))
                                <div class="col-md-6">
                                    <ul>
                                        <li>Placa: {{$vehiculo->placa}}</li>
                                        <li>Tipo: {{$vehiculo->tipo}}</li>
                                        <li>Marca: {{$vehiculo->marca}}</li>
                                        <li>Tarjeta Circulacion: {{$vehiculo->tarjeta_circ}}</li>
                                        <li>Propietario: {{$vehiculo->propietario}}</li>
                                        <li>Conductor: {{$vehiculo->conductor}}</li>
                                    </ul>
                                </div>
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
