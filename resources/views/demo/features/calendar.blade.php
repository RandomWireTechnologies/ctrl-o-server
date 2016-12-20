@extends('demo.layouts.app')
@section('title', 'Welcome to the Admin')

@section('page-plugin-css')
<link href="{{ asset('assets/css/calendar/fullcalendar.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('page-css')
<link href="{{ asset('assets/css/calendar/custom.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
<!-- Start Contain Section -->
<div class="main-content">
	<div class="page-header">
		<div class="header-left-panel">
			<!-- Title Page -->
			<h1 class="page-title">Calendar</h1>
			<!-- Breadcrumb Section -->
			<ol class="breadcrumb">
				<li><a href="{{ route('demo.index') }}">Home</a></li>
				<li class="text-info">Apps</li>
				<li class="active">Calendar</li>
			</ol>
		</div>
	</div>
	<div class="page-content">
		<div class="row">
			<div class="col-md-3 col-sm-5">
				<!-- START panel-->
				<div class="panel">
					<div class="panel-body mobile-panel">
						<div class="page-wrap">
							<!-- Event Calendar -->
							<h4>Events</h4>
							<div class="input-group form-material margin-bottom-10">
								<input type="text" placeholder="Event name..." class="form-control page-event-name">
								<div class="input-group-btn">
									<button type="button" class="btn btn-info waves-effect waves-light page-event-add-btn">Add</button>
								</div>
							</div>
							<p class="text-muted">
								<small>Choose a Color</small>
							</p>
							<ul class="list-inline page-event-color-selector">
								<li class="p0">
									<a href="#" class="point point-info point-xl selected"></a>
								</li>
								<li class="p0">
									<a href="#" class="point point-danger point-xl"></a>
								</li>
								<li class="p0">
									<a href="#" class="point point-primary point-xl"></a>
								</li>
								<li class="p0">
									<a href="#" class="point point-success point-xl"></a>
								</li>
								<li class="p0">
									<a href="#" class="point point-warning point-xl"></a>
								</li>
							</ul>
						</div>
						<!-- Add Event Calendar -->
						<h4>Add Events</h4>
						<div class="page-events-trash">
							<div class="page-events">
								<div class="bg-success">Lunch</div>
								<div class="bg-danger">Metting</div>
								<div class="bg-info">Conference</div>
								<div class="bg-warning">Dinner</div>
								<div class="bg-primary">Holiday</div>
							</div>
							<p>
								<span class="c-checkbox">
								<label>
								<input id="remove-after-drop" type="checkbox">
								<span class="fa fa-check"></span>Remove after Drop
								</label>
								</span>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-9 col-sm-7">
				<div class="panel">
					<!-- Calendar -->
					<div class="panel-body mobile-panel calenderMain">
						<div id="calendar"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('page-plugin-js')
<script src="{{ asset('assets/plugin/jquery-ui/js/jquery-ui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/calendar/moment.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/calendar/fullcalendar.min.js') }}" type="text/javascript"></script>
@endsection

@section('page-js')
<script src="{{ asset('assets/js/calendar/calendar-custom.js') }}" type="text/javascript"></script>
@endsection
