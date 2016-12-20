@extends('layouts.auth')
@section('title', 'Reset Your Password')

@section('page-css')
<link rel="stylesheet" href="{{ asset('assets/css/forgot-page/forgot.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/css/validation/validation.css') }}" type="text/css" />
@endsection

@section('content')
    <body class="page-forgot page-forgot-image1">
        <div class="main-forgot-pass1">
            <div class="content-forgot">
                <div class="forgot-page1 text-center">
                    <h3 class="forgot-heading">Reset Password</h3>
                    <p>
                        Enter a new password to reset your account.<br>
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
                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password *" required>
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="submit"> 
                            <button class="btn btn-info btn-block btn-lg btn-sign waves-effect waves-light" type="submit">Reset</button> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @include('partials.global-js')
        @include('partials.global-template-js')
        <!-- Page Template JavaScript -->
        <script src="{{ asset('assets/js/validation/jquery.validate.min.js') }}"></script>
        @section('scripts')
        <script>
            $('#reset-form').validate({
                rules: {
                    email: {
                        require: true,
                        email: true
                    },
                    password: 'required',
                    password_confirmation: {
                        required: true,
                        equalTo: '#password'
                    }
                },
                messages: {
                    email: {
                        required: 'Please enter your email address.',
                        email: 'Your email must be in the form of name@example.com'
                    },
                    password: 'Create a new password.',
                    password_confirmation: {
                        required: 'Confirm your new password.',
                        equalTo: 'Your passwords must match.'
                    }
                }
            });
        </script>
        @endsection
    </body>
@endsection
