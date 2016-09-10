
@extends('layouts.app')

@section('content')

<div id="content" class="container">
    <vuetable api-url="/api/cards" 
        table-wrapper="#content" 
        :fields="[
        	{
        		name:'name',
        		sortField:'name'
        	},
        	{
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

@endsection