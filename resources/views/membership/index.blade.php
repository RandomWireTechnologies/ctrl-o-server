
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
                            name:'owner.name',
                            sortField:'owner_id',
                            title:'Owner Name'
                        },
                        {
                            name:'type.name',
                            sortField:'membershiptype_id',
                            title: 'Membership Type'
                        },
                        ]" 
                    data-path="data"
                    pagination-path=""
                    per-page='40'
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