@extends('layouts.app')
@section('title', 'membershipCredit')

@section('content')
<!-- Start Contain Section -->
<div class="main-content">
	@include('partials.page-header')
	<div class="page-content container-fluid">
		@include('flash::message')

		<div class="row">
            <h1 class="pull-left">Edit membershipCredit</h1>
        </div>

        <div class="row">
        	{!! Form::model($membershipCredit, ['route' => ['membership-credits.update', $membershipCredit->id], 'method' => 'patch', 'class' => 'form-horizontal']) !!}
		        @include('membership_credits.form')
		    {!! Form::close() !!}
        </div>
	</div>
</div>
<!-- End Contain Section -->
@endsection
