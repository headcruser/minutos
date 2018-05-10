@extends('layouts.app')

@section('content')
	<div class="col-md-offset-4 col-md-1">
		<div class="container">
			<div class="row">
					<div class="col-md-4">
						<div class="panel panel-default">
							<div class="panel-body">
								<form method="POST" action="{{ route('login') }}">
									<legend class="text-center">{{ __('Login') }}</legend>
										@csrf
										<div class="form-group row">
												<label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

												<div class="col-md-12">
														<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

														@if ($errors->has('email'))
																<span class="invalid-feedback">
																		<strong>{{ $errors->first('email') }}</strong>
																</span>
														@endif
												</div>
										</div>

										<div class="form-group row">
												<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

												<div class="col-md-12">
														<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

														@if ($errors->has('password'))
																<span class="invalid-feedback">
																		<strong>{{ $errors->first('password') }}</strong>
																</span>
														@endif
												</div>
										</div>

										<div class="form-group row mb-0">
												<div class="col-md-12">
														<button type="submit" class="btn btn-primary btn-block">
																{{ __('Ingresar') }}
														</button>
												</div>
										</div>
											<div class="form-group row">
												<div class="col-md-6 offset-md-4">
														<a class="btn btn-link" href="{{ route('password.request') }}">
															{{ __('Forgot Your Password?') }}
														</a>
														<div class="checkbox">
																<label>
																		<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
																</label>
														</div>
												</div>
										</div>
								</form>
							</div>
						</div>

					</div>
			</div>

		</div>
	</div>
@endsection
