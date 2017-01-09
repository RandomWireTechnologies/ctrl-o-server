@extends('layouts.app')
@section('title', 'Add New membershipCredit')

@section('content')
<!-- Start Contain Section -->
<div class="main-content">
	@include('partials.page-header')
	<div class="page-content container-fluid">
		@include('flash::message')

		<div class="row">
            <h1 class="pull-left">Add New membershipCredit</h1>
        </div>

        <div class="row">
        	{!! Form::open(['route' => 'membership-credits.store', 'class' => 'form-horizontal']) !!}
		        @include('membership_credits.form')
		    {!! Form::close() !!}
        </div>
	</div>
</div>
<!-- End Contain Section -->
@endsection
