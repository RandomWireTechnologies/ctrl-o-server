@extends('layouts.app')
@section('title', 'user')

@section('content')
<!-- Start Contain Section -->
<div class="main-content">
	@include('partials.page-header')
	<div class="page-content container-fluid">
		@include('flash::message')

		<div class="row">
            <h1 class="pull-left">Edit user</h1>
        </div>

        <div class="row">
        	{!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch', 'class' => 'form-horizontal']) !!}
		        @include('users.form')
		    {!! Form::close() !!}
        </div>
	</div>
</div>
<!-- End Contain Section -->
@endsection
