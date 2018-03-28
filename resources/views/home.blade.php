@extends('Layout')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11 col-lg-11">
             <div class="box">
                <div class="box-header with-border">
                <h3 class="box-title">Registro Minutas</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
                </div>
                </div>
                <div class="box-body">
                    @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                    @endif
                Panel de registro de minutas
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                Footer
                </div>
        <!-- /.box-footer-->
    </div>
        </div>
    </div>

</div>
@endsection
