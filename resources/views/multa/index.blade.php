@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Ingresar Multa') }}</div>
                    <div class="card-body">
                        <form id="form_multa" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="exampleFormControlSelect1">Tipo de vehiculo</label>
                                    <select name="tipo_vehiculo" class="form-control" id="exampleFormControlSelect1">
                                        @foreach($tipos_vehiculos as $item)
                                            <option value="{{$item->id_tipo}}">{{$item->tipo}}</option>
                                            @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleFormControlSelect1">Marca</label>
                                    <select name="marca" class="form-control" id="exampleFormControlSelect1">
                                        @foreach($marcas as $item)
                                            <option value="{{$item->idmarca}}">{{$item->marca}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleFormControlSelect1">Articulo</label>
                                    <select name="articulo" class="form-control" id="exampleFormControlSelect1">
                                        @foreach($articulos as $item)
                                            <option value="{{$item->articulo}}">{{$item->descripcion}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="placaInput">Placa</label>
                                    <input type="text" name="placa" class="form-control" id="placaInput" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="colorInput">Color</label>
                                    <input type="text" name="color" class="form-control" id="colorInput" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="lugarInput">Lugar</label>
                                    <input type="text" name="lugar" class="form-control" id="lugarInput" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="tcInput">Tarjeta Circulacion</label>
                                    <input type="text" name="tarjeta_circulacion" class="form-control" id="tcInput" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="tcInput">Tarjeta Circulacion</label>
                                    <input type="text" name="tarjeta_circulacion" class="form-control" id="tcInput" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="propietarioInput">Propietario</label>
                                    <input type="text" name="propietario" class="form-control" id="propietarioInput" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="conductorInput">Conductor</label>
                                    <input type="text" name="conductor" class="form-control" id="conductorInput" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="licenciaInput">Licencia</label>
                                    <input type="text" name="licencia" class="form-control" id="licenciaInput" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="montoInput">Monto</label>
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="validatedInputGroupPrepend">Q</span>
                                            </div>
                                            <input type="text" name="monto" class="form-control" required>
                                        </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="chapaInput">Chapa</label>
                                    <input type="text" name="chapa" class="form-control" id="chapaInput" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="fecha_vencimientoInput">Fecha Vencimiento</label>
                                    <input type="date" name="fecha_vencimiento" class="form-control" id="fecha_vencimientoInput" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" id="validationTextarea" name="observacion"
                                              required></textarea>
                                </textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
