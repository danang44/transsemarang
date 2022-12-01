<!DOCTYPE html>
<html>
<head>
    <style>
            #map {
      height: 800px;
      width: 800px;
    }
	.map-scroll:before {
content: 'Use ctrl + scroll to zoom the map';
position: absolute;
top: 50%;
left: 50%;
z-index: 999;
font-size: 34px;
 }
 .map-scroll:after {
position: absolute;
left: 0;
right: 0;
bottom: 0;
top: 0;
content: '';
background: #00000061;
z-index: 999;
}
    </style>
    <script src="/scripts/snippet-javascript-console.min.js?v=1"></script>
</head>
<body>
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
        integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
        crossorigin=""/>
  <link rel="stylesheet" href="//unpkg.com/leaflet-gesture-handling/dist/leaflet-gesture-handling.min.css"
        type="text/css">
  <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
          integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
          crossorigin=""></script>
  <script src="//unpkg.com/leaflet-gesture-handling"></script>
  
  
  
  <div id="map"></div>
    <script type="text/javascript">
        // Attach it as a handler to the map

const map = L.map('map', {
 
}).setView([51.505, -0.09], 13);

// Add tile layer
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

    </script>
</body>
</html>