@extends('Layout')
@section('title','Crear nueva Reunion')

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
              <li><a href="#temas" data-toggle="tab">Asignar Tema</a></li>
              <li><a href="#acciones" data-toggle="tab">Añadir Acciones</a></li>
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
                                <label for="inputName">Fecha</label>
                                <input type="date" class="form-control" id="inputName" name="fecha"
                                value="{{old('fecha')}}">
                            </div>

                            <div class="form-group">
                                <label for="inputHora">Hora</label>
                                <input type="time" class="form-control" id="inputHora" name="hora"
                                {{old('hora')}}>
                            </div>

                            <div class="form-group">
                                <label for="inputLugar">Lugar</label>
                                <input type="text" class="form-control" id="inputLugar" name="lugar" placeholder="Lugar"
                                {{old('lugar')}}>
                            </div>

                            <div class="form-group">
                                <label for="tipoReunion">Nombre Reunión</label>
                                <input type="text" class="form-control" id="tipoReunion" name="tipoReunion" placeholder="Lugar"
                                {{old('tipoReunion')}}>
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
              </div> <!-- END ACTIVIY -->
              <div class="tab-pane" id="temas">
                     {{--  Agendar nuevo tema  --}}
                <div class="box box-default">
                    <div class="box-body">
                        <form action="#" method="post">
                            <legend class="box-title">Asignar Tema</legend>
                            {{ csrf_field() }}
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
                                <textarea rows="4" cols="50" class="form-control" id="inputConclusion"
                                name="conclusión" value="{{old('conclusión')}}" ></textarea>
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
              <!-- /.tab-pane -->

              <div class="tab-pane" id="acciones">
                  {{--  Añadir Acciones  --}}
                <div class="box box-default">
                    <div class="box-body">
                        <form action="#" method="post">
                            <legend class="box-title">Añadir acciones</legend>
                            {{ csrf_field() }}
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
                             <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                            Ver Listado de acciones</button>
                        </form>
                    </div>
                </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
</div>
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Default Modal</h4>
        </div>
        <div class="modal-body">
        <p>One fine body&hellip;</p>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endsection