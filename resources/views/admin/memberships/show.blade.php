@extends('layouts.app')

@section('content')
<div class="container">
    <div class="form-group">
	{!! Form::label('owner_id', 'Owner Id', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
    	{!! Form::$INPUT_TYPE$('owner_id', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
	{!! Form::label('membershiptype_id', 'Membershiptype Id', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
    	{!! Form::$INPUT_TYPE$('membershiptype_id', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
	{!! Form::label('name', 'Name', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
    	{!! Form::$INPUT_TYPE$('name', null, ['class' => 'form-control']) !!}
    </div>
</div>
</div>
@endsection
