@extends('Layout')
@section('title') Sistema Reuniones @endsection

@section('tituloSeccion')
        <i class="fa fa-user" aria-hidden="true"></i>
        <small>Bienvenido al sistema de reuniones</small>
@endsection

@section('rutaPagina')
    <ol class="breadcrumb">
        <li class="active"><a href="{{ route('index') }}" >
          <i class="fa fa-dashboard"></i> home</a>
        </li>
    </ol>
@endsection


@section('contenido')
    <div class="row">
      <div class="col-xs-12">
       <div class="box box-primary color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tag"></i> Principal</h3>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-sm-12 col-md-12">
              <h4 class="text-center">Sistema de reuniones</h4>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      </div>
    </div>
@endsection
