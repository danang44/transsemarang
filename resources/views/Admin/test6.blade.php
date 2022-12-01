<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.css" />
    <link rel="stylesheet" href="../../../../js/MarkerCluster.css" />
    <link rel="stylesheet" href="../../../../js/MarkerCluster.Default.css" />
    <script src="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="../../../../js/Polyline.encoded.js"></script>
    <script src="../../../../js/leaflet.markercluster.js"></script>
</head>

<body>


    <select id="my-select">
        @foreach ($result as $key => $data)
            <option value={{ $data['kor'] }} >Koridor {{ $data['kor'] }} {{ $data['origin'] }} -
                {{ $data['toward'] }}</option>
        @endforeach
    </select>
    <select id="my-select">
        @foreach ($result as $data)
            <option >{{ $data['points'] }} 
               </option>
        @endforeach
    </select>

    <div id="map" style="height:800px;width=800px" class="container"> </div>

</body>

<script>
    var polyline = "";
    var shelter = [];
    // var kordinat = "";
    var map = new L.map('map', {
        gestureHandling: true
    }).setView([-6.997226, 110.393395], 12);
    L.control.zoom({
        position: 'bottomright'
    }).addTo(map);

    L.tileLayer("http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}", {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
        attribution: '&copy; Trans Semarang | <a href="https://www.google.com/intl/id/permissions/geoguidelines/">Google Maps</a>'
    }).addTo(map);
    // if (this.map.hasLayer(this.newMarker)) this.map.removeLayer(this.newMarker);

    // var jalan = L.layerGroup()

    document.getElementById('my-select').addEventListener('change', function() {
        var point = this.value;
        console.log('You selected: ', point);
        // var active_polyline = L.featureGroup().addTo(map);
        // var mangkang;
        // var penggaron;
        var iconNya;
        var coridorIcon;
        var kordinat;
        
        var result = {!! json_encode($result) !!};;
        // var result = {!! json_encode($result) !!};;

        for (let i = 0; i < result.length; i++) {
            var kor = result[i].kor;

            // console.log(kor);
            var selected = point;
            // if (active_polyline != null) return active_polyline.clearLayers();
            if (kor == selected) {
                var data = result[i].rute.split("|||")
                var points_a = JSON.stringify(data[0])
                // var points_b = JSON.stringify(data[1])
                var encoded = data[0];

                // console.log(active_polyline);
                if(polyline!="") { map.removeLayer(polyline); }
                shelter.forEach(function(marker){ map.removeLayer(marker); }) 
                shelter = [];

                polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                    // }).addTo(active_polyline);
                }).addTo(map);
                // }).addTo(jalan);

                if (kor == selected) {
                    iconNya = 'assets/icon/' + selected + '.png';
                } else {
                    iconNya = 'assets/icon/tp.png';
                }

                for (let j = 0; j < result.length; j++) {
                    var koridor = result[j].koridor;
                    switch (koridor) {

                        case (selected):
                            iconNya = 'assets/icon/' + selected + '.png';
                            break;
                        default:
                            iconNya = 'assets/icon/tp.png';
                    }
                    coridorIcon = L.icon({
                        iconUrl: iconNya,
                        iconSize: [25, 35],
                        iconAnchor: [16, 35],
                    });
                    var data = result[j].coordinate.split("|")
                    var lat = parseFloat(data[0])
                    var lng = parseFloat(data[1])
                    var dataname = result[j].name;
                    var name = (dataname)
                    var datakor = result[j].koridor;
                    var kor = (datakor)
                    // console.log(data);

                    var marker = L.marker([lat, lng], {
                        icon: coridorIcon
                    }).addTo(map).bindPopup('koridor ' + kor + ' ' + name);
                    shelter.push(marker);

                }
                map.fitBounds(polyline.getBounds());
            }
        }
    });
</script>

{{-- 
            function mangkang(v){
                if(v.checked){
                    map.addLayer(mangkang);
                    console.log(mangkang);
                }else{
                    map.removeLayer(mangkang);
                }
            } --}}


</html>
