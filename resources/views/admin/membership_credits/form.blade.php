<div class="col-sm-12 form-group">
	{!! Form::label('membership_id', 'Membership', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        {!! Form::select('membership_id', $memberships, null, ['class' => 'form-control', 'required']) !!}
    </div>
</div>

<div class="col-sm-12 form-group">
	{!! Form::label('membership_subscription_id', 'Subscription', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        {!! Form::select('membership_subscription_id', $subscriptions, null, ['class' => 'form-control', 'required']) !!}
    </div>
</div>

<div class="col-sm-12 form-group">
	{!! Form::label('price_paid', 'Price Paid', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
    	{!! Form::text('price_paid', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="col-sm-12 form-group">
	{!! Form::label('payment_type', 'Payment Type', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
    	{!! Form::text('payment_type', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="col-sm-12 form-group">
	{!! Form::label('purchased_at', 'Purchased', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        <div class="input-group">
        	{!! Form::text('purchased_at', null, ['class' => 'form-control datepicker']) !!}
            <span class="input-group-addon">
                <i class="icon md-calendar" aria-hidden="true"></i>
            </span>
        </div>
    </div>
</div>

<div class="col-sm-12 form-group">
	{!! Form::label('begins_at', 'Begins', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        <div class="input-group">
    	   {!! Form::text('begins_at', null, ['class' => 'form-control datepicker']) !!}
           <span class="input-group-addon">
                <i class="icon md-calendar" aria-hidden="true"></i>
            </span>
        </div>
    </div>
</div>

<div class="col-sm-12 form-group">
	{!! Form::label('ends_at', 'Ends', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
    	<div class="input-group">
           {!! Form::text('ends_at', null, ['class' => 'form-control datepicker']) !!}
           <span class="input-group-addon">
                <i class="icon md-calendar" aria-hidden="true"></i>
            </span>
        </div>
    </div>
</div>
