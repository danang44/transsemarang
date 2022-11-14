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
       var result = {!! json_encode($result) !!};;
    console.log(result);

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
        iconSize: [30, 35], // size of the icon
        iconAnchor: [16, 35], // point of the icon which will correspond to marker's location
    });

    for (let i = 0; i < result.length; i++) {
      var koridor = result[i].koridor;
      switch(koridor){
        case '1':
          var iconNya = 'assets/icon/kor1.png';
          break;
        case '2':
          var iconNya = 'assets/icon/kor2.png';
          break;
          case '3A':
            var iconNya = 'assets/icon/kor3a.png';
            break;
          case '3B':
            var iconNya = 'assets/icon/kor3b.png';
            break;
          case '4':
            var iconNya = 'assets/icon/kor4.png';
            break;
          case 'F2A':
            var iconNya = 'assets/icon/korf2a.png';
            break;
          case 'F2B':
            var iconNya = 'assets/icon/korf2b.png';
            break;
          case '5':
            var iconNya = 'assets/icon/kor5.png';
            break;
          case 'F4B':
            var iconNya = 'assets/icon/korf4b.png';
            break;
          case 'F4A':
            var iconNya = 'assets/icon/korf4a.png';
            break;
          case 'F3':
            var iconNya = 'assets/icon/korf3.png';
            break;
          case '6':
            var iconNya = 'assets/icon/kor6.png';
            break;
          case 'LM':
            var iconNya = 'assets/icon/korlm.png';
            break;
          case '7':
            var iconNya = 'assets/icon/kor7.png';
            break;
          case '8':
            var iconNya = 'assets/icon/kor8.png';
            break;
          case 'F1A':
            var iconNya = 'assets/icon/korf1a.png';
            break;
          case 'F1B':
            var iconNya = 'assets/icon/korf1b.png';
            break;
        default:
          var iconNya = 'assets/icon/tsmg.png';
      }
      var coridorIcon = L.icon({
        iconUrl: iconNya,
        iconSize: [25, 35], 
        iconAnchor: [16, 35],
      });
        var data = result[i].coordinate.split("|")
        var lat = parseFloat(data[0])
        var lng = parseFloat(data[1])
        var dataname = result[i].name;
        var name = (dataname)
        var datakor = result[i].koridor;
        var kor = (datakor)

        console.log(lat + " -> " + lng )
        console.log(koridor + " - " + name)
L.marker([lat, lng], { icon: coridorIcon}).addTo(map)
        .bindPopup( 'koridor ' + kor +' '+ name);
    }
</script>

</html>
