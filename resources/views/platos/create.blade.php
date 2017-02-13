@extends('layouts.app')

@section('content')
	<div class="page_header">
		<div class="pull-left">
			<i class="fa fa-upload page_header_icon"></i>
			<span class="main-text">Agregar un Plato</span>
			<p class="text">
				Agregar
			</p>
		</div>
		<div class="right pull-right">
			<ul class="right_bar">
				<li class="list-unstyled"><i class="icon ion-checkmark text-primary"></i> &nbsp;Nombre</li>
				<li class="list-unstyled"><i class="icon ion-checkmark text-primary"></i> &nbsp;Precio</li>
				<li class="list-unstyled"><i class="icon ion-checkmark text-primary"></i> &nbsp;Tiempo</li>
			</ul>
		</div>
	</div>
	<div class="panel">
		@if (session('status'))
			<div class="alert alert-success">
		    	{{ session('status') }}
			</div>
		@endif
		<div class="panel-body">
		{!! Form::open(['route' => 'dish_store_path', 'files' => true, 'class' => 'form']) !!}
			@include ('platos.form')
		{!! Form::close() !!}
		</div>
	</div>
@endsection

@section('js')
	<script src='/assets/js/select2.js'></script>
	<script type="text/javascript" src="/assets/js/tinymce/tinymce.min.js"></script>
@endsection