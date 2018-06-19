@extends('layouts.layout')
@section('title') Lista Reuniones @endsection

@section('js')
    @parent
    {{--  DATATABLES  --}}
     <script src="{{ asset('js/reuniones/listarReuniones.js') }}"></script>
@endsection

@section('contenido')

    <a href="{{ route('reuniones.new') }}" class="btn btn-primary"> <i class="fa fa-plus-circle"></i> Nueva Reunión</a>

    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">LISTA DE REUNIONES</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="tb_reuniones" class="table">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Tipo reunion</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Lugar</th>
                            <th>Status</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody class="text-center">
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
                                    class="btn btn-primary"><i class="fa fa-eye"></i></a>

                               {!! Form::open([
                                'route' => ['reunion.delete',$reunion],
                                'class' => 'form-inline',
                                'style' => 'display:inline',
                                'method' => 'DELETE',
                                'accept-charset'=>'UTF-8']) !!}
                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                {!! Form::close() !!}
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

@endsection
