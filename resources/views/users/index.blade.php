@extends('layouts.layout')
@section('title') Listado usuarios @endsection

@section('css')
    @parent
@endsection

@section('js')
    @parent
        <script src="{{ asset('js/usuarios/listarUsuarios.js') }}"></script>
@endsection

@section('contenido')
    <a href="{{ route('usuarios.new') }}" class="btn btn-primary"> <i class="fa fa-plus-circle"></i> Crear usuario</a>

    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">USUARIOS DISPONIBLES</h4>
        </div>

        <div class="card-body">
            <table id="tb_usuarios" class="table table-bordered table-striped">
                <thead class="text-center">
                    <tr>
                        <th>#</th>
                        <th>E-mail</hd>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                @forelse($lista as $user)
                <tr>
                    <td>{{$user->id}}   </td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->name}} </td>
                    <td>
                        <a href="{{ route('usuarios.show', $user) }}"
                            class="btn btn-primary"><i class="fa fa-eye"></i> Ver</a>

                        {!! Form::open([
                                'route' => ['usuarios.delete',$user],
                                'class' => 'form-inline',
                                'style' => 'display:inline',
                                'method' => 'DELETE',
                                'accept-charset'=>'UTF-8']) !!}
                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @empty
                    <li> No hay usuarios Registrados</li>
                @endforelse
                </tbody>
            </table>
        </div>


    </div>
@endsection
