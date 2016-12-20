@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="main-content">
    @include('admin.partials.page-header', [
        'page' => 'Blank'
    ])
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Setup New Users</div>
                    <div id="content" class="container panel-body">
                        <a href="/admin/register" class="btn btn-primary">Register New Account</a>
                        <a href="/admin/new" class="btn btn-primary">Setup New User</a>
                    </div>
                    <div class="panel-heading">Users</div>
                    <div id="users" class="container panel-body">
                        <vuetable api-url="/api/users" 
                            table-wrapper="#users" 
                            :fields="[
                                {
                                    name:'name',
                                    sortField:'name'
                                },
                                {
                                    name:'email',
                                    sortField:'email'
                                },
                                {
                                    name:'level',
                                    sortField:'level'
                                },
                                ]" 
                            data-path="data"
                            pagination-path=""
                            per-page='5'
                            :sort-order="[{field:'name',direction:'asc'}]",
                            multiSort: true,
                            paginationComponent: 'vuetable-pagination',
                            v-ref:table
                            >
                        </vuetable>
                    </div>
                    <div class="panel-heading">Cards</div>
                    <div id="cards" class="container panel-body">
                        <vuetable api-url="/api/cards" 
                            table-wrapper="#cards" 
                            :fields="[
                                {
                                    name:'user.name',
                                    title:'Owner Name',
                                    sortField:'user.name'
                                },
                                {
                                    name:'name',
                                    title:'Card Name',
                                    sortField:'name'
                                },
                                {
                                    name:'serial',
                                    sortField:'serial'
                                },
                                {
                                    name:'enabled',
                                    sortField:'enabled'
                                }]" 
                            data-path="data"
                            pagination-path=""
                            per-page='5'
                            :sort-order="[{field:'name',direction:'asc'}]",
                            multiSort: true,
                            paginationComponent: 'vuetable-pagination',
                            v-ref:table
                            >
                        </vuetable>
                    </div>
                    
                    <div class="panel-heading">Nodes</div>
                    <div id="nodes" class="container panel-body">
                        <vuetable api-url="/api/nodes" 
                            table-wrapper="#nodes" 
                            :fields="[
                                {
                                    name:'name',
                                    sortField:'name'
                                },
                                {
                                    name:'type',
                                    sortField:'type'
                                },
                                {
                                    name:'enabled',
                                    sortField:'enabled'
                                }]" 
                            data-path="data"
                            pagination-path=""
                            per-page='5'
                            :sort-order="[{field:'name',direction:'asc'}]",
                            multiSort: true,
                            paginationComponent: 'vuetable-pagination',
                            v-ref:table
                            >
                        </vuetable>
                    </div>
                    
                    <div class="panel-heading">Schedules</div>
                    <div id="schedules" class="container panel-body">
                        <vuetable api-url="/api/schedules" 
                            table-wrapper="#schedules" 
                            :fields="[
                                {
                                    name:'name',
                                    sortField:'name'
                                },
                                ]" 
                            data-path="data"
                            pagination-path=""
                            per-page='5'
                            :sort-order="[{field:'name',direction:'asc'}]",
                            multiSort: true,
                            paginationComponent: 'vuetable-pagination',
                            v-ref:table
                            >
                        </vuetable>
                    </div>
                    
                </div>
            </div>
        </div>

        <div id="content" class="container">
            <vuetable api-url="/api/cards" 
                table-wrapper="#users" 
                :fields="[
                    {
                        name:'name',
                        sortField:'name'
                    },
                    {btn btn-primary
                        name:'serial',
                        sortField:'serial'
                    },
                    {
                        name:'hash',
                        sortField:'hash'
                    }, 
                    {
                        name:'enabled',
                        sortField:'enabled'
                    }]" 
                data-path="data"
                pagination-path=""
                per-page='10'
                :sort-order="[{field:'name',direction:'asc'}]",
                multiSort: true,
                paginationComponent: 'vuetable-pagination',
                v-ref:table
                >
        </vuetable>
        </div>
    </div>
</div>
@endsection