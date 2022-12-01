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

{{-- <script>
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

    // var encoded =
    //                 "pdpi@gcd`TKbA~@f@TEFHPJz@kBPQPEPYdBiDxCyFvAgDp@qBrB}IfAqEn@sDT{BNwDIuGOmDUwBOsAWkDe@aHiAuRIiCIuFGuBW_G@yBZ_BZu@`@o@pAmA`BkAn@g@l@q@|@aBv@eC`AmDj@uDPqBXsENkEt@gJFgADiEG{JRuJN}ETaDT{BNu@d@cAl@y@fFsF^]t@u@dAoAnDcDrG}EbH{FhEiDbAy@jAoAtAwB\\aA|ByIdBoIJiA@{@AeAqA}Wc@kCOk@Qe@}@iB]g@i@i@oI}Ei@e@[a@O_@Mi@Iu@CoAVaCr@uDb@oBjA_EhAeDxAaDZi@|@gAt@o@bAi@dBy@XSXURYXo@TiAXqBNqBDu@TuCFaCLmCXiDPmAhCuKNu@b@gD@m@AWq@mHOuDg@aHCaAOsAE_AI]UqCkBgLy@yHw@mGiAaJ{BmPi@aD_@qBSKMOISAU@ODOHKTOUoAiBwL{AyIMFGWFVLG_B{IoAoGkCkLm@kDeC_U_@wDGcBUsBCiA@_ADe@Xo@H[f@mD?SAQWe@E[@[^Ub@?n@ApAoDtDqKtDqKt@_CmAuCoKwD}QkGo@aI]kCo@iHCe@VO\\FpCzBpXzYjBxB`AVl@Cf@@j@Ch@Q~H}T~EkVx@aDpEmLRo@??xCeIBYCSqAe@SUEQAWzA}DTK`@EPDn@TVHVBNWNa@`@_A~@aCbCcG`@kAnEyKfAuCDAtCyHd@mD^oB^uArA{DtHkVLm@X_A`FyNp@wBfEiM~@aCdAgCtDcHnFuJlA_C|GwLpG{Kf@cAnAsDn@cCtCwOrBuK|Gy]p@{CtDcSfAoFvCyPlAyHT}@`Ka[~EoOrD{KhC}HbCaHpAcDzAeFv@uClBgI\\uAj@qC|AwGWIqE_A_@lAy@xCKHMBMC";

    //             var polyline = L.Polyline.fromEncoded(encoded, {
    //                 color: "#AF2330",
    //                 stroke: true,
    //                 opacity: 1,
    //                 stroke: true,
    //                 opacity: 1,
    //                 weight: 8,
    //             }).addTo(map);
    

    var coridorIcon = L.icon({
        iconUrl: 'assets/icon/busstop.png',
        iconSize: [30, 35],
        iconAnchor: [16, 35],
    });

    for (let i = 0; i < result.length; i++) {
      var koridor = result[i].koridor;
      switch(koridor){
        case '1':
          var iconNya = 'assets/icon/kor1.png';
          break;
        // case '2':
        //   var iconNya = 'assets/icon/kor2.png';
        //   break;
        //   case '3A':
        //     var iconNya = 'assets/icon/kor3a.png';
        //     break;
        //   case '3B':
        //     var iconNya = 'assets/icon/kor3b.png';
        //     break;
        //   case '4':
        //     var iconNya = 'assets/icon/kor4.png';
        //     break;
        //   case 'F2A':
        //     var iconNya = 'assets/icon/korf2a.png';
        //     break;
        //   case 'F2B':
        //     var iconNya = 'assets/icon/korf2b.png';
        //     break;
        //   case '5':
        //     var iconNya = 'assets/icon/kor5.png';
        //     break;
        //   case 'F4B':
        //     var iconNya = 'assets/icon/korf4b.png';
        //     break;
        //   case 'F4A':
        //     var iconNya = 'assets/icon/korf4a.png';
        //     break;
        //   case 'F3':
        //     var iconNya = 'assets/icon/korf3.png';
        //     break;
        //   case '6':
        //     var iconNya = 'assets/icon/kor6.png';
        //     break;
        //   case 'LM':
        //     var iconNya = 'assets/icon/korlm.png';
        //     break;
        //   case '7':
        //     var iconNya = 'assets/icon/kor7.png';
        //     break;
        //   case '8':
        //     var iconNya = 'assets/icon/kor8.png';
        //     break;
        //   case 'F1A':
        //     var iconNya = 'assets/icon/korf1a.png';
        //     break;
        //   case 'F1B':
        //     var iconNya = 'assets/icon/korf1b.png';
        //     break;
        default:
          var iconNya = '';
      }
      var coridorIcon = L.icon({
        iconUrl: iconNya,
        iconSize: [18, 23],
        iconAnchor: [16, 23],
      });
        var data = result[i].coordinate.split("|")
        var lat = parseFloat(data[0])
        var lng = parseFloat(data[1])
        var dataname = result[i].name;
        var name = (dataname)
        var datakor = result[i].koridor;
        var kor = (datakor)
        // var data = result[i].kor.map(parseFloat)
        // console.log(lat + " -> " + lng )
        // console.log(koridor + " - " + name)
        // console.info(isNaN(result[i].coordinate))
        // if(isNaN(result[i].coordinate) == true){

        // L.marker([lat, lng], { icon: coridorIcon }).addTo(map)

        // .bindPopup( 'koridor ' + kor +' '+ name);


        // Create some marker that will be resized on the map zooming
// var myMarker = new L.CircleMarker([10,10], { /* Options */ });

// map.on('zoomend', function() {
//   var currentZoom = map.getZoom();
//   myMarker.setRadius(currentZoom);
// });



      var shelter1 =  L.marker([lat, lng], {dragable:true, icon: coridorIcon}).addTo(map)
        .bindPopup( 'koridor ' + kor +' '+ name);

        map.on('zoomend' , function (e) {
    var geo = map.getCenter();
    console.log(map.getZoom());
    if (map.getZoom()>14)
    {
        shelter1.setLatLng(geo);
        shelter1.addTo(map);
    }else {
        shelter1.remove();
    }
});
// map.on('zoomend', function() {
//   var currentZoom = map.getZoom();
//   shelter1.setRadius(currentZoom);
// });

// map.on('zoomend', function() {
//         var currentZoom = map.getZoom();
//         var myRadius = currentZoom*(1/2); //or whatever ratio you prefer
//         var myWeight = currentZoom*(1/5); //or whatever ratio you prefer
//             shelter1.setStyle({radius: myRadius, weight: myWeight});
//     });
//         var coridorIcon = new L.FeatureGroup();
//         coridorIcon.addLayer(shelter1);
//         map.on('zoomend', function() {
//     if (map.getZoom() <15){
//             map.removeLayer(coridorIcon);
//     }
//     else {
//             map.addLayer(coridorIcon);
//         }
// });
        // .openPopup();
        // map.fitBounds(coordinate.getBounds());
        // console.log(parseFloat(result[i].coordinate));
        // } else {
        //   // alert(result[i].coordinate)
        // }

//         var shelter1 = L.marker([55.08, 11.62], {icon: shelterIcon});

// var shelterMarkers = new L.FeatureGroup();

// shelterMarkers.addLayer(shelter1);

// map.on('zoomend', function() {
//     if (map.getZoom() <7){
//             map.removeLayer(shelterMarkers);
//     }
//     else {
//             map.addLayer(shelterMarkers);
//         }
// });
    }
</script> --}}


