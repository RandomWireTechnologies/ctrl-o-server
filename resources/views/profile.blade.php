@extends('layouts.app')
@section('title', 'Edit Your Profile')

@section('page-plugin-css')
<link rel="stylesheet" href="{{ asset('assets/css/toastr/toastr.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/validation/validation.css') }}" type="text/css" />
@endsection

@section('content')
<div class="main-content">
    <div class="page-content container-fluid">
        @include('flash::message')
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel">
                    <header class="panel-heading">
                        <h3 class="panel-title">Edit Your Profile</h3>
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal" id="password-form" role="form" method="POST" action="{{ route('profile.password') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-3 control-label">Password *</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="password-confirm" class="col-md-3 control-label">Confirm Password *</label>
                                <div class="col-md-6">
                                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                                    @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <b>* Required Fields</b>
                                    <br/>
                                    <button type="submit" class="btn btn-primary">
                                        Change Password
                                    </button>
                                </div>
                            </div>
                        </form>

                        <hr>

                        <form class="form-horizontal" id="profile-form" role="form" method="POST" action="{{ url('/profile') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-3 control-label">Name *</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>
                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-3 control-label">E-Mail Address *</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                                <label for="company" class="col-md-3 control-label">Company</label>
                                <div class="col-md-6">
                                    <input id="company" type="text" class="form-control" name="company" value="{{ $user->company }}">
                                    @if ($errors->has('company'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="phone" class="col-md-3 control-label">Phone *</label>
                                <div class="col-md-6">
                                    <input id="phone" type="text" class="form-control" name="phone" value="{{ $user->phone }}" required>
                                    @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('address_street') ? ' has-error' : '' }}">
                                <label for="address_street" class="col-md-3 control-label">Address *</label>

                                <div class="col-md-6">
                                    <input id="address_street" type="text" class="form-control" name="address_street" value="{{ $user->address_street }}" required>
                                    @if ($errors->has('address_street'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address_street') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('address_unit') ? ' has-error' : '' }}">
                                <label for="address_unit" class="col-md-3 control-label">Unit</label>
                                <div class="col-md-6">
                                    <input id="address_unit" type="text" class="form-control" name="address_unit" value="{{ $user->address_unit }}">
                                    @if ($errors->has('address_unit'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address_unit') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('address_city') ? ' has-error' : '' }}">
                                <label for="address_city" class="col-md-3 control-label">City *</label>
                                <div class="col-md-6">
                                    <input id="address_city" type="text" class="form-control" name="address_city" value="{{ $user->address_city }}" required>
                                    @if ($errors->has('address_city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address_city') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('address_state') ? ' has-error' : '' }}">
                                <label for="address_state" class="col-md-3 control-label">State *</label>
                                <div class="col-md-6">
                                    <input id="address_state" type="text" class="form-control" name="address_state" value="{{ $user->address_state }}" required>
                                    @if ($errors->has('address_state'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address_state') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('address_zipcode') ? ' has-error' : '' }}">
                                <label for="address_zipcode" class="col-md-3 control-label">Zipcode *</label>
                                <div class="col-md-6">
                                    <input id="address_zipcode" type="text" class="form-control" name="address_zipcode" value="{{ $user->address_zipcode }}" required>

                                    @if ($errors->has('address_zipcode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address_zipcode') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <b>* Required Fields</b>
                                    <br/>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-plugin-js')
<script src="{{ asset('assets/js/toastr/toastr.min.js') }}"></script>
@endsection

@section('page-js')
<script src="{{ asset('assets/js/validation/jquery.validate.min.js') }}"></script>
@endsection

@section('scripts')
<script>
    $('#password-form').validate({
        rules: {
            password: {
                required: true,
                minlength: 6
            },
            password_confirmation: {
                required: true,
                equalTo: '#password'
            }
        },
        messages: {
            password: {
                required: 'Please choose a password.',
                minlength: 'Password must be at least 6 characters.'
            },
            password_confirmation: {
                required: 'Please confirm your password.',
                equalTo: 'Your passwords must match.'
            }
        }
    });

    $('#profile-form').validate({
        rules: {
            name: {
                required: true,
                maxlength: 255
            },
            email: {
                required: true,
                email: true
            },
            telephone: {
                required: true,
                phoneUS: true
            },
            address_street: {
                required: true,
                maxlength: 128
            },
            address_city: {
                required: true,
                maxlength: 64
            },
            address_state: {
                required: true,
                minlength: 2,
                maxlength: 2
            },
            address_zipcode: {
                required: true,
                number: true,
                maxlength: 10
            }
        },
        messages: {
            name: {
                required: 'Please enter your Full Name.',
                maxlength: 'Max characters for Full Name is 255.'
            },
            email: {
                required: 'Please enter your Email Address.',
                email: 'Your email must be a valid email format.'
            },
            telephone: {
                required: 'Please enter a telephone number.',
                phoneUS: 'USA telephone numbers only please.'
            },
            address_street: {
                required: 'Please enter your Street address.',
                maxlength: 'Max characters for a Street address is 128.'
            },
            address_city: {
                required: 'Please enter your City.',
                maxlength: 'Max characters for a City is 64.'
            },
            address_state: {
                required: 'Please enter your State abbreviation.',
                minlength: 'Min characters for State is 2.',
                maxlength: 'Max characters for State is 2.'
            },
            address_zipcode: {
                required: 'Please enter your Zip Code.',
                number: 'Your Zip Code can only be numeric.',
                maxlength: 'Max characters for a Zip Code is 10.'
            }
        }
    });
</script>
@endsection
