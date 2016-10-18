@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Card: {{ $card->name }} - {{ $card->serial }}</div>
            <div id="content" class="container panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ Request::url() }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Name*</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ $card->name }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('owner') ? ' has-error' : '' }}">
                        <label for="owner" class="col-md-4 control-label">Owner*</label>

                        <div class="col-md-6">
                            <vue-users
                                user_id='{{ $card->user_id }}'
                            ></vue-users>
                            @if ($errors->has('owner'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('owner') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    
</script>
@stop