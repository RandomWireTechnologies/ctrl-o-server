@extends('layouts.app')
@section('title', 'membership')

@section('content')
<!-- Start Contain Section -->
<div class="main-content">
	@include('partials.page-header')
	<div class="page-content container-fluid">
		@include('flash::message')

		<div class="row">
            <h1 class="pull-left">Edit membership</h1>
        </div>

        <div class="row">
        	{!! Form::model($membership, ['route' => ['memberships.update', $membership->id], 'method' => 'patch', 'class' => 'form-horizontal']) !!}
		        @include('memberships.form')
		    {!! Form::close() !!}
        </div>
	</div>
</div>
<!-- End Contain Section -->
@endsection
