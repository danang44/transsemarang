@extends('master.admin_layout')

@section('content')

<head>
	<title>Leaflet L.Polyline.fromEncoded()</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7/leaflet.css" />
	<script src="http://cdn.leafletjs.com/leaflet-0.7/leaflet.js"></script>
</head>

<body>

	<div class="col-md-12">
		<div class="col-md-4">
			<label>Tipe</label>
			<select class="form-control type" name="type" id="type" onchange>
				@foreach($result as $datas)
				<option value=" {{$datas['id']}}">Kor {{$datas['kor']}} {{$datas['origin']}} - {{$datas['toward']}}</option>
				@endforeach
			</select>
		</div>
	</div>
	<div id="maps" class="form-control" style="width: 800px; height: 600px">
	</div>


	<script src="../../../../js/Polyline.encoded.js"></script>
	{{-- <script src="./resources/js/Polyline.encoded.js"></script> --}}
	<script>
		$(document).ready(function() {
			$(document).on('change', '.type', function(event) {
				// location.reload();
				var type = $(this).val();

				$.ajax({
					type: "GET",
					url: "/test3/" + type,
					success: function(response) {
						console.log(response.data.id)
						var map = new L.Map('maps');

						L.tileLayer(
							'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
								attribution: '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
								maxZoom: 18
							}
						).addTo(map);

						var encoded = response.data.points_a;
						// alert(encoded);
						var polyline = L.Polyline.fromEncoded(encoded, {
							color: 'yellow',
							weight: 8
						}).addTo(map);
						map.fitBounds(polyline.getBounds());

					}
				});
			})
		});
	</script>
</body>
@endsection