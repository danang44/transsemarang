<!DOCTYPE html>
<html>

  <head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.css" />
    <script src="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="countries.geo.json"></script>
  </head>

  <body>
    <div id="map" style = "height:800px;width=800px">  </div>
    {{-- <script src="script.js"></script> --}}
  </body>

  <script>
     var result = {!! json_encode($result) !!};;
     console.log(result);

   
    //  var map = new L.Map("map");
    let map = L.map('map').setView([-7.017536, 	110.492962,12], 8);
    L.tileLayer(
                "http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
                {
                    attribution:
                        '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
                    maxZoom: 18,
                }).addTo(map);
  var coridorIcon = L.icon({
					iconUrl: 'assets/icon/busstop.png',
					// shadowUrl: 'leaf-shadow.png',
				
					iconSize:     [30, 35], // size of the icon
					shadowSize:   [50, 64], // size of the shadow
					iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
					shadowAnchor: [4, 62],  // the same for the shadow
					popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
				});
				
				  
				L.marker([result], {icon: coridorIcon}).addTo(map);
    //  L.marker([50.5, 30.5]).addTo(map);
 </script>
</html>