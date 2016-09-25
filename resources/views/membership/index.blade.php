
@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Memberships</div>
            <div id="content" class="container panel-body">
                <vuetable api-url="/api/memberships" 
                    table-wrapper="#content" 
                    :fields="[
                        {
                            name:'name',
                            sortField:'name'
                        },
                        {
                            name:'user_name',
                            sortField:'user_name',
                            title:'Owner Name'
                        },
                        {
                            name:'expires',
                            sortField:'expires'
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
</div>


@endsection