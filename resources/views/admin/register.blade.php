@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin: Register a new user</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name*</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address*</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Phone*</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                            <label for="company" class="col-md-4 control-label">Company</label>

                            <div class="col-md-6">
                                <input id="company" type="text" class="form-control" name="company" value="{{ old('company') }}">

                                @if ($errors->has('company'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('address_street') ? ' has-error' : '' }}">
                            <label for="address_street" class="col-md-4 control-label">Address*</label>

                            <div class="col-md-6">
                                <input id="address_street" type="text" class="form-control" name="address_street" value="{{ old('address_street') }}" required>

                                @if ($errors->has('address_street'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address_street') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address_unit') ? ' has-error' : '' }}">
                            <label for="address_unit" class="col-md-4 control-label">Unit</label>

                            <div class="col-md-6">
                                <input id="address_unit" type="text" class="form-control" name="address_unit" value="{{ old('address_unit') }}">

                                @if ($errors->has('address_unit'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address_unit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address_city') ? ' has-error' : '' }}">
                            <label for="address_city" class="col-md-4 control-label">City*</label>

                            <div class="col-md-6">
                                <input id="address_city" type="text" class="form-control" name="address_city" value="{{ old('address_city') }}" required>

                                @if ($errors->has('address_city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address_city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address_state') ? ' has-error' : '' }}">
                            <label for="address_state" class="col-md-4 control-label">State*</label>

                            <div class="col-md-6">
                                <input id="address_state" type="text" class="form-control" name="address_state" value="{{ old('address_state') }}" required>

                                @if ($errors->has('address_state'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address_state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address_zipcode') ? ' has-error' : '' }}">
                            <label for="address_zipcode" class="col-md-4 control-label">Zipcode*</label>

                            <div class="col-md-6">
                                <input id="address_zipcode" type="text" class="form-control" name="address_zipcode" value="{{ old('address_zipcode') }}" required>

                                @if ($errors->has('address_zipcode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address_zipcode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <b>* Required Fields</b>
                                <br/>
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
