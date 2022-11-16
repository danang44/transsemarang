<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.css" />
    <script src="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="countries.geo.json"></script>
    <script src="../../../../js/Polyline.encoded.js"></script>
</head>

<body>
    <div id="map" style="height:800px;width=800px"> </div>
</body>




<script>
  var result = {!! json_encode($result) !!};;
  console.log(result);

  let map = L.map('map', {
   
  }).setView([-6.997226, 110.393395], 12);
  L.control.zoom({
      position: 'bottomright'
  }).addTo(map);
  L.tileLayer(
      "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}", {
          maxZoom: 20,
          zoomControl: true,
          subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
          attribution: '&copy; Trans Semarang | <a href="https://www.google.com/intl/id/permissions/geoguidelines/">Google Maps</a>'
      }).addTo(map);



  for (let i = 0; i < result.length; i++) {
      var koridor = result[i].rute;
   
      var data = result[i].rute.split("|||")
    //   console.log(data[0]);

      var points_a = JSON.stringify(data[0])
    //   console.log(points_a);
      var points_b = JSON.stringify(data[1])
      
    //   var dataname = result[i].urut;
    //   var name = (dataname)
    //   var datakor = result[i].kor;
    //   var kor = (datakor)
    // console.log(points_a + " -> " + points_b)
    var encoded =points_a;
    console.log(encoded);

              var polyline = L.Polyline.fromEncoded(encoded, {
                  color: "#AF2330",
                  stroke: true,
                  opacity: 1,
                  stroke: true,
                  opacity: 1,
                  weight: 8,
              }).addTo(map);
    }
    //   console.log(points_a + " -> " + points_b)


      // console.log(koridor + " - " + name)
    //   L.marker([lat, lng], {
    //           icon: coridorIcon
    //       }).addTo(map)
    //       .bindPopup('koridor ' + kor + ' ' + name);
        
</script>


</html>
