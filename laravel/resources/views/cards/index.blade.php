
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">All Cards</div>

				@foreach ($cards as $card)
					<div class="panel-body">
					
						{{ $card->name }}

					</div>

				@endforeach
            </div>
        </div>
    </div>
</div>

@endsection