@extends('layouts.app')
@section('title', 'Cards')

@section('page-plugin-css')
<link rel="stylesheet" href="{{ asset('assets/css/jsgrid/jsgrid.min.css') }}">
@endsection

@section('content')
<!-- Start Contain Section -->
<div class="main-content">
    <div class="page-content container-fluid">
        @include('flash::message')

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel">
                    <header class="panel-heading">
                        <h3 class="panel-title">Cards</h3>
                        {!! link_to_route('cards.create', 'Add New', [], ['class' => 'btn btn-primary pull-right', 'style' => 'margin-top: 25px']) !!}
                    </header>
                    <div class="panel-body">
                        @if($cards->isEmpty())
                            <div class="well text-center">No Cards found.</div>
                        @else
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <th>Customer Name</th>
                                        <th>Serial</th>
                                        <th>Hash</th>
                                        <th>Enabled</th>
                                        <th class="text-right">Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($cards as $card)
                                        <tr>
                                            <td>{!! $card->name !!}</td>
                                            <td>{!! $card->serial !!}</td>
                                            <td>{!! $card->hash !!}</td>
                                            <td>{{ $card->enabled ? 'Yes' : 'No' }}</td>
                                            <td>
                                                {!! Form::open([
                                                    'route' => ['cards.destroy', $card->id],
                                                    'method' => 'DELETE',
                                                    'onSubmit' => "return confirm('Are you sure wants to delete this Card?')",
                                                ]) !!}
                                                {!! Form::submit('Delete', ['class' => 'btn btn-danger pull-right', 'style' => 'margin-left:10px']) !!}
                                                {!! Form::close() !!}
                                                {!! link_to_route('cards.edit', 'Edit', [$card->id], ['class' => 'btn btn-primary pull-right']) !!}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row pull-right">
                                {{ $cards->links('partials.paginate') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="row">--------------</div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel">
                    <!-- Basic JsGrid -->
                    <header class="panel-heading">
                        <h3 class="panel-title">Basic</h3>
                    </header>
                    <div class="panel-body">
                        <div id="pageBasic"></div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>
<!-- End Contain Section -->
@endsection

@section('page-plugin-js')
<script src="{{ asset('assets/js/jsgrid/jsgrid.min.js') }}"></script>
@endsection

@section('page-js')
<script src="{{ asset('assets/js/jsgrid/jsgrid.config.js') }}"></script>
@endsection

@section('scripts')
<script>
    $("#pageBasic").jsGrid({
            height: "500px",
            width: "100%",
            filtering: !0,
            editing: !0,
            sorting: !0,
            paging: !0,
            autoload: !0,
            pageSize: 15,
            pageButtonCount: 5,
            deleteConfirm: "Do you really want to delete the client?",
            //controller: db,
            fields: [{
                name: "Customer Name",
                type: "text",
                width: 150
            }, {
                name: "Serial",
                type: "text",
                width: 150
            }, {
                name: "Hash",
                type: "text",
                width: 200
            }, {
                name: "Enabled",
                type: "checkbox",
                title: "Enabled",
                sorting: !1
            }, {
                type: "control"
            }]
        });
</script>
@endsection
