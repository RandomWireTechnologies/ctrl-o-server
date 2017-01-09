<div class="col-sm-12 form-group">
	{!! Form::label('name', 'Name', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
    	{!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="col-sm-12 form-group">
	{!! Form::label('duration', 'Duration', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
    	{!! Form::number('duration', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="col-sm-12 form-group">
	{!! Form::label('duration_unit', 'Duration Unit', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
    	{!! Form::text('duration_unit', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="col-sm-12 form-group">
	{!! Form::label('max_users', 'Max Users', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
    	{!! Form::number('max_users', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="col-sm-12 form-group">
	{!! Form::label('price', 'Price', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
    	{!! Form::text('price', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="col-sm-12 form-group">
	{!! Form::label('price_2', 'Price Alt.', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
    	{!! Form::text('price_2', null, ['class' => 'form-control']) !!}
    </div>
</div>
