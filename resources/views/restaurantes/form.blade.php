<div class="col-md-6">
	<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
		{!! Form::label('nombre', 'Nombre:', array('class' => 'control-label')) !!}
		{!! Form::text('nombre',null,['class' => 'form-control', 'placeholder' => 'Nombre']) !!}
		{!! $errors->first('nombre', '<span class="help-block">:message</span>')!!}
	</div>

  <div class="form-group {{ $errors->has('tipo_restaurante') ? 'has-error' : ''}}">
    <label class="control-label">Tipo de Restaurante</label>
    <select class="name_search form-control" name="tipo_restaurante">
      <option value="Ninguno" {{isset($restaurante) && $restaurante->tipo_restaurante == 'Ninguno' ? 'selected' : '' }}>Ninguno</option>
      <option value="Especialidad" {{isset($restaurante) && $restaurante->tipo_restaurante == 'Especialidad' ? 'selected' : '' }}>Restaurante de Especialidad</option>
      <option value="Familiar" {{isset($restaurante) && $restaurante->tipo_restaurante == 'Familiar' ? 'selected' : '' }}>Restaurante Familiar</option>
      <option value="Buffet" {{isset($restaurante) && $restaurante->tipo_restaurante == 'Buffet' ? 'selected' : '' }}>Restaurante Buffet</option>
      <option value="Comida Rapida" {{isset($restaurante) && $restaurante->tipo_restaurante == 'Comida Rapida' ? 'selected' : '' }}>Restaurante de Comida Rápida</option>
      <option value="Temático" {{isset($restaurante) && $restaurante->tipo_restaurante == 'Temático' ? 'selected' : '' }}>Restaurante Temático</option>
    </select>
  </div>

  <div class="form-group {{ $errors->has('direccion') ? 'has-error' : ''}}">
    {!! Form::label('direccion', 'Dirección:', array('class' => 'control-label')) !!}
    {!! Form::text('direccion',null,['class' => 'form-control', 'placeholder' => 'Dirección']) !!}
    {!! $errors->first('direccion', '<span class="help-block">:message</span>')!!}
  </div>
  <div class="form-group {{ $errors->has('ciudad_municipio') ? 'has-error' : ''}}">
    {!! Form::label('ciudad_municipio', 'Ciudad o Municipio', array('class' => 'control-label')) !!}
    {!! Form::text('ciudad_municipio',null,['class' => 'form-control', 'placeholder' => 'Ciudad o Municipio']) !!}
    {!! $errors->first('ciudad_municipio', '<span class="help-block">:message</span>')!!}
  </div>
  <div class="form-group {{ $errors->has('telefono') ? 'has-error' : ''}}">
    {!! Form::label('telefono', 'Teléfono', array('class' => 'control-label')) !!}
    {!! Form::text('telefono',null,['class' => 'form-control', 'placeholder' => 'Teléfono']) !!}
    {!! $errors->first('telefono', '<span class="help-block">:message</span>')!!}
  </div>

	<div class="form-group">
		{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
	</div>
</div>

<!-- -------------------------------------------------------------------------------------------------------------- -->

<div class="col-md-6">  
    <div id="map"></div>
</div>