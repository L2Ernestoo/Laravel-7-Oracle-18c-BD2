@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Opciones') }}</div>

                <div class="card-body">
                    <a href="{{route('multa.index')}}"target="_blank" class="btn btn-primary btn-block">Crear Multa</a>
                    <a href="{{route('multa.all')}}"target="_blank" class="btn btn-success btn-block">Ver Multas</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
