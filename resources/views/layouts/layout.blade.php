<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')Admin AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    {{--  Meta Description  --}}
     <meta name="description" content="Aplicacion de minuta para reuniones.">
    {{--  Favicon  --}}
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>

    <!--     Fonts and icons     -->
    <link rel="stylesheet"
    type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"
    />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/jquery.dataTables.css">

    @section('css')
       @include('layouts.partials.css')
    @show

     @section('js')
        @include('layouts.partials.js')
     @show
</head>
<body>

<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="{{url('/')}}" class="simple-text logo-normal">
          MINUTA-PROYECT
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="{{url('/')}}">
              <i class="material-icons">dashboard</i>
              <p>INICIO</p>
            </a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="{{route('reuniones.index')}}">
              <i class="material-icons">person</i>
              <p>REUNIONES</p>
            </a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="{{route('usuarios.index')}}">
              <i class="material-icons">content_paste</i>
              <p>USUARIOS</p>
            </a>
          </li>

        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Sistema de minutas</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">

            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="notificaciones" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notificaciones">
                  <a class="dropdown-item" href="#">Ver notificaciones</a>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="userMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <i class="material-icons">person</i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userMenu">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión
                    {{ __('Logout') }}

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
                  </a>
                  <a class="dropdown-item" href="#">Ver Perfil</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                   {{-- SECCION DE CONTENIDO --}}
                <section class="content">
                    @yield('contenido')
                </section>
              </div>
          </div>
        </div>
      </div>

      @include('layouts.partials.footer')

    </div>
  </div>

</body>
</html>
