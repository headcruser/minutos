@extends('layouts.layout')

@section('contenido')
   <div class="card card-nav-tabs text-center">
    <div class="card-header card-header-primary">
      {{Auth::user()->name}}
    </div>
    <div class="card-body">
      <h4 class="card-title">Bienvenido al sistema de minutas</h4>
      <p class="card-text">Puede revisar sus reuniones en la seccion de reuniones.</p>
      <a href="{{route('reuniones.index')}}" class="btn btn-primary">Revisar reuniones</a>
    </div>
  </div>
@endsection
