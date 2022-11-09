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
    {{-- <script src="script.js"></script> --}}
</body>

<script>
    var result = {!! json_encode($result) !!};;
    console.log(result);


    //  var map = new L.Map("map");
    // var map = new L.Map('map').setView([-6.996667, 110.416664], 13);
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
        // shadowUrl: 'leaf-shadow.png',

        iconSize: [30, 35], // size of the icon
        // shadowSize:   [50, 64], // size of the shadow
        iconAnchor: [16, 35], // point of the icon which will correspond to marker's location
        // shadowAnchor: [4, 62],  // the same for the shadow
        // popupAnchor: [0, -50] // point from which the popup should open relative to the iconAnchor
    });

    //         const customMarker = new L.icon({
    //     iconUrl: '/images/icons/location-pointer.svg',
    //     iconSize: [35, 46],
    //     iconAnchor: [17, 46]
    // });

    for (let i = 0; i < result.length; i++) {
        var data = result[i].coordinate.split("|")
        var lat = parseFloat(data[0])
        var lng = parseFloat(data[1])
        // data = result[i].coordinate.map(parseFloat)
        console.log(lat + " -> " + lng)
        // console.info(isNaN(result[i].coordinate))
        // if(isNaN(result[i].coordinate) == true){
        L.marker([lat, lng], {
            icon: coridorIcon
        }).addTo(map);
        // map.fitBounds(coordinate.getBounds());
        // console.log(parseFloat(result[i].coordinate));
        // } else {
        //   // alert(result[i].coordinate)
        // }

    }
    // L.marker([result[0]], {icon: coridorIcon}).addTo(map);
    //  L.marker([50.5, 30.5]).addTo(map);
    //  L.marker([-6.987165,110.408270]).addTo(map);

    //     $.getJSON("https://gps.brtnusantara.com/dev/trans_semarang/api_v1/getAllRoutes", function(data) {

    // // Array of markers
    // var markers = [];

    // // For each row in Socrata, create a marker
    // for (var i = 0; i < data.length; i++) {

    //   var item = data[i];

    //   // Extract coordinates, convert strings to floats
    //   var coordinates = [
    //     parseFloat(item.sh_lat),
    //     parseFloat(item.sh_lng)
    //   ]

    //   // Create a marker with a custom icon
    //   var marker = L.marker(coordinates, {
    //       icon: L.icon({
    //         iconUrl: 'images/americorps.png',
    //         iconSize: [24, 24],
    //         iconAnchor: [12, 12],
    //         opacity: 0.5
    //       })
    //   }).bindTooltip(item.sponsor + '<br>' + item.project_description);

    //   // Add marker to the array of markers
    //   markers.push(marker);
    // }

    // // Create a Leaflet layer group from array of markers
    // var layer = L.layerGroup(markers);
    // layer.addTo(map); // add layer to the map

    // // Add layer to the legend, together with the little icon
    // legend.addOverlay(layer, 'AmeriCorps NCCC <img src="images/americorps.png" height="11" alt="AmeriCorps NCCC">')

    // })
</script>

</html>
