@extends('demo.layouts.app')
@section('title', 'Blank')

@section('content')
<!-- Start Contain Section -->
<div class="main-content">
	@include('admin.partials.page-header', [
		'page' => 'Blank'
	])
	<div class="page-content container-fluid">
	
	</div>
</div>
<!-- End Contain Section -->
@endsection
		