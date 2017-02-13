@extends('layouts.app')

@section('content')
	<div class="page_header">
		<div class="pull-left">
			<i class="fa fa-pencil-square page_header_icon"></i>
			<span class="main-text">{{$restaurante->nombre}}</span>
			<p class="text">
				Editar
			</p>
		</div>
		<div class="right pull-right">
			<ul class="right_bar">
				<li class="list-unstyled"><i class="icon ion-checkmark text-primary"></i> &nbsp;Editor</li>
				<!-- <li class="list-unstyled"><i class="icon ion-checkmark text-primary"></i> &nbsp;Advanced Features</li>
				<li class="list-unstyled"><i class="icon ion-checkmark text-primary"></i> &nbsp;Virtual Keyboard</li> -->
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
		{!! Form::model($restaurante, ['route' => ['restaurant_update_path', $restaurante->id], 'files' => true, 'method' => 'PATCH', 'class' => 'form']) !!}
			@include ('restaurantes.form')
		{!! Form::close() !!}
		</div>
	</div>
@endsection

@section('js')
<script src='/assets/js/select2.js'></script>
<script src='/assets/js/jquery.multi-select.js'></script>
<script src='/assets/js/bootstrap-filestyle.js'></script>
<script src='/assets/js/bootstrap-datepicker.js'></script>
<script src='/assets/js/bootstrap-colorpicker.js'></script>
<script src='/assets/js/jquery.maskedinput.js'></script>
<script src='/assets/js/form-elements.js'></script>
<script type="text/javascript" src="/assets/js/tinymce/tinymce.min.js"></script>

	<script>
		function initMap() {
			var map = new google.maps.Map(document.getElementById('map'), {
			    center: {lat: 18.942141, lng: -70.903564},
			    zoom: 7
			});
			
			var input = (document.getElementById('direccion'));

		 	var autocomplete = new google.maps.places.Autocomplete(input);
			autocomplete.bindTo('bounds', map);

			var infowindow = new google.maps.InfoWindow();
			var marker = new google.maps.Marker({
			    map: map,
			    anchorPoint: new google.maps.Point(0, -29)
			});

		  	autocomplete.addListener('place_changed', function() {
			    infowindow.close();
			    marker.setVisible(false);
			    var place = autocomplete.getPlace();
			    if (!place.geometry) {
			      window.alert("Autocomplete's returned place contains no geometry");
			      return;
			    }

			    // If the place has a geometry, then present it on a map.
			    if (place.geometry.viewport) {
			      map.fitBounds(place.geometry.viewport);
			    } else {
			      map.setCenter(place.geometry.location);
			      map.setZoom(17);  // Why 17? Because it looks good.
			    }
			    marker.setIcon(/** @type {google.maps.Icon} */({
			      url: place.icon,
			      size: new google.maps.Size(71, 71),
			      origin: new google.maps.Point(0, 0),
			      anchor: new google.maps.Point(17, 34),
			      scaledSize: new google.maps.Size(35, 35)
			    }));
			    marker.setPosition(place.geometry.location);
			    marker.setVisible(true);

			    var address = '';
			    if (place.address_components) {
			      address = [
			        (place.address_components[0] && place.address_components[0].short_name || ''),
			        (place.address_components[1] && place.address_components[1].short_name || ''),
			        (place.address_components[2] && place.address_components[2].short_name || '')
			      ].join(' ');
			    }

			    infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
			    infowindow.open(map, marker);
			});
		}

    </script>
@endsection