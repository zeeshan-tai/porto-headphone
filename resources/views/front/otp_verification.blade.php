@extends('front.layout.master')
@section('main-content')
<main class="main">
	<div class="page-header">
		<div class="container d-flex flex-column align-items-center">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="demo4.html">Home</a></li>
						<li class="breadcrumb-item"><a href="category.html">Shop</a></li>
						<li class="breadcrumb-item active" aria-current="page">
							My Account
						</li>
					</ol>
				</div>
			</nav>

			<h1>My Account</h1>
		</div>
	</div>

	<div class="container reset-password-container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<div class="feature-box border-top-primary">
					<div class="feature-box-content">
						<form class="mb-0" action="{{ route('front.otp_verification_post') }}" method="post" >
                            @csrf
							<p>
								Lost your password? Please enter your
								username or email address. You will receive
								a link to create a new password via email.
							</p>
							<div class="form-group mb-0">
								<label for="reset-email" class="font-weight-normal">Username or email</label>
								<div class="otp-input-container">
                                    <input type="number" class="otp-input" id="otp-box-1" name="otp" maxlength="4" required />
                                    {{-- <input type="number" class="otp-input" id="otp-box-2" name="otp2" maxlength="1" required />
                                    <input type="number" class="otp-input" id="otp-box-3" name="otp3" maxlength="1" required />
                                    <input type="number" class="otp-input" id="otp-box-4" name="otp4" maxlength="1" required /> --}}
                                  </div>
                                  <input type="hidden" name="otp" id="otp">
                                  <input type="hidden" name="email" id="email" value="{{ $email }}">

							</div>

							<div class="form-footer mb-0">
								<a href="{{route('front.login')}}">Click here to login</a>

								<button type="submit"
									class="btn btn-md btn-primary form-footer-right font-weight-normal text-transform-none mr-0">
									<a href="{{ route('front.change_password') }}" >
                                    Reset Password
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
<!-- Add this script tag to include jQuery -->
{{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    var otp = $('#otp-box-1').val() + $('#otp-box-2').val() + $('#otp-box-3').val() + $('#otp-box-4').val();
    $('#otp').val(otp);
</script> --}}
