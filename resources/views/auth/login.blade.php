<!-- Login -->
@extends('layouts.app')
@section('content')
<div class="container" id="loginform">
	<div class="row justify-content-center mb-5">
		<div class="col-11 col-lg-9 col-xl-7">
			<div class="card border-grey border-lighten-3 px-1 py-1 m-0 box-shadow-2">
				<div class="card-header border-0">
					<div class="text-center mb-1">
						<img src="app-assets/images/logo/cbitss.png" alt="branding logo">
					</div>
					<div class="font-large-1 font-weight-bold text-center" style="color:#244484;">
						Login
					</div>
				</div>

				<div class="card-content">
					<div class="card-body">
						<form method="POST" action="{{ route('login') }}">
							@csrf
							<fieldset class="form-group position-relative has-icon-left">

								<input id="email" type="email" class="form-control round @error('email') is-invalid @enderror" placeholder="Your Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
								<div class="form-control-position">
									<i class="far fa-user"></i>
								</div>
								@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</fieldset>
							<!--  -->
							<fieldset class="form-group position-relative has-icon-left">
								<input id="password" type="password" name="password" class="form-control round @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" required>
								<i class="fas fa-eye hs" id="togvisi" onclick="togpassvisi()"></i>
								<div class="form-control-position">
									<i class="fas fa-lock"></i>
								</div>
								@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</fieldset>
							<!--  -->
							<fieldset class="form-group text-center">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
									<label class="form-check-label" for="remember">
										{{ __('Remember Me') }}
									</label>
								</div>
							</fieldset>
							<div class="form-group row justify-content-center">
								<!--  -->
								<div class="col-sm-6 text-center">
									<button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-12 mr-1 mb-1">{{ __('Login') }}</button>
								</div>
								<div class="w-100"></div>
								<div class="col-sm-8 text-center">
									@if (Route::has('password.request'))
									<a class="text-left" href="{{ route('password.request') }}">
										{{ __('Forgot Your Password?') }}
									</a>
									@endif
									<div><b>New User</b> <a href="{{ route('register') }}" class="text-right">Register Now</a></div>
								</div>
								<!--  -->
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Login Ends -->
@endsection