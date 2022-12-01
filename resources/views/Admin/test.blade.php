<!DOCTYPE html>
<html>
<head>
	<title>Leaflet L.Polyline.fromEncoded()</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css"
	integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14="
	crossorigin=""/>

	<script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"
	integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg="
	crossorigin=""></script>
</head>



<body>

	<select id="my-select">
        @foreach ($result as $key => $datas)
            <option>Koridor {{ $datas['sh_id'] }} {{ $datas['origin'] }} -
                {{ $datas['toward'] }}</option>
        @endforeach
    </select>

    <div id="map" style="height:800px;width=800px"> </div>
</body>

<script>
	var map = L.map('map').setView([-6.997226, 110.393395], 12);
	L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

var marker = L.marker([-6.997226, 110.393395]).addTo(map);

var locationIcon = L.icon({
  iconUrl:'location_marker_icon.png',
  iconSize: [98, 114],
  iconAnchor: [49, 114]
});

</script>
</html>