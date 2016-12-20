@extends('layouts.auth')
@section('title', 'Create a New Account')

@section('page-css')
<link rel="stylesheet" href="{{ asset('assets/css/login-page/form.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/css/validation/validation.css') }}" type="text/css" />
@endsection

@section('content')
	<body class="login-form login-form-second page-login-second">
		<div class="login-page-second register-page">
			<div class="main-login-form">
				<div class="content-login">
					<div class="login-page login-page-inner">
						<div class="logo-title left-align-login">
							<h3 class="logo-name">Account Registration</h3>
						</div>
						<p class="sign-login left-align-login"><small>Create a new account.</small></p>
						<!-- Start Register Form -->
						<form action="{{ route('auth.register.store') }}" class="form-login" id="form1" method="post">
							{{ csrf_field() }}
							<div class="input-box">
								<div class="left-icon-login btn-info"><i class="icon icon_profile"></i></div>
								<div class="textbox-login">
									<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Full Name *" required autofocus>
	                                @if ($errors->has('name'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('name') }}</strong>
	                                    </span>
	                                @endif
								</div>
							</div>
							<div class="input-box">
								<div class="left-icon-login btn-info"><i class="icon icon_mail"></i></div>
								<div class="textbox-login">
									<input id="email" type="email" class="form-control" name="email" placeholder="Email Address *" value="{{ old('email') }}" required>
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
									<input id="password" type="password" class="form-control" name="password" placeholder="Password *" required>
	                                @if ($errors->has('password'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('password') }}</strong>
	                                    </span>
	                                @endif
								</div>
							</div>
							<div class="input-box">
								<div class="left-icon-login btn-info"><i class="icon icon_lock"></i></div>
								<div class="textbox-login">
									<input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password *" required>
	                                @if ($errors->has('password_confirmation'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
	                                    </span>
	                                @endif
								</div>
							</div>

							<div class="input-box">
								<div class="left-icon-login btn-info"><i class="icon icon_building"></i></div>
								<div class="textbox-login">
									<input id="company" type="text" class="form-control" name="company" placeholder="Company" value="{{ old('company') }}">
	                                @if ($errors->has('company'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('company') }}</strong>
	                                    </span>
	                                @endif
								</div>
							</div>

							<div class="input-box">
								<div class="left-icon-login btn-info"><i class="icon icon_building"></i></div>
								<div class="textbox-login">
									<input id="phone" type="text" class="form-control" name="phone" placeholder="Telephone *" value="{{ old('phone') }}" required>
	                                @if ($errors->has('phone'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('phone') }}</strong>
	                                    </span>
	                                @endif
								</div>
							</div>

							<div class="input-box">
								<div class="left-icon-login btn-info"><i class="icon icon_building"></i></div>
								<div class="textbox-login">
									<input id="address_street" type="text" class="form-control" name="address_street" value="{{ old('address_street') }}" placeholder="Street *" required>
	                                @if ($errors->has('address_street'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('address_street') }}</strong>
	                                    </span>
	                                @endif
								</div>
							</div>

							<div class="input-box">
								<div class="left-icon-login btn-info"><i class="icon icon_building"></i></div>
								<div class="textbox-login">
									<input id="address_unit" type="text" class="form-control" placeholder="Unit/Apt/Suite" name="address_unit" value="{{ old('address_unit') }}">
	                                @if ($errors->has('address_unit'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('address_unit') }}</strong>
	                                    </span>
	                                @endif
								</div>
							</div>

							<div class="input-box">
								<div class="left-icon-login btn-info"><i class="icon icon_building"></i></div>
								<div class="textbox-login">
									<input id="address_city" type="text" class="form-control" name="address_city" value="{{ old('address_city') }}" placeholder="City *" required>
	                                @if ($errors->has('address_city'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('address_city') }}</strong>
	                                    </span>
	                                @endif
								</div>
							</div>

							<div class="input-box">
								<div class="left-icon-login btn-info"><i class="icon icon_building"></i></div>
								<div class="textbox-login">
									<input id="address_state" type="text" class="form-control" name="address_state" value="{{ old('address_state') }}" placeholder="State *" required>
	                                @if ($errors->has('address_state'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('address_state') }}</strong>
	                                    </span>
	                                @endif
								</div>
							</div>

							<div class="input-box">
								<div class="left-icon-login btn-info"><i class="icon icon_building"></i></div>
								<div class="textbox-login">
									<input id="address_zipcode" type="text" class="form-control" name="address_zipcode" value="{{ old('address_zipcode') }}" placeholder="Zip Code *" required>
	                                @if ($errors->has('address_zipcode'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('address_zipcode') }}</strong>
	                                    </span>
	                                @endif
								</div>
							</div>

							<div class="bottom-login">
								<div class="remember-text-login">
									<span class="checkbox-custom checkbox-primary">
									<input id="requiredCheckbox" class="all-selectable" type="checkbox">
									<label for="requiredCheckbox">I agree to the <a href="javascript:void(0)">Terms and Conditions</a> and <a href="javascript:void(0)">Privacy Policy. </a></label>
									</span>
								</div>
							</div>
							<div class="form-group">
								<button class="btn btn-info mobile-btn-login btn-sign waves-effect waves-dark" type="submit">Sign Up</button>
							</div>
						</form>
						<!-- End Register Form -->
						<div class="sign-up-text left-align-login">Have An Account? Go to <a class="underline" href="{{ route('auth.login.show') }}">Sign in</a>.</div>
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
                            <p>Here's where we'll put a nice little blurb about how super awesome Ctrl-O-Server is, and why you should be using it.</p>
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