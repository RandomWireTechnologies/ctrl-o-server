@extends('layouts.app')
@section('title', 'Member Dashboard')

@section('page-plugin-css')
<link rel="stylesheet" href="{{ asset('assets/css/toastr/toastr.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/validation/validation.css') }}" type="text/css" />
@endsection

@section('content')
<div class="main-content">
    <div class="page-content container-fluid">
        @include('flash::message')
        <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <header class="panel-heading">
                        <h3 class="panel-title">Dashboard</h3>
                    </header>
                    <div class="panel-body">
                        <p>Stuff will go here.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-plugin-js')
<script src="{{ asset('assets/js/toastr/toastr.min.js') }}"></script>
@endsection

@section('page-js')
<script src="{{ asset('assets/js/validation/jquery.validate.min.js') }}"></script>
@endsection

@section('scripts')

@endsection
