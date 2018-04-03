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

    @section('css')
       @include('layouts.css')
    @show

     @section('js')
        @include('layouts.js')
     @show
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        @include('layouts.header')

        @include('layouts.leftSidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    @section('tituloSeccion')
                        Titulo Principal
                        <small>Control panel</small>
                    @show
                </h1>

                @section('rutaPagina')
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Pincipal {{request()->path()}}</li>
                    </ol>
                @show

            </section>

            <!-- Main content -->
            <section class="content">
              <!-- SECCION DE CONTENIDO -->
              @yield('contenido')

            </section>
            <!-- /.content -->
        </div>

        {{-- Footer --}}
         @include('layouts.footer')

         {{-- Control Sidebar --}}
         @include('layouts.controlSidebar')
    </div>
    <!-- ./wrapper -->
</body>
</html>