<script>
  var result = {!! json_encode($result) !!};;
  console.log(result);

  let map = L.map('map', {
      // zoomControl: false
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



  var coridorIcon = L.icon({
      iconUrl: 'assets/icon/busstop.png',
      iconSize: [30, 35], // size of the icon
      iconAnchor: [16, 35], // point of the icon which will correspond to marker's location
  });

  for (let i = 0; i < result.length; i++) {
      var koridor = result[i].koridor;
      switch (koridor) {
        //   case '1':
        //       var iconNya = 'assets/icon/kor1.png';
        //       break;
        //   case '2':
        //       var iconNya = 'assets/icon/kor2.png';
        //       break;
          case '3A':
              var iconNya = 'assets/icon/kor3a.png';
              break;
    //       case '3B':
    //           var iconNya = 'assets/icon/kor3b.png';
    //           break;
    //       case '4':
    //           var iconNya = 'assets/icon/kor4.png';
    //           break;
    //       case 'F2A':
    //           var iconNya = 'assets/icon/korf2a.png';
    //           break;
    //       case 'F2B':
    //           var iconNya = 'assets/icon/korf2b.png';
    //           break;
    //       case '5':
    //           var iconNya = 'assets/icon/kor5.png';
    //           break;
    //       case 'F4B':
    //           var iconNya = 'assets/icon/korf4b.png';
    //           break;
    //       case 'F4A':
    //           var iconNya = 'assets/icon/korf4a.png';
    //           break;
    //       case 'F3':
    //           var iconNya = 'assets/icon/korf3.png';
    //           break;
    //       case '6':
    //           var iconNya = 'assets/icon/kor6.png';
    //           break;
    //       case 'LM':
    //           var iconNya = 'assets/icon/korlm.png';
    //           break;
    //       case '7':
    //           var iconNya = 'assets/icon/kor7.png';
    //           break;
    //       case '8':
    //           var iconNya = 'assets/icon/kor8.png';
    //           break;
    //       case 'F1A':
    //           var iconNya = 'assets/icon/korf1a.png';
    //           break;
    //       case 'F1B':
    //           var iconNya = 'assets/icon/korf1b.png';
    //           break;
          default:
              var iconNya = 'assets/icon/tp.png';
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

      console.log(lat + " -> " + lng)
      console.log(koridor + " - " + name)
      L.marker([lat, lng], {
              icon: coridorIcon
          }).addTo(map)
          .bindPopup('koridor ' + kor + ' ' + name);
  }
</script>


</html>
