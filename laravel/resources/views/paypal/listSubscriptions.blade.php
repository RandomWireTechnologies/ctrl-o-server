@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Paypal Subscriptions</div>
                @if (count($subscriptions) > 0)
                @foreach ($subscriptions as $subscription)
                    <div class="panel-body">
                    
                        {{ $subscription->getName() }}

                    </div>

                @endforeach
                @endif
                <hr>
                <div class="panel-body">
                    Raw Data: <br/>
                    {{ $subscription_raw }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
