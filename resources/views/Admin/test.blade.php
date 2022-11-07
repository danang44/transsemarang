<!DOCTYPE html>
<html>
<head>
	<title>Leaflet L.Polyline.fromEncoded()</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">

	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}}
	{{-- <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7/leaflet.css" />
	<script src="http://cdn.leafletjs.com/leaflet-0.7/leaflet.js"></script> --}}
</head>
<body>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css"
     integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14="
     crossorigin=""/>
	 <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"
     integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg="
     crossorigin=""></script>
	 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	 <script src="../../../../js/Polyline.encoded.js"></script>
	 <script src="http://cdn.leafletjs.com/leaflet-0.7/leaflet.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	 <script src="../../../../js/Polyline.encoded.js"></script>
	 <script type="text/javascript" src="../../../../js/polyline.js"></script>
	 
	 {{-- <div id="map" style="width: 800px; height: 600px"></div> --}}

	 {{-- @foreach($result as $data) --}}
	 {{-- <li><a class="dropdown-item {{$data['sh_lat']}} hidden">Koridor {{$datas['kor']}} {{$datas['sh_lng']}} - {{$datas['toward']}}</a></li> --}}
{{-- {{dd($data['sh_lat'])}}; --}}
   {{-- @endforeach --}}
	
	 <script>

// $.ajax({
// 	url: 'https://gps.brtnusantara.com/dev/trans_semarang/api_v1/getAllRoutes',
//   dataType: 'jsonp',
//   jsonpCallback: 'json_data',
//   success: function (obj) {
//     alert(obj.website);
//   },
//   error: function(xhr, status, msg) {
//     console.log('Status: ' + status + "\n" + msg);
//   }
// })

// $.ajax({
//   url: 'https://gps.brtnusantara.com/dev/trans_semarang/api_v1/getAllRoutes',
//   dataType: 'jsonp',
//   success: function(obj) {
//     // Berupa objek javascript
//     alert(obj.website);
//   },
//   error: function(xhr, status, msg) {
//     console.log('Status: ' + status + "\n" + msg);
//   }
// })
// for(var k in result) {
//    console.log(k, result[k]);
// }

// for (var k in result) {
//   something(result[k])
// }
$(function(){
        $.ajax({
            url: "/test",

            type: 'GET',

            success: function(result) {
                $.each(result, function( key, value ) {

                    L.marker([value.sh_lat, value.sh_lng]).addTo(map)
                        .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
                        .openPopup();
						console.log(result);
                })
            },
            error: function(data) {

            }
        });
    })

// $.ajax({
// 	// var token = "czNtNHI0bmc6czNtNHI0bmdOZGVz",
// 	// var cookie = "ci_session=a%3A5%3A%7Bs%3A10%3A%22session_id%22%3Bs%3A32%3A%22d272ff1926c229266992aeb34d34aa75%22%3Bs%3A10%3A%22ip_address%22%3Bs%3A13%3A%22103.17.244.13%22%3Bs%3A10%3A%22user_agent%22%3Bs%3A21%3A%22PostmanRuntime%2F7.29.2%22%3Bs%3A13%3A%22last_activity%22%3Bi%3A1666948544%3Bs%3A9%3A%22user_data%22%3Bs%3A0%3A%22%22%3B%7Ddda011cfd7756535990f45662d686113; csrf_cookie_name=6c0e4dcdd5af57b37caa1fa3e754b262",
//     type:"GET",
// 	dataType: 'json',
//     url:"AdminController/test",
	
//     data: {},
//     success:function(result){
//         console.log(result);
//     }
// })

      	var map = new L.Map('map').setView([-6.996667, 110.416664], 13);
		var tiles = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
            maxZoom: 19,
            zoomControl: true,
            subdomains:['mt0','mt1','mt2','mt3'],
            attribution: '&copy; Trans Semarang | <a href="https://www.google.com/intl/id/permissions/geoguidelines/">Google Maps</a>'
            }).addTo(map);

				var coridorIcon = L.icon({
					iconUrl: 'assets/icon/busstop.png',
					// shadowUrl: 'leaf-shadow.png',
				
					iconSize:     [40, 45], // size of the icon
					shadowSize:   [50, 64], // size of the shadow
					iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
					shadowAnchor: [4, 62],  // the same for the shadow
					popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
				});

                
				L.marker([-7.012321, 110.418670,12], {icon: coridorIcon}).addTo(map);
				L.marker([-6.991553, 110.353506,12], {icon: coridorIcon}).addTo(map);

		map.fitBounds(polyline.getBounds());


		$( document ).ready(function() {
    // console.log( "ready!" );
});


		// $(document).ready(function() {
		// 	$(document).on('change', '.type', function(event) {
		// 		// location.reload();
		// 		var type = $(this).val();

		// 		$.ajax({
		// 			type: "GET",
		// 			url: "/test2/" + type,
		// 			success: function(response) {
		// 				console.log(response.data.id)
		// 				var map = new L.Map('maps');

		// 				L.tileLayer(
		// 					'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		// 						attribution: '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
		// 						maxZoom: 18
		// 					}
		// 				).addTo(map);

		// 				var encoded = response.data.points_a;
		// 				// alert(encoded);
		// 				var polyline = L.Polyline.fromEncoded(encoded, {
		// 					color: 'yellow',
		// 					weight: 8
		// 				}).addTo(map);
		// 				map.fitBounds(polyline.getBounds());

		// 			}
		// 		});
		// 	})
		// });

		function load_ajax(){
 	const ajax = new XMLHttpRequest();
 	ajax.open('GET', 'koridor.json', true);
 	ajax.onreadystatechange = function(){
 		if(this.readyState ===4 && this.status ===200){
 			let data = JSON.parse(this.responseText)
 			for (var i=0; i<data.length; i++) {
			   document.getElementById('result').innerHTML += '<li>'+ data[i].name +'</li>';
			}
 		}
 	}
 	ajax.send();
 }
 load_ajax();
	</script>
		
	
</body>
</html>



