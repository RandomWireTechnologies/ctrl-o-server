<div class="form-group">
	{!! Form::label('name', 'Name', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
    	{!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
	{!! Form::label('email', 'Email', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
    	{!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
	{!! Form::label('password', 'Password', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
    	{!! Form::text('password', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
	{!! Form::label('level', 'Level', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
    	{!! Form::text('level', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
	{!! Form::label('company', 'Company', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
    	{!! Form::text('company', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
	{!! Form::label('phone', 'Phone', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
    	{!! Form::text('phone', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
	{!! Form::label('address_street', 'Address Street', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
    	{!! Form::text('address_street', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
	{!! Form::label('address_unit', 'Address Unit', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
    	{!! Form::text('address_unit', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
	{!! Form::label('address_city', 'Address City', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
    	{!! Form::text('address_city', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
	{!! Form::label('address_state', 'Address State', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
    	{!! Form::text('address_state', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
	{!! Form::label('address_zipcode', 'Address Zipcode', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
    	{!! Form::text('address_zipcode', null, ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Submit Field -->
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-4">
    	{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
