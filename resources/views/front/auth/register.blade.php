{{-- @extends('layouts.app')
@section('content') --}}
@extends('front.layout.master')
@section('main-content')
<main class="main">
	<div class="page-header">
		<div class="container d-flex flex-column align-items-center">
			<h1>Register</h1>
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

						<form method="POST" action="{{ route('front.register') }}">
                            @csrf
                            <label for="first_name">
                                First Name
                                <span class="required">*</span>
                            </label>
                            <input type="text" class="form-input form-wide" id="first_name" @error('first_name') is-invalid @enderror name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus/>
                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <label for="last_name">
                                Last Name
                                <span class="required">*</span>
                            </label>
                            <input type="text" class="form-input form-wide" id="last_name" @error('last_name') is-invalid @enderror name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus/>
                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <label for="email">
                                E-Mail Address
                                <span class="required">*</span>
                            </label>
                            <input type="email" class="form-input form-wide" id="email" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email"/>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <label for="password">
                                Password
                                <span class="required">*</span>
                            </label>
                            <input type="password" class="form-input form-wide" id="password @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"/>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <label for="phone-number">
                                Phone Number
                                <span class="required">*</span>
                            </label>
                            <input type="phone-number" class="form-input form-wide" id="phone-number @error('phone_number') is-invalid @enderror" name="phone_number" required autocomplete="phone_number"/>
                            @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <div class="form-footer mb-2">
                                <button type="submit" class="btn btn-dark btn-md w-100 mr-0">
                                    Register
                                </button>
                            </div>
                        </form>
					</div>

				</div>
			</div>
		</div>
	</div>
</main>
@endsection

