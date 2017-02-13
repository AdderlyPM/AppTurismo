<div class="col-md-6">
	<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
		{!! Form::label('nombre', 'Nombre:', array('class' => 'control-label')) !!}
		{!! Form::text('nombre',null,['class' => 'form-control', 'placeholder' => 'Nombre']) !!}
		{!! $errors->first('nombre', '<span class="help-block">:message</span>')!!}
	</div>

  <div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}}">
    {!! Form::label('precio', 'Precio:', array('class' => 'control-label')) !!}
    {!! Form::text('precio',null,['class' => 'form-control', 'placeholder' => 'Precio']) !!}
    {!! $errors->first('precio', '<span class="help-block">:message</span>')!!}
  </div>
  <div class="form-group {{ $errors->has('tiempo_orden') ? 'has-error' : ''}}">
    {!! Form::label('tiempo_orden', 'Tiempo de la orden', array('class' => 'control-label')) !!}
    {!! Form::text('tiempo_orden',null,['class' => 'form-control', 'placeholder' => 'Tiempo de la orden']) !!}
    {!! $errors->first('tiempo_orden', '<span class="help-block">:message</span>')!!}
  </div>

	<div class="form-group">
		{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
	</div>
</div>