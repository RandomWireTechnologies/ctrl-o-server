@extends('layouts.app')
@section('title', 'Add New membershipSubscription')

@section('content')
<!-- Start Contain Section -->
<div class="main-content">
	@include('partials.page-header')
	<div class="page-content container-fluid">
		@include('flash::message')

		<div class="row">
            <h1 class="pull-left">Add New membershipSubscription</h1>
        </div>

        <div class="row">
        	{!! Form::open(['route' => 'membership-subscriptions.store', 'class' => 'form-horizontal']) !!}
		        @include('membership_subscriptions.form')
		    {!! Form::close() !!}
        </div>
	</div>
</div>
<!-- End Contain Section -->
@endsection
