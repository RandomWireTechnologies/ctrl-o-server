@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-sm-12 form-group">
	{!! Form::label('name', 'Name', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    	{!! Form::$INPUT_TYPE$('name', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="col-sm-12 form-group">
	{!! Form::label('type', 'Type', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    	{!! Form::$INPUT_TYPE$('type', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="col-sm-12 form-group">
	{!! Form::label('enabled', 'Enabled', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    	{!! Form::$INPUT_TYPE$('enabled', null, ['class' => 'form-control']) !!}
    </div>
</div>
</div>
@endsection
