@extends('layouts.app')

@section('content')
	<div class="panel">
		<div class="manage_buttons">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-9">
					<div class="buttons-list">
						<div class="pull-right-btn">
						{!! link_to_route('dish_create_path', 'Agregar Plato', null,['class'=> 'btn btn-primary'])!!}
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	
	<div class="panel">
	  	@if (session('status'))
			<div class="alert alert-success">
		    	{{ session('status') }}
			</div>
		@endif
		@include('include.tabla-platos')
	</div>
@endsection