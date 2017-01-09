<div class="col-sm-12 form-group">
	{!! Form::label('user_id', 'User', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    	{!! Form::select('user_id', $users, null, ['class' => 'form-control', 'required']) !!}
    </div>
</div>

<div class="col-sm-12 form-group">
	{!! Form::label('name', 'Name', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    	{!! Form::text('name', null, [
            'class' => 'form-control', 
            'required'
        ]) !!}
    </div>
</div>

<div class="col-sm-12 form-group">
	{!! Form::label('serial', 'Serial', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    	{!! Form::text('serial', null, [
            'class' => 'form-control', 
            'required'
        ]) !!}
    </div>
</div>

<div class="col-sm-12 form-group">
	{!! Form::label('hash', 'Hash', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    	{!! Form::text('hash', null, [
            'class' => 'form-control', 
            'required'
        ]) !!}
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
