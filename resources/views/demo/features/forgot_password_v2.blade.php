@extends('layouts.auth')
@section('title', 'Reset Your Password')

@section('page-css')
<link rel="stylesheet" href="{{ asset('assets/css/login-page/form.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/css/validation/validation.css') }}" type="text/css" />
@endsection

@section('content')
	<body class="page-forgot page-forgot-image1">
		<div class="main-forgot-pass1">
			<div class="content-forgot">
				<div class="forgot-page1 text-center">
					<h3 class="forgot-heading">Reset Password</h3>
					<p>
						Enter your email address and new password to reset your password.<br>
						<small><i>(all fields with an * are required)</i></small>
					</p>
					<!-- Start Forgot password Form -->
					<form action="{{ route('auth.reset.store') }}" class="forgot-form" method="post" id="reset-form">
						{{ csrf_field() }}
						<input type="hidden" name="token" value="{{ $token }}">
						<div class="input-box">
							<div class="textbox-forgot1">
								<input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" placeholder="Email Address *" required autofocus>
								@if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						<div class="input-box">
							<div class="textbox-forgot1">
							<input id="password" type="password" class="form-control" name="password" placeholder="Password *" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						<div class="input-box">
							<div class="textbox-forgot1">
							<input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password *" required>
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						<div class="submit"> 
							<button class="btn btn-info btn-sign waves-effect waves-light" type="submit">Reset</button> 
						</div>
					</form>
					<!-- End Forgot password Form -->
					<p>Already have an account? <a href="{{ route('auth.login.show') }}" class="forgot-signin"> Sign In </a></p>
				</div>
			</div>
		</div>
		@include('partials.global-js')
        @include('partials.global-template-js')
        <!-- Page Template JavaScript -->
        <script src="{{ asset('assets/js/validation/jquery.validate.min.js') }}"></script>
        @section('scripts')
        <script>
            $('#reset-form').validate();
        </script>
        @endsection
	</body>
@endsection