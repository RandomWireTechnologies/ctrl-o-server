<div class="col-sm-12 form-group">
	{!! Form::label('name', 'Name', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    	{!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="col-sm-12 form-group">
	{!! Form::label('type', 'Type', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    	{!! Form::text('type', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="col-sm-12 form-group">
    <div class="col-sm-10 col-sm-offset-2">
        <label class="control control-checkbox">Enabled
            <input name="enabled" type="checkbox" />
            <span class="control_indicator"></span>
        </label>
    </div>
</div>
