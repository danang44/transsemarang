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
    <div id="map" style="height:800px;width=800px"> </div>
</body>

<script>
    var result = {!! json_encode($result) !!};
    let map = L.map('map', {zoomControl:false}).setView([-6.997226, 110.393395], 12);
    L.control.zoom({position:'bottomright'}).addTo(map);
    L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        zoomControl: true,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
        attribution: '&copy; Trans Semarang | <a href="https://www.google.com/intl/id/permissions/geoguidelines/">Google Maps</a>'
    }).addTo(map);

    var coridorIcon = L.icon({
        iconUrl: 'assets/icon/busstop.png',
        iconSize: [30, 35],
        iconAnchor: [16, 35],
    });

    for (let i = 0; i < result.length; i++) {
      var koridor = result[i].kor;
      switch(koridor){
        case '1':
          var iconNya = 'assets/icon/busstop.png';
          break;
        case '2':
          var iconNya = 'assets/icon/favicon.png';
          break;
        default:
          var iconNya = 'assets/icon/tsmg.png';
      }
      var coridorIcon = L.icon({
        iconUrl: iconNya,
        iconSize: [30, 35], 
        iconAnchor: [16, 35],
      });
        var data = result[i].coordinate.split("|")
        var lat = parseFloat(data[0])
        var lng = parseFloat(data[1])
        L.marker([lat, lng], {icon: coridorIcon}).addTo(map);
    }
</script>

</html>
