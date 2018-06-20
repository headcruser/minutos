@extends('layouts.layout')
@section('title','Editar Reunion')

@section('tituloSeccion')
        <i class="fa fa-users" aria-hidden="true"></i>
        <small>Actualiza la información de la reunión</small>
@endsection

@section('rutaPagina')
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Reuniones</a></li>
        <li class="active">Actualizar</li>
        <li class="active">{{$reunion->id}}</li>
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


    <div class="card ">
        <div class="card-header card-header-primary">
            <div class="nav-tabs-navigation">
                <div class="nav-tabs-wrapper">
                    <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#reuniones" data-toggle="tab">Editar Reunion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#temas" data-toggle="tab">Asignar Tema</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#acciones" data-toggle="tab">Asignar Acciones</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="tab-content text-center">
                {{--  Actualizar Reunion  --}}
                <div class="active tab-pane" id="reuniones">
                    <form action="{{ url('/reuniones/update/'.$reunion->id)}}" method="POST">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="inputConvocado">Covocado</label>
                            <input type="text" class="form-control" id="inputConvocado" name="convocado"
                            value="{{old('convocado',$reunion->convocado)}}">
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="inputName">Fecha</label>
                                    <input type="date" class="form-control" id="inputName" name="fecha"
                                    value="{{old('fecha',$reunion->fecha)}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="inputHora">Hora</label>
                                    <input type="time" class="form-control" id="inputHora" name="hora"
                                    value="{{old('hora',$reunion->formatHour()->hora)}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputLugar">Lugar</label>
                                    <input type="text" class="form-control" id="inputLugar" name="lugar" placeholder="Lugar"
                                    value="{{old('lugar',$reunion->lugar)}}">
                                </div>
                            </div>
                        </div>

                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tipoReunion">Nombre Reunión</label>
                                    <input type="text" class="form-control" id="tipoReunion" name="tipoReunion" placeholder="Lugar"
                                    value="{{old('tipoReunion',$reunion->tipoReunion)}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="inputOrganizador">Organizador</label>
                                    <input type="text" class="form-control" id="inputOrganizador" name="organizador"
                                    value="{{old('organizador',$reunion->organizador)}}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputAsistente">Asistentes</label>
                            <input type="text" class="form-control" id="inputAsistente" name="asistentes"
                            value="{{old('asistentes' ,$reunion->asistentes)}}">
                        </div>

                        <div class="form-check">
                            <label class="radio-inline">
                                <input class=""type="radio" name="status" value="1"
                                    @if ($reunion->isStatusActive()) checked @endif> Iniciar Reunion
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="status" value="0"
                                @if ($reunion->isNotActive()) checked @endif> Finalizar Reunion
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-refresh" aria-hidden="true"></i> Actualizar
                        </button>

                        <a href="{{ route('reuniones.index') }}" class="btn btn-default">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar
                        </a>
                    </form>
                </div>

                {{--  Agendar nuevo tema  --}}
                <div class="tab-pane" id="temas">
                    <form id="__formTema" action="{{ route('temas.new') }}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" id="tokenTema">
                            <div class="form-group">
                                <label for="inputTema">Nombre Tema</label>
                                <input type="text" class="form-control" id="inputTema" name="tema"
                                placeholder="Descripción del debate" value="{{old('tema')}}">
                            </div>

                            <div class="form-group">
                                <label for="inputTiempo">Tiempo</label>
                                <input type="text" class="form-control" id="inputTiempo" name="tiempo"
                                placeholder="Ejemplo 1hr" {{old('tiempo')}}>
                            </div>

                            <div class="form-group">
                                <label for="inputDebate">Debate (Descripción)</label>
                                <input type="text" class="form-control" id="inputDebate" name="debate" placeholder="debate" {{old('lugar')}}>
                            </div>

                            <div class="form-group">
                                <label for="inputConclusion">Conclusion</label>
                                <textarea rows="4" cols="50" class="form-control" id="inputConclusion"  name="conclusion" value="{{old('conclusión')}}" ></textarea>
                            </div>

                            <input type="hidden" name="reunion" value="{{$reunion->id}}">

                            <a href="#" class="btn btn-primary" id="btn_tema">
                                <i class="fa fa-plus-square"></i> Añadir
                            </a>

                            <a href="{{ route('reuniones.index') }}" class="btn btn-default">
                                <i class="fa fa-arrow-left"></i> Regresar
                            </a>

                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#listarTemas">
                            listar Temas </button>
                    </form>
                </div>

                {{--  Añadir Acciones  --}}
                <div class="tab-pane" id="acciones">
                    <form action="#" method="post">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Selecciona un tema</label>
                            <select class="form-control" name="tema" id="temaSelect"></select>
                        </div>

                        <div class="form-group">
                            <label for="inputElementos">Elementos</label>
                            <textarea rows="4" cols="50" class="form-control" id="inputElementos"
                            name="elementos" value="{{old('elementos')}}" ></textarea>
                        </div>

                        <div class="form-group">
                            <label for="inputTiempo">Responsable</label>
                            <input type="text" class="form-control" id="inputTiempo" name="responsable"
                            placeholder="Asingar Responsable" {{old('responsable')}}>
                        </div>

                        <div class="form-group">
                            <label for="inputDebate">Plazo</label>
                            <input type="date" class="form-control" id="inputDebate" name="debate" placeholder="debate" {{old('lugar')}}>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-plus-square" aria-hidden="true"></i> Añadir
                        </button>

                        <a href="{{ route('reuniones.index') }}" class="btn btn-default">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar
                        </a>
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#listarAcciones" id="btn-listar-acciones">
                        Ver Listado de acciones</button>
                    </form>
                </div>

            </div>
        </div>

    </div>






    {{-- Modal Lista Temaas --}}
    <div class="modal fade" id="listarTemas">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Listar Temas Disponibles</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-striped" id="tbl_temas">
                        <thead>
                            <th>Tema</th>
                            <th>Tiempo</th>
                            <th>Debate</th>
                        </thead>
                        <tbody id="datosTemas"></tbody>
                    </table>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Listar acciones --}}
    <div class="modal fade" id="listarAcciones">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Listar accciones</h4>
                </div>
                <div class="modal-body">
                    <div class="box">
                        <div class="box-body">
                        <input type="hidden" id="url_table_themes"
                                value="{{ url('/temas/'.$reunion->id) }}">
                            <table class="table table-bordered" id="tbl_acciones">
                                <thead>
                                    <th>Elementos</th>
                                    <th>Responsable</th>
                                    <th>Plazo</th>
                                </thead>
                                <tbody id="datosAcciones"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-success fade" id="success" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Exito</h4>
                </div>
                <div class="modal-body">
                    <p>El elemento fue creado exitosamente</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/reuniones/reuniones.js') }}">
    </script>
@endsection
