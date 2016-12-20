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
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
                <div class="forgot-page1 text-center">
                    <h3 class="forgot-heading">Reset Password</h3>
                    <p class="text-left">
                        Enter your email address and we'll send you link to reset your password. <small><i>(all fields with an * are required)</i></small>
                    </p>
                    <!-- Start Forgot password Form -->
                    <form action="{{ route('auth.forgot.store') }}" class="login-form" method="post" id="forgot-form">
                        {{ csrf_field() }}
                        <div class="input-box">
                            <div class="textbox-forgot1" style="width:337px">
                                <input type="text" id='email' name='email' value="{{ old('email') }}" class="form-control right-textbox1" placeholder="Email Address *" required />
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="submit btn-forgot2"> 
                                <button class="btn btn-info btn-sign waves-effect waves-light" type="submit">GO</button> 
                            </div>
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
            $('#forgot-form').validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    }
                },
                messages: {
                    email: {
                        required: 'Please enter your email address.',
                        email: 'Your email must be in the form of name@example.com'
                    }
                }
            });
        </script>
        @endsection
    </body>
@endsection