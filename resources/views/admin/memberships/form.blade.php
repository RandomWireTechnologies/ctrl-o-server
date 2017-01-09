<div class="col-sm-12 form-group">
	{!! Form::label('user_id', 'Owner', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::select('user_id', $users, null, ['class' => 'form-control', 'required']) !!}
    </div>
</div>

<div class="col-sm-12 form-group">
	{!! Form::label('membershiptype_id', 'Type', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::select('membershiptype_id', $types, null, ['class' => 'form-control', 'required']) !!}
    </div>
</div>

<div class="col-sm-12 form-group">
	{!! Form::label('name', 'Name', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    	{!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
</div>
