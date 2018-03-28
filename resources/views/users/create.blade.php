@extends('Layout')
@section('title','Crear Usuario')

@section('contenido')
<div class="container">
  <div class="row ">
    <div class="col-md-6">

      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      @endif
    <div class="box box-primary">
      <div class="box-header with-border">
          <h3 class="box-title">Crear Usuario</h3>
      </div>
      <form  action="{{ url('usuarios/new')}}" method="post">
        <div class="box-body">
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
          <button type="submit" class="btn btn-primary btn-block">Añadir</button>
          <a href="{{ route('usuarios.index') }}" class="btn btn-default btn-block"> Regresar</a>
        </div>
      </form>
    </div>
    <br>

    </div>
  </div>
</div>
@endsection