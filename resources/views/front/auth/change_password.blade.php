@extends('front.layout.master')
{{-- @extends('layouts.app') --}}
@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('change password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('front.change_password') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="passaword" class="col-md-4 col-form-label text-md-right">{{ __('Change Password') }}</label>

                            <div class="col-md-6">
                                <input id="passaword" type="passaword" class="form-control @error('passaword') is-invalid @enderror" name="passaword" value="{{ old('passaword') }}" required autocomplete="passaword" autofocus>

                                @error('passaword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="confirm password" class="col-md-4 col-form-label text-md-right">{{ __('confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="confirm password" type="confirm password" class="form-control @error('confirm password') is-invalid @enderror" name="confirm password" required autocomplete="current-confirm password">

                                @error('confirm password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('change password') }}
                                </button>

                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
