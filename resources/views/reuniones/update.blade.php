@extends('Layout')
@section('title','Editar Usuario')

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

    <form action="{{ url('/usuarios/'.$user->id)}}" method="POST">
      <legend>Editar Usuario</legend>
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
      <button type="submit" class="btn btn-primary btn-block">Actualizar usuario</button>
        </form>
        <br>
        <a href="{{ route('usuarios.index') }}" class="btn btn-default"> Regresar</a>
    </div>
  </div>
</div>
@endsection
