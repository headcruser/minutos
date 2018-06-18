@extends('layouts.layout')
@section('title') Lista Reuniones @endsection

@section('tituloSeccion')
        <i class="fa fa-users" aria-hidden="true"></i>
        <small>Lista de Reuniones activas</small>
@endsection

@section('rutaPagina')
    <ol class="breadcrumb">
        <li><a href="{{ route('index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Reuniones</li>
    </ol>
@endsection


@section('js')
    @parent
        {{--  DATATABLES  --}}
        <script src="{{ asset('js/vendor/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('js/vendor/dataTables.bootstrap.min.js')}}"></script>
        <script src="{{ asset('js/reuniones/listarReuniones.js') }}"></script>
@endsection

@section('contenido')

    <a href="{{ route('reuniones.new') }}" class="btn btn-primary"> <i class="fa fa-plus-circle"></i> Nueva Reunión</a>
    <br><br>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <table id="tb_reuniones" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tipo Reuion</hd>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Lugar</th>
                                <th>Status</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($lista as $reunion)
                        <tr>
                            <td>{{$reunion->id}}   </td>
                            <td>{{$reunion->tipoReunion}}</td>
                            <td>{{$reunion->fecha}} </td>
                            <td>{{$reunion->formatHour()->hora}} </td>
                            <td>{{$reunion->lugar}} </td>
                            <td>
                                @if ($reunion->status === 1)
                                <p class="bg-success text-center">Activa</p>
                                @else
                                <p class="bg-danger text-center">Finalizada</p>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('reuniones.update', $reunion) }}"
                                    class="btn btn-primary"><i class="fa fa-eye"></i> Ver Detalle</a>
                                <form style="display:inline"
                                    action="{{route('reunion.delete', $reunion)}}"
                                    method="POST">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <li> No hay Registros</li>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
