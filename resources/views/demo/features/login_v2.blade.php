@extends('layouts.auth')
@section('title', 'Login')

@section('page-css')
<link rel="stylesheet" href="{{ asset('assets/css/login-page/form.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/css/validation/validation.css') }}" type="text/css" />
@endsection

@section('content')
	<body class="login-form login-form-second page-login-second">
		<div class="login-page-second">
			<div class="main-login-form">
				<div class="content-login">
					<div class="login-page login-page-inner">
						<div class="logo-title left-align-login">
							<h3 class="logo-name">Sign in</h3>
						</div>
						<p class="sign-login left-align-login"><small>Sign in account.</small></p>
						<!-- Start Login Form -->
						<form action="{{ route('auth.login.store') }}" class="form-login" id="form1" method="post">
							<div class="input-box">
								<div class="left-icon-login btn-info"><i class="icon icon_mail"></i></div>
								<div class="textbox-login">
									<input type="text" id='email' name='email' value="{{ old('email') }}" class="form-control" placeholder="Email" />
									@if ($errors->has('email'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('email') }}</strong>
	                                    </span>
	                                @endif
								</div>
							</div>
							<div class="input-box">
								<div class="left-icon-login btn-info"><i class="icon icon_lock"></i></div>
								<div class="textbox-login">
									<input type="password" name='password' class="form-control" placeholder="Password" />
									@if ($errors->has('password'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('password') }}</strong>
	                                    </span>
	                                @endif
								</div>
							</div>
							<div class="bottom-login">
								<div class="remember-text-login">
									<span class="checkbox-custom checkbox-primary">
									<input id="requiredCheckbox" class="all-selectable" type="checkbox">
									<label for="requiredCheckbox">Remember me</label>
									</span>
								</div>
								<div class="remember-text-login forget-password-login">
									<a href="{{ route('auth.forgot.show') }}">Forgot password?</a>
								</div>
							</div>
							<div class="form-group">
								<button class="btn btn-info btn-sign waves-effect waves-dark" type="submit">Sign In</button>
							</div>
						</form>
						<div class="sign-up-text left-align-login">Create A New Account? Go to <a class="underline" href="{{ route('auth.register.show') }}">Sign up</a>.</div>
						<!-- End Login Form -->
					</div>
				</div>
			</div>
		</div>
		<div class="main-login-form">
			<div class="content-login">
				<div class="login-page login-page-inner">
					<div class="right-login2">
						<div class="right-in-login2">
							<div class="icon-logo">
								<!-- Template Logo -->
								<img class="logo-image" alt="logo image" src="{{ asset('assets/images/login.png') }}">
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget orci eget sapien facilisis efficitur aliquam tristique arcu. Suspendisse in lorem luctus. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
		@include('partials.global-js')
		@include('partials.global-template-js')
		<!-- Page Template JavaScript -->
		<script src="{{ asset('assets/js/validation/jquery.validate.min.js') }}"></script>
		<script src="{{ asset('assets/js/validation/validation.js') }}"></script>
	</body>
@endsection