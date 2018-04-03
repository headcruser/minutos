@extends('Layout')
@section('title') Listado usuarios @endsection

@section('tituloSeccion')
        <i class="fa fa-user" aria-hidden="true"></i>
        <small>Lista de usuarios disponibles en el sistema</small>
@endsection

@section('rutaPagina')
    <ol class="breadcrumb">
        <li class="active"><a href="#" ><i class="fa fa-dashboard"></i> Usuarios</a></li>
    </ol>
@endsection

@section('css')
    @parent
@endsection

@section('js')
    @parent
        {{--  DATATABLES  --}}
        <script src="{{ asset('js/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('js/dataTables.bootstrap.min.js')}}"></script>
        <script src="{{ asset('js/tables/customDataTable.js') }}"></script>
@endsection

@section('contenido')
    <a href="{{ route('usuarios.new') }}" class="btn btn-primary"> <i class="fa fa-plus-circle"></i> Crear usuario</a>
    <br><br>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <table id="tbl_data" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>E-mail</hd>
                                <th>Nombre</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($lista as $user)
                        <tr>
                            <td>{{$user->id}}   </td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->name}} </td>
                            <td>
                                <a href="{{ route('usuarios.show', $user) }}"
                                    class="btn btn-primary"><i class="fa fa-eye"></i> Ver Detalle</a>
                                <form style="display:inline"
                                    action="{{route('usuarios.delete',$user)}}"
                                    method="POST">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button class="btn btn-danger"> <i class="fa fa-trash"></i> Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <li> No hay usuarios Registrados</li>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
