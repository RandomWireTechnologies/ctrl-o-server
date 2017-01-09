@extends('layouts.app')
@section('title', 'schedule')

@section('content')
<!-- Start Contain Section -->
<div class="main-content">
	@include('partials.page-header')
	<div class="page-content container-fluid">
		@include('flash::message')

		<div class="row">
            <h1 class="pull-left">Edit schedule</h1>
        </div>

        <div class="row">
        	{!! Form::model($schedule, ['route' => ['schedules.update', $schedule->id], 'method' => 'patch', 'class' => 'form-horizontal']) !!}
		        @include('schedules.form')
		    {!! Form::close() !!}
        </div>
	</div>
</div>
<!-- End Contain Section -->
@endsection
