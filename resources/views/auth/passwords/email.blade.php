@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="panel panel-primary">

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title text-center">ENVIAR E-MAIL</h4>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' =>'password.email','method' => 'POST']) !!}
                            <div class="form-group">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Enviar para restablecer Contraseña') }}
                            </button>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
