@extends('layout')

@section('content')
	<h1>Card: {{ $card->name }}</h1>

	<div>Owner is: {{ $card->user_id }} </div>

@stop