@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                        <div id="map"></div>

                    <div class="panel-body">
                        Map and Markers
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

    <script>
      function initMap() {
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 18.942141, lng: -70.903564},
          scrollwheel: true,
          zoom: 7
        });
      }

    </script>
@endsection