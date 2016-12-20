@extends('layouts.app')
@section('title', 'card')

@section('content')
<!-- Start Contain Section -->
<div class="main-content">
	<div class="page-content container-fluid">
		@include('flash::message')

		<div class="row">
            <h1 class="pull-left">Edit card</h1>
        </div>

        <div class="row">
        	{!! Form::model($card, ['route' => ['cards.update', $card->id], 'method' => 'patch', 'class' => 'form-horizontal']) !!}
		        @include('cards.form')
		    {!! Form::close() !!}
        </div>
	</div>
</div>
<!-- End Contain Section -->
@endsection
