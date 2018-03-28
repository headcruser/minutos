@extends('Layout')
@section('title') Listado usuarios @endsection

@section('css')
    @parent
@endsection

@section('js')
    @parent
        {{--  DATATABLES  --}}
        <script src="{{ asset('js/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('js/dataTables.bootstrap.min.js')}}"></script>
        <script src="{{ asset('js/tables/userTable.js') }}"></script>
@endsection

@section('contenido')
    <a href="{{ route('usuarios.new') }}" class="btn btn-primary"> Crear usuario</a>
    <div class="box-body">
        <table id="tbl_usuarios" class="table table-bordered table-striped">
            <caption>Usuarios</caption>
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
                        class="btn btn-primary"><i class="fas fa-pencil-alt"></i> Ver Detalle</a>
                    <form style="display:inline"
                        action="{{route('usuarios.delete',$user)}}"
                        method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button class="btn btn-danger"><i class="fas fa-trash-alt"></i>Eliminar</button>
                    </form>
                </td>
            </tr>
            @empty
                <li> No hay usuarios Registrados</li>
            @endforelse
            </tbody>
        </table>
</div>
@endsection
