@extends('layouts.layout')
@section('title','Crear Usuario')
@section('tituloSeccion')
        <i class="fa fa-user" ></i> Usuario
        <small>Agrega un nuevo usuario al sistema</small>
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

  <div class="box box-default">
    <div class="box-body">
      <form  action="{{ url('usuarios/new')}}" method="post">
          <legend class="box-title">Crear nuevo usuario</legend>
          {{ csrf_field() }}
            <div class="form-group">
              <label for="inputName">Nombre</label>
              <input type="text" class="form-control" id="inputName" name="name" placeholder="Nombre Usuario"
            value="{{old('nombre')}}">
          </div>
            <div class="form-group">
              <label for="inputEmail">E-mail</label>
              <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" {{old('email')}}>
          </div>
          <div class="form-group">
              <label for="inputPassword">Password</label>
              <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password"
              {{old('password')}}>
          </div>
          <button type="submit" class="btn btn-primary">
            <i class="fa fa-plus-square" ></i> Añadir
          </button>
          <a href="{{ route('usuarios.index') }}" class="btn btn-default">
            <i class="fa fa-arrow-left" ></i> Regresar
          </a>
      </form>
    </div>
  </div>
@endsection