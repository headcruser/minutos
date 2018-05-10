@extends('layouts.layout')
@section('title','Editar Usuario')

@section('tituloSeccion')
        <i class="fa fa-user" ></i>
        <small>Editar información</small>
@endsection

@section('rutaPagina')
  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Usuario</a></li>
      <li class="active">Actualizar</li>
      <li class="active">{{$user->name}}</li>
  </ol>
@endsection

@section('contenido')
  <div class="row ">
    <div class="col-md-12">
      {{-- Messages --}}
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      {{-- Form --}}
      <div class="box box-primary">
        <div class="box-header with-border">
              <h3 class="box-title">Editar Usuario</h3>
          </div>
        <form action="{{ url('/usuarios/'.$user->id)}}" method="POST">
          <div class="box-body">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
              <div class="form-group">
                <label for="inputName">Nombre</label>
                <input type="text" class="form-control" id="inputName" name="name" placeholder="Nombre Usuario"
                value="{{old('nombre',$user->name)}}">
            </div>
              <div class="form-group">
                <label for="inputEmail">E-mail</label>
                <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email"
                value="{{old('email',$user->email)}}">
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password"
                value="{{old('password')}}">
            </div>
            <button type="submit" class="btn btn-primary">
              <i class="fa fa-refresh" aria-hidden="true"></i> Actualizar
            </button>
            <a href="{{ route('usuarios.index') }}" class="btn btn-default">
              <i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
