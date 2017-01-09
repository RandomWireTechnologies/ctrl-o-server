@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-sm-12 form-group">
	{!! Form::label('membership_id', 'Membership Id', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    	{!! Form::$INPUT_TYPE$('membership_id', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="col-sm-12 form-group">
	{!! Form::label('name', 'Name', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    	{!! Form::$INPUT_TYPE$('name', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="col-sm-12 form-group">
	{!! Form::label('paypal_subscription_id', 'Paypal Subscription Id', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    	{!! Form::$INPUT_TYPE$('paypal_subscription_id', null, ['class' => 'form-control']) !!}
    </div>
</div>
</div>
@endsection
