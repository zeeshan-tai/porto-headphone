@extends('front.layout.master')
@section('main-content')
<main class="main">
	<div class="page-header">
		<div class="container d-flex flex-column align-items-center">
			<h1>Login</h1>
		</div>
	</div>

	<div class="container login-container">
		<div class="row">
			<div class="col-lg-10 mx-auto">
				<div class="row justify-content-center">
					<div class="col-md-6 mt-5">
						{{-- <div class="heading mb-1">
							<h2 class="title">Login</h2>
						</div> --}}

						<form method="POST" action="{{ route('front.login') }}">
                            @csrf
							<label for="email" class="col-md-4 col-form-label">Email
								<span class="required">*</span>
							</label>
							<input id="email" type="email" class="form-input form-wide @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>

                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

							<label for="password" class="col-md-4 col-form-label">Password
								<span class="required">*</span>
							</label>
							<input type="password" class="form-input form-wide" id="password @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

							<div class="form-footer">
								<div class="custom-control custom-checkbox mb-0">
									<input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
									<label class="custom-control-label mb-0" for="remember">{{ __('Remember Me') }}</label>
								</div>

                                {{-- @if (Route::has('password.request')) --}}
								<a href="{{route('front.forgotpassword')}}"
									class="forget-password text-dark form-footer-right">
                                    Forgot Password
                                </a>
                                {{-- @endif --}}
							</div>
							<button type="submit" class="btn btn-dark btn-md w-100">
                                {{ __('Login') }}
							</button>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>
</main>
@endsection
