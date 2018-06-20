@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
	<div class="col-md-6">
		<div class="card">
			<div class="card-header card-header-primary">
				<h4 class="card-title text-center">LOGIN</h4>
			</div>
			<div class="card-body">

				{!! Form::open(['route' =>'login','method' => 'POST']) !!}

						<div class="form-group">
								<label for="email">Email address</label>
								<input id="email" aria-describedby="emailHelp" placeholder="Enter email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
								@if ($errors->has('email'))
									<span class="invalid-feedback">
											<strong>{{ $errors->first('email') }}</strong>
									</span>
								@endif
						</div>

						<div class="form-group">
							<label for="password" class="">{{ __('Password') }}</label>
							<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

							@if ($errors->has('password'))
									<span class="invalid-feedback">
											<strong>{{ $errors->first('password') }}</strong>
									</span>
							@endif
						</div>

						<button type="submit" class="btn btn-primary btn-block">
								{{ __('Ingresar') }}
						</button>

						</div>
							<div class="form-group">
								<div class="col-md-12">
										<a class="" href="{{ route('password.request') }}">
											{{ __('OLVIDASTE TU CONTRASEÑA?') }}
										</a>

								</div>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Recordarme') }}
							</label>
						</div>

				{!! Form::close() !!}

			</div>
		</div>
	</div>
</div>

@endsection
