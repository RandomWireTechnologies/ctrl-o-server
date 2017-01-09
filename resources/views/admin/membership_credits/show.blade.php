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
	{!! Form::label('membership_subscription_id', 'Membership Subscription Id', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    	{!! Form::$INPUT_TYPE$('membership_subscription_id', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="col-sm-12 form-group">
	{!! Form::label('price_paid', 'Price Paid', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    	{!! Form::$INPUT_TYPE$('price_paid', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="col-sm-12 form-group">
	{!! Form::label('payment_type', 'Payment Type', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    	{!! Form::$INPUT_TYPE$('payment_type', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="col-sm-12 form-group">
	{!! Form::label('purchased_at', 'Purchased At', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    	{!! Form::$INPUT_TYPE$('purchased_at', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="col-sm-12 form-group">
	{!! Form::label('begins_at', 'Begins At', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    	{!! Form::$INPUT_TYPE$('begins_at', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="col-sm-12 form-group">
	{!! Form::label('ends_at', 'Ends At', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    	{!! Form::$INPUT_TYPE$('ends_at', null, ['class' => 'form-control']) !!}
    </div>
</div>
</div>
@endsection
