@extends('layouts.layout')
@section('title','Crear nueva Reunion')
@section('tituloSeccion')
        <i class="fa fa-users" aria-hidden="true"></i>
        <small>Crear una nueva Reunión</small>
@endsection

@section('rutaPagina')
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Reuniones</a></li>
        <li class="active">Crear</li>
    </ol>
@endsection

@section('contenido')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="col-md-12">
            <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"> <a href="#reuniones" data-toggle="tab">Crear Reunion</a></li>
            </ul>
            <div class="tab-content">
                <div class="active tab-pane" id="reuniones">
                    {{--  Agendar nueva reunion  --}}
                <div class="box box-default">
                    <div class="box-body">
                        <form action="{{ url('reuniones/new')}}" method="post">
                            <legend class="box-title">Agendar nueva Reunión</legend>
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="inputConvocado">Covocado</label>
                                <input type="text" class="form-control" id="inputConvocado" name="convocado"
                                value="{{old('convocado')}}">
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="inputFecha">Fecha</label>
                                        <input type="date" class="form-control" id="inputFecha" name="fecha"
                                        value="{{old('fecha')}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                     <div class="form-group">
                                        <label for="inputHora">Hora</label>
                                        <input type="time" class="form-control" id="inputHora" name="hora"
                                        {{old('hora')}}>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                     <div class="form-group">
                                        <label for="inputLugar">Lugar</label>
                                        <input type="text" class="form-control" id="inputLugar" name="lugar" placeholder="Lugar"
                                        {{old('lugar')}}>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tipoReunion">Nombre Reunión</label>
                                        <input type="text" class="form-control" id="tipoReunion" name="tipoReunion" placeholder="Lugar"
                                        {{old('tipoReunion')}}>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="inputOrganizador">Organizador</label>
                                        <input type="text" class="form-control" id="inputOrganizador" name="organizador"
                                        value="{{old('organizador')}}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputAsistente">Asistentes</label>
                                <input type="text" class="form-control" id="inputAsistente" name="asistentes"
                                value="{{old('asistentes')}}">
                            </div>

                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> Añadir
                            </button>

                            <a href="{{ route('reuniones.index') }}" class="btn btn-default">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar
                            </a>
                        </form>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection