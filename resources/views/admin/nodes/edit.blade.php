@extends('layouts.app')
@section('title', 'node')

@section('content')
<!-- Start Contain Section -->
<div class="main-content">
	@include('partials.page-header')
	<div class="page-content container-fluid">
		@include('flash::message')

		<div class="row">
            <h1 class="pull-left">Edit node</h1>
        </div>

        <div class="row">
        	{!! Form::model($node, ['route' => ['nodes.update', $node->id], 'method' => 'patch', 'class' => 'form-horizontal']) !!}
		        @include('nodes.form')
		    {!! Form::close() !!}
        </div>
	</div>
</div>
<!-- End Contain Section -->
@endsection
