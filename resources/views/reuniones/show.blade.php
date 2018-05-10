@extends('layouts.layout')
@section('title') Detalle usuario @endsection

@section('contenido')
<div class="container">
  <h2>{{$user->name}}</h2>

  <p>{{$user->email}}</p>

   <a href="{{url('/usuarios/update/'.$user->id)}}" class="btn btn-default"> Editar</a>
  <a href="{{url('/usuarios')}}" class="btn btn-primary"> Regresar</a>
</div>
@endsection