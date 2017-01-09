<div class="col-sm-12 form-group">
	{!! Form::label('membership_id', 'Membership', ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::select('membership_id', $memberships, null, ['class' => 'form-control', 'required']) !!}
    </div>
</div>

<div class="col-sm-12 form-group">
	{!! Form::label('name', 'Name', ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-8">
    	{!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="col-sm-12 form-group">
	{!! Form::label('paypal_subscription_id', 'Paypal Subscription ID', ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-8">
    	{!! Form::text('paypal_subscription_id', null, ['class' => 'form-control']) !!}
    </div>
</div>
