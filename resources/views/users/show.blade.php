@extends('Layout')
@section('title') Detalle usuario @endsection

@section('tituloSeccion')
        <i class="fa fa-user" aria-hidden="true"></i>
        <small>Detalle del usuario</small>
@endsection

@section('contenido')
<div class="container">
  {{--  <h2>{{$user->name}}</h2>

  <p>{{$user->email}}</p>  --}}


</div>

<!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Sobre el usuario</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Nombre</strong>

              <p class="text-muted">
               {{$user->name}}
              </p>

              <hr>

              <strong><i class="fa fa-envelope margin-r-5"></i> E-mail</strong>
              <p class="text-muted">{{$user->email}}</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Acciones</strong>

              <hr>
              <a href="{{url('/usuarios/update/'.$user->id)}}" class="btn btn-default">
                <i class="fa fa-pencil-square-o"></i> Editar
              </a>
              <a href="{{url('/usuarios')}}" class="btn btn-primary">
                <i class="fa fa-arrow-left" ></i> Regresar
              </a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
@endsection