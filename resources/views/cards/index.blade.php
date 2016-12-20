@extends('layouts.app')
@section('title', 'Cards')

@section('page-plugin-css')
<link rel="stylesheet" href="{{ asset('assets/fonts/material-design/material-design.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/jsgrid/jsgrid.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/pagination/style.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/toastr/toastr.min.css') }}" />
@endsection

@section('content')
<!-- Start Contain Section -->
<div class="main-content">
    <div class="page-content container-fluid">
        @include('flash::message')

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel">
                    <!-- Basic JsGrid -->
                    <header class="panel-heading">
                        <h3 class="panel-title">Cards</h3>
                    </header>
                    <div class="panel-body">
                        <div id="browse"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-scalled" id="form-modal" aria-hidden="true" role="dialog">
        <div class="modal-dialog open-modal-center">
            {!! Form::open([
                'route' => 'cards.store', 
                'id'    => 'add-form', 
                'class' => 'modal-content form-horizontal',
                'novalidate'
            ]) !!}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title">Add Card</h4>
                </div>
                
                <div class="modal-body">
                    <div class="row">
                        @include('cards.form', ['users' => $users])
                    </div>
                </div>
                <div class="modal-footer">
                    {!! Form::button('Cancel', [
                        'class'        => 'btn waves-effect waves-light',
                        'data-dismiss' => 'modal'
                    ]) !!}
                    {!! Form::submit('Save', ['class' => 'btn btn-primary waves-effect waves-light']) !!}
                </div> 
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- End Contain Section -->
@endsection

@section('page-plugin-js')
<script src="{{ asset('assets/js/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('assets/js/jsgrid/jsgrid.min.js') }}"></script>
@endsection

@section('page-js')
<script src="{{ asset('assets/js/jsgrid/jsgrid.config.js') }}"></script>
<script src="{{ asset('assets/js/validation/jquery.validate.min.js') }}"></script>
@endsection

@section('scripts')

@include('partials.gridjs', [
    'deleteConfirm' => 'Do you really want to delete this Card?',
    'loadRoute'     => route('api.cards.list'),
    'updateRoute'   => route('cards.update', ['id' => ':id']),
    'insertRoute'   => route('cards.store'),
    'deleteRoute'   => route('cards.destroy', ['id' => ':id']),
    'fields' => [
        0 => [
            'name'    => 'name',
            'title'   => 'Customer Name',
            'type'    => 'text',
            'width'   => 150
        ],
        1 => [
            'name'    => 'serial',
            'title'   => 'Serial',
            'type'    => 'text',
            'width'   => 150
        ],
        2 => [
            'name'    => 'hash',
            'title'   => 'Hash',
            'type'    => 'text',
            'width'   => 200
        ],
        3 => [
            'name'    => 'enabled',
            'title'   => 'Enabled',
            'type'    => 'checkbox'
        ]
    ],
    'rules' => [
        'name'   => 'required',
        'serial' => 'required',
        'hash'   => 'required'
    ],
    'messages' => [
        'name'   => 'Please enter a Name.',
        'serial' => 'Please enter a Serial.',
        'hash'   => 'Please enter a Hash.'
    ]
])

@endsection
