@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Multas Registradas') }}</div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#Boleta</th>
                                <th scope="col">Tipo Vehiculo</th>
                                <th scope="col">Placa</th>
                                <th scope="col">Marca</th>
                                <th scope="col">Color</th>
                                <th scope="col">Articulo</th>
                                <th scope="col">Observacion</th>
                                <th scope="col">Lugar</th>
                                <th scope="col">Tarjeta Circulacion</th>
                                <th scope="col">Propietario</th>
                                <th scope="col">Conductor</th>
                                <th scope="col">Licencia</th>
                                <th scope="col">Monto</th>
                                <th scope="col">Fecha Multa</th>
                                <th scope="col">Elemento</th>
                                <th scope="col">Fecha Vencimiento</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($multas as $item)
                            <tr>
                                <th scope="row">{{$item->boleta_no}}</th>
                                <th scope="row">{{$item->tipovehic_id_tipo}}</th>
                                <th scope="row">{{$item->placa}}</th>
                                <th scope="row">{{$item->marcas_idmarca}}</th>
                                <th scope="row">{{$item->color}}</th>
                                <th scope="row">{{$item->articulos_articulo}}</th>
                                <th scope="row">{{$item->observacion}}</th>
                                <th scope="row">{{$item->lugar}}</th>
                                <th scope="row">{{$item->tarj_circu}}</th>
                                <th scope="row">{{$item->propietario}}</th>
                                <th scope="row">{{$item->conductor}}</th>
                                <th scope="row">{{$item->licencia}}</th>
                                <th scope="row">{{$item->monto}}</th>
                                <th scope="row">{{$item->fecha_mul}}</th>
                                <th scope="row">{{$item->chapa}}</th>
                                <th scope="row">{{$item->fechavenc}}</th>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
