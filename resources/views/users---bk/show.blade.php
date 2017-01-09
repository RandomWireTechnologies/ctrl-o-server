@extends('layouts.app')

@section('content')
<div class="container">
    <div class="form-group">
	{!! Form::label('name', 'Name', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    	{!! Form::$INPUT_TYPE$('name', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
	{!! Form::label('email', 'Email', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    	{!! Form::$INPUT_TYPE$('email', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
	{!! Form::label('password', 'Password', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    	{!! Form::$INPUT_TYPE$('password', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
	{!! Form::label('level', 'Level', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    	{!! Form::$INPUT_TYPE$('level', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
	{!! Form::label('company', 'Company', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    	{!! Form::$INPUT_TYPE$('company', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
	{!! Form::label('phone', 'Phone', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    	{!! Form::$INPUT_TYPE$('phone', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
	{!! Form::label('address_street', 'Address Street', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    	{!! Form::$INPUT_TYPE$('address_street', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
	{!! Form::label('address_unit', 'Address Unit', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    	{!! Form::$INPUT_TYPE$('address_unit', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
	{!! Form::label('address_city', 'Address City', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    	{!! Form::$INPUT_TYPE$('address_city', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
	{!! Form::label('address_state', 'Address State', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    	{!! Form::$INPUT_TYPE$('address_state', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
	{!! Form::label('address_zipcode', 'Address Zipcode', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    	{!! Form::$INPUT_TYPE$('address_zipcode', null, ['class' => 'form-control']) !!}
    </div>
</div>
</div>
@endsection
