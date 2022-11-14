@extends('master.admin_layout')

@section('content')

<head>
	<title>Leaflet L.Polyline.fromEncoded()</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7/leaflet.css" />
	<script src="http://cdn.leafletjs.com/leaflet-0.7/leaflet.js"></script>
</head>

<body> 

<div class="col-md-12">
	<div class="col-md-4">
		<label>RUTE BRT</label>
		<select class="form-control type" name="type" id="type" onchange>
			<option value="1">-- PILIH RUTE BRT --</option>
			<option value="2">Koridor 1  MANGKANG - PENGGARON</option>
			<option value="3">Koridor 1  PENGGARON - MANGKANG</option>
			<option value="4">Koridor 2  TERBOYO - UNGARAN</option>
			<option value="5">Koridor 2  UNGARAN - TERBOYO</option>
			<option value="6">Koridor 3A PELABUHAN - ELISABETH via DR CIPTO</option>
			<option value="7">Koridor 3A ELISABETH via DR CIPTO - PELABUHAN</option>
			<option value="8">Koridor 3B PELABUHAN - ELISABETH</option>
			<option value="9">Koridor 4 TAWANG - CANGKIRAN</option>
			<option value="10">Koridor 4 CANGKIRAN - TAWANG</option>
			<option value="11">Koridor F2A TERBOYO - ADA MAJAPAHIT</option>
			<option value="12">Koridor F2A ADA MAJAPAHIT - TERBOYO</option>
			<option value="13">Koridor F2B TERBOYO - ADA MAJAPAHIT B</option>
			<option value="14">Koridor F2B ADA MAJAPAHIT B - TERBOYO</option>
			<option value="15">Koridor 5 PRPP - METESEH</option>
			<option value="16">Koridor 5 METESEH - PRPP</option>
			<option value="17">Koridor F4B GUNUNG PATI - BSB</option>
			<option value="18">Koridor F4B BSB - GUNUNG PATI</option>
			<option value="19">Koridor F4A GUNUNG PATI - UNNES</option>
			<option value="20">Koridor F4A UNNES - GUNUNG PATI</option>
			<option value="21">Koridor F3 PENGGARON - TERMINAL BANYUMANIK</option>
			<option value="22">Koridor F3 TERMINAL BANYUMANIK - PENGGARON</option>
			<option value="23">Koridor 6 UNDIP - UNNES</option>
			<option value="24">Koridor 6 UNNES - UNDIP</option>
			<option value="25">Koridor LM MANGKANG - SIMPANG LIMA (MALAM) </option>
			<option value="26">Koridor LM SIMPANG LIMA - MANGKANG (MALAM)</option>
			<option value="27">Koridor 7 GENUK - BALAIKOTA</option>
			<option value="28">Koridor 7 BALAIKOTA - GENUK</option>
			<option value="29">Koridor 8 SIMPANG LIMA - GUNUNG PATI - CANGKIRAN</option>
			<option value="30">Koridor 8 GUNUNG PATI - CANGKIRAN - SIMPANG LIMA</option>
			<option value="31">Koridor F1A NGALIYAN - KP GONDORIYO</option>
			<option value="32">Koridor F1A KP GONDORIYO - NGALIYAN</option>
			<option value="33">Koridor F1B NGALIYAN - MADUKORO RAYA</option>
			<option value="34">Koridor F1B MADUKORO RAYA - NGALIYAN</option>
			{{-- <option value="2">Pembelian Total Harga</option>
			<option value="3">Login</option> --}}
		</select>
	</div>
</div>

<div id="default" class="form-control" style="width: 800px; height: 600px"></div>
<div id="map" class="form-control" style="width: 800px; height: 600px"></div>
<div id="maps" class="form-control" style="width: 800px; height: 600px"></div>
<div id="mapss" class="form-control" style="width: 800px; height: 600px"></div>
<div id="kor2" class="form-control" style="width: 800px; height: 600px"></div>
<div id="kor22" class="form-control" style="width: 800px; height: 600px"></div>
<div id="kor3a" class="form-control" style="width: 800px; height: 600px"></div>
<div id="kor3aa" class="form-control" style="width: 800px; height: 600px"></div>
<div id="kor3b" class="form-control" style="width: 800px; height: 600px"></div>
<div id="kor4" class="form-control" style="width: 800px; height: 600px"></div>
<div id="kor44" class="form-control" style="width: 800px; height: 600px"></div>
<div id="korf2a" class="form-control" style="width: 800px; height: 600px"></div>
<div id="korf2aa" class="form-control" style="width: 800px; height: 600px"></div>
<div id="korf2b" class="form-control" style="width: 800px; height: 600px"></div>
<div id="korf2bb" class="form-control" style="width: 800px; height: 600px"></div>
<div id="kor5" class="form-control" style="width: 800px; height: 600px"></div>
<div id="kor55" class="form-control" style="width: 800px; height: 600px"></div>
<div id="korf4b" class="form-control" style="width: 800px; height: 600px"></div>
<div id="korf4bb" class="form-control" style="width: 800px; height: 600px"></div>
<div id="korf4a" class="form-control" style="width: 800px; height: 600px"></div>
<div id="korf4aa" class="form-control" style="width: 800px; height: 600px"></div>
<div id="korf3" class="form-control" style="width: 800px; height: 600px"></div>
<div id="korf33" class="form-control" style="width: 800px; height: 600px"></div>
<div id="kor6" class="form-control" style="width: 800px; height: 600px"></div>
<div id="kor66" class="form-control" style="width: 800px; height: 600px"></div>
<div id="korlm" class="form-control" style="width: 800px; height: 600px"></div>
<div id="korlmm" class="form-control" style="width: 800px; height: 600px"></div>
<div id="kor7" class="form-control" style="width: 800px; height: 600px"></div>
<div id="kor77" class="form-control" style="width: 800px; height: 600px"></div>
<div id="kor8" class="form-control" style="width: 800px; height: 600px"></div>
<div id="kor88" class="form-control" style="width: 800px; height: 600px"></div>
<div id="korf1a" class="form-control" style="width: 800px; height: 600px"></div>
<div id="korf1aa" class="form-control" style="width: 800px; height: 600px"></div>
<div id="korf1b" class="form-control" style="width: 800px; height: 600px"></div>
<div id="korf1bb" class="form-control" style="width: 800px; height: 600px"></div>

</body>

<script src="../../../../js/Polyline.encoded.js"></script>
<script>
	$(document).ready(function() {
		$(document).on('change', '.type', function(event) {
			var type = $(this).val();
			// alert(type);
			if (type === "1") {
                $("#default").show();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();

			    var result = {!! json_encode($result) !!};;
    console.log(result);

    let map = L.map('default', {zoomControl:false}).setView([-6.997226, 110.393395], 12);
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
            } else if (type === "2") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").show();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("maps");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                // var encoded = 'pdpi@gcd`TKbA~@f@TEFHPJz@kBPQPEPYdBiDxCyFvAgDp@qBrB}IfAqEn@sDT{BNwDIuGOmDUwBOsAWkDe@aHiAuRIiCIuFGuBW_G@yBZ_BZu@`@o@pAmA`BkAn@g@l@q@|@aBv@eC`AmDj@uDPqBXsENkEt@gJFgADiEG{JRuJN}ETaDT{BNu@d@cAl@y@fFsF^]t@u@dAoAnDcDrG}EbH{FhEiDbAy@jAoAtAwB\\aA|ByIdBoIJiA@{@AeAqA}Wc@kCOk@Qe@}@iB]g@i@i@oI}Ei@e@[a@O_@Mi@Iu@CoAVaCr@uDb@oBjA_EhAeDxAaDZi@|@gAt@o@bAi@dBy@XSXURYXo@TiAXqBNqBDu@TuCFaCLmCXiDPmAhCuKNu@b@gD@m@AWq@mHOuDg@aHCaAOsAE_AI]UqCkBgLy@yHw@mGiAaJ{BmPi@aD_@qBSKMOISAU@ODOHKTOUoAiBwL{AyIMFGWFVLG_B{IoAoGkCkLm@kDeC_U_@wDGcBUsBCiA@ADe@Xo@H[f@mD?SAQWe@E[@[^Ub@?n@ApAoDtDqKtDqKt@_CmAuCoKwD}QkGo@aI]kCo@iHCe@VO\\FpCzBpXzYjBxB`AVl@Cf@@j@Ch@Q~H}T~EkVx@aDpEmLRo@??xCeIBYCSqAe@SUEQAWzA}DTK`@EPDn@TVHVBNWNa@`@_A~@aCbCcG`@kAnEyKfAuCDAtCyHd@mD^oB^uArA{DtHkVLm@X_A`FyNp@wBfEiM~@aCdAgCtDcHnFuJlA_C|GwLpG{Kf@cAnAsDn@cCtCwOrBuK|Gy]p@{CtDcSfAoFvCyPlAyHT}@`Ka[~EoOrD{KhC}HbCaHpAcDzAeFv@uClBgI\\uAj@qC|AwGWIqE_A@lAy@xCKHMBMC';
                var encoded =
                    "pdpi@gcd`TKbA~@f@TEFHPJz@kBPQPEPYdBiDxCyFvAgDp@qBrB}IfAqEn@sDT{BNwDIuGOmDUwBOsAWkDe@aHiAuRIiCIuFGuBW_G@yBZ_BZu@`@o@pAmA`BkAn@g@l@q@|@aBv@eC`AmDj@uDPqBXsENkEt@gJFgADiEG{JRuJN}ETaDT{BNu@d@cAl@y@fFsF^]t@u@dAoAnDcDrG}EbH{FhEiDbAy@jAoAtAwB\\aA|ByIdBoIJiA@{@AeAqA}Wc@kCOk@Qe@}@iB]g@i@i@oI}Ei@e@[a@O_@Mi@Iu@CoAVaCr@uDb@oBjA_EhAeDxAaDZi@|@gAt@o@bAi@dBy@XSXURYXo@TiAXqBNqBDu@TuCFaCLmCXiDPmAhCuKNu@b@gD@m@AWq@mHOuDg@aHCaAOsAE_AI]UqCkBgLy@yHw@mGiAaJ{BmPi@aD_@qBSKMOISAU@ODOHKTOUoAiBwL{AyIMFGWFVLG_B{IoAoGkCkLm@kDeC_U_@wDGcBUsBCiA@_ADe@Xo@H[f@mD?SAQWe@E[@[^Ub@?n@ApAoDtDqKtDqKt@_CmAuCoKwD}QkGo@aI]kCo@iHCe@VO\\FpCzBpXzYjBxB`AVl@Cf@@j@Ch@Q~H}T~EkVx@aDpEmLRo@??xCeIBYCSqAe@SUEQAWzA}DTK`@EPDn@TVHVBNWNa@`@_A~@aCbCcG`@kAnEyKfAuCDAtCyHd@mD^oB^uArA{DtHkVLm@X_A`FyNp@wBfEiM~@aCdAgCtDcHnFuJlA_C|GwLpG{Kf@cAnAsDn@cCtCwOrBuK|Gy]p@{CtDcSfAoFvCyPlAyHT}@`Ka[~EoOrD{KhC}HbCaHpAcDzAeFv@uClBgI\\uAj@qC|AwGWIqE_A_@lAy@xCKHMBMC";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

				L.marker([-7.012321, 110.418670,12],[-7.002550, 110.402296,12]).addTo(map);
				
				

                map.fitBounds(polyline.getBounds());
            } else if (type === "3") {
                $("#default").hide();
                $("#map").show();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("map");

                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);

                var encoded =
                    "jqyi@etkaT}A]b@{BTyA\\GXWFW|@ZlIhBwCjMaC~Jy@~CiBtFwAtDuB~Fo@vBuGvRmCtIiG~Q_EfMSt@UtAi@bEeAlF_@|BeAtFgCzM_Mho@uBvKU`BcChMe@`B{@tCSf@m@nAgDtFoIrOaA|AeApBkFjJeCxE{@fBiAhCo@fBcM`_@s@nBYh@uHjVsAzD_@tA_@nBe@lDuCxHAFcArCi@lAcDlI_EpKyAfE~DhBHVAh@{AtDQHSAwDqAoCeASUEQAWzA}DTK`@EPDvBv@~DhBHVAh@{AtDQHSAyDiAg@Ta@z@u@nBuBxFmA`DsAzDg@`B]|Ai@rCw@hDc@vBa@zBsBjHe@tAc@pAq@|Aa@tAsAhDU|@I|@[bAs@rAcAFo@Sg@a@a@i@wAe@mNsE_KoDY_BOsBy@{He@}FDc@ZGbBnAlKjKpDbE|JvKz@x@t@Eh@DfAVP`@@h@WnAq@hAqFbO}DbLsCbHe@tBY|Bl@z@Pb@Cb@{@rBc@hBFpAr@lGnAtLp@jGrA~FpC~LjBpKfFh\\zB~P^dBPfBnBvOlBlPn@rDx@tFZtCz@~KZlFL~@FtA`@tE?`Aa@dEe@|B}A`Gm@dDSrBa@lJeA`JSfAQh@]j@[Vi@\\yCvAi@d@mA|AWb@eAbC[n@m@dBeApDiBhIKtAN@OAGzAFdAJn@Vl@d@j@dAt@~CfBv@ZrA`A^^\\l@jAfCb@rBPxADp@jA~V@j@G|AKv@m@xCgB|H}@pDm@|AS`@eA|AeAdAyDbDaDlC{KnI_BvAqD|CsCbDuCvCi@`@oAbBc@hAs@dII|BQzHElHHvEIrEu@pL]pG_@pF}@bFm@lCiA~C[t@q@|@u@r@gBhAoAhAe@v@Wn@]tAGx@?l@LjCJlDN`KXpEDdBh@tJb@|Gh@lGV~BPbDFfGMxDW`Dg@tCkAjFyBxIc@vAkAvCeAtBsFlKaBrDgDlL[`BQATeCVuBMAHk@Le@`DkGQKGIAEJU";
                // var encoded = 'jqyi@etkaT}A]b@{BTyA\\GXWFW|@ZlIhBwCjMaC~Jy@CiBtFwAtDuB~Fo@vBuGvRmCtIiG~Q_EfMSt@UtAi@bEeAlF_@|BeAtFgCzM_Mho@uBvKU`BcChMe@`B{@tCSf@m@nAgDtFoIrOaA|AeApBkFjJeCxE{@fBiAhCo@fBcM`@s@nBYh@uHjVsAzD@tA_@nBe@lDuCxHAFcArCi@lAcDlI_EpKyAfE~DhBHVAh@{AtDQHSAwDqAoCeASUEQAWzA}DTK`@EPDvBv@~DhBHVAh@{AtDQHSAyDiAg@Ta@z@u@nBuBxFmA`DsAzDg@`B]|Ai@rCw@hDc@vBa@zBsBjHe@tAc@pAq@|Aa@tAsAhDU|@I|@[bAs@rAcAFo@Sg@a@a@i@wAe@mNsE_KoDY_BOsBy@{He@}FDc@ZGbBnAlKjKpDbE|JvKz@x@t@Eh@DfAVP`@@h@WnAq@hAqFbO}DbLsCbHe@tBY|Bl@z@Pb@Cb@{@rBc@hBFpAr@lGnAtLp@jGrA~FpC~LjBpKfFh\\zB~P^dBPfBnBvOlBlPn@rDx@tFZtCz@~KZlFL@FtA`@tE?`Aa@dEe@|B}A`Gm@dDSrBa@lJeA`JSfAQh@]j@[Vi@\\yCvAi@d@mA|AWb@eAbC[n@m@dBeApDiBhIKtAN@OAGzAFdAJn@Vl@d@j@dAt@~CfBv@ZrA`A^^\\l@jAfCb@rBPxADp@jA~V@j@G|AKv@m@xCgB|H}@pDm@|AS`@eA|AeAdAyDbDaDlC{KnI_BvAqD|CsCbDuCvCi@`@oAbBc@hAs@dII|BQzHElHHvEIrEu@pL]pG_@pF}@bFm@lCiA~C[t@q@|@u@r@gBhAoAhAe@v@Wn@]tAGx@?l@LjCJlDN`KXpEDdBh@tJb@|Gh@lGV~BPbDFfGMxDW`Dg@tCkAjFyBxIc@vAkAvCeAtBsFlKaBrDgDlL[`BQATeCVuBMAHk@Le@`DkGQKGIAEJU';

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "4") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").show();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("kor2");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "d}li@_weaTd@mA|BFdGThCHjAF^?PPpA|XnBxf@LhGR|Cp@|DnDjOpBbIdBvFbApDbD~NZx@PT\\PXBtAB`@Hp@l@pP~[|AxCjAvBd@z@Rf@HJLDbC}@xB}@nC{@`AWr@GxGIvC@bDKzEm@tL}AnHaA`Hk@xTj@~Ld@lIb@^bIL~GwILcMLwl@|@sUZcADi@JQVzElVfAbGApDQzGMbBUr@lDpD`OtNpOhOf@R`@@ZK^@d@fARrAn@p@z@dAdAlApCpCzCfDtD|DfF`GjEhEt@Dr@Ax@Rp@d@zFfCtEtBpAj@pCt@rBz@fG|CdCjA|@b@\\Lb@?vDe@~Ec@fD[n@_@l@o@j@o@d@w@z@eAh@Mr@?p@NdAlAVf@lAvBLdAIp@QzA?RF\\R\\RPPFb@HN?ZGLEbAaA`Am@fBq@nAQtA?j@KtAg@bAa@vDo@|ASv@a@`@Wz@e@RQ`@MtB[z@W\\[DKXyAHs@Ja@Z}BDo@d@sDf@qDr@uFl@kDfA}AhGeG|@{@TsA}AaE?GBMZOb@HDDpB~DlAb@^@jACnB\\tCv@Z@\\Dv@?^C\\IvAw@A]@\\l@YfAq@RWL[Ts@JSlAcBtAk@rHyAxIqAvP_DtC[bDo@tHsA\\En@GpAWpA_@^j@r@t@p@l@fAt@fD|AvBf@bDb@tDZx@C~CL?U`FTjAd@r@JxBJpCV|G~@`B\\x@@x@Ef@M\\S~@y@v@uBhAeBzBiBnB{A~CgBfB}@|AWtBOj@I`@MN?h@[vAcBf@UpAc@jA?fDNxAXzBt@~@d@bA\\hBTnCXbCh@vAf@hEnBRBpBz@tEhCDJrBhAlG~EjBfAbFhCjChAdDjAhFxAnNdDtCl@LC`H`BzBx@fGhBjA\\xD|@lBZdHz@zUxBdBJh@HjFd@|BLrA?`FKxNOt@@xESxCOlDDtCVhCVzC^tEb@h@JfB`@`Ab@dB|@rBrAjEbCrAd@bBZv@Dr@@hN]zGAbCSfLgC`AY`Bi@fAQbBEbBBxAHdEb@zB^fG`AxEh@tBLvBBhEIZCjB_@v@WzAu@bAa@hFeCbDmAbAi@rAy@~BmBtB}AfAe@ZIdASb@Gt@EpBBz@HfATxA`@`ALtBFzAMvBi@bCq@`Eu@~AMrBEdBPbBb@hCx@bDlA|AhAzCrDdAjArCbCX`@x@~AlAxCd@z@|A|B\\^|AxAx@h@lAf@d@Lr@NdEh@l@Nr@^fAt@nAfA`CnB|@f@n@Vd@HOzAIvAiBBiKc@oLLqGOyCKEg@IScA?";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "5") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").show();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("kor22");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "xtmj@giz`Te@AYdAeAE]WMQcAyBoB}E_@q@a@Yu@UMGSY_@iBEa@IWMMSKgEmAeAWkFyAaDw@mDc@wBS_C]gB[i@]M_@O{@GeAOs@]u@}@qAQc@Ks@Ek@Kg@]_@yD}@y@M[AcAd@kBrAwDvCqBdAyD~AyAr@mCdBu@\\{Bl@cCX{CJgA@{BCsBMsD_@gFw@yEy@kD_@mBGcA?_BFkALu@P{Bv@aAXyCl@]JiDl@eCPaADwBCiHJsCFsCNiBI}AYmAc@[OuHmEyAs@kAg@k@Sw@Si@IeFg@aKgAq@EaDCwCPwENwD?aEDuCD?n@iACOe@mDHyAAoFc@sNoAeDWiJ_AgGu@aBWmG}A_K_DqEkAsAYIKgJqB}GaBiFyAeDkAKZJ[kCiAcFiCkBgA}EyDo@e@s@a@_Ag@QAiAq@yAs@aDyAISiEoBwAg@cCi@oCYiBU}@EAJ@KkAMcBGo@DgAb@uBhBs@v@sAvBu@\\_Ap@eAl@oDbBuMvFwBlAy@Tg@?sAOWIgFu@[@wHkAsE_@wEO_FWcCSgBKYKuDa@oCe@iCm@{FkCWKkB_AcAUqAGo@F]DuHrAcDn@uCZwP~CyIpAsHxAuAj@mAbBKRUr@MZSVgAp@qBdASJ]H_@Bw@?]E[AuCw@oB]kAB_@AUDgBJMLSJSFMR}@z@iGdGgA|Am@jDs@tFg@pDe@rDEn@[|BK`@Ir@YxAEJMLOL{@VuBZa@LSP{@d@a@Vw@`@}ARwDn@cA`@uAf@k@JuA?oAPgBp@aAl@cA`AMD[FO?c@IQGSQS]G]?SP{ABk@Mi@S{@i@w@k@iAw@kAy@Oq@@o@Ve@d@k@bAsAbB{@d@yCZuLjAcAWeAa@kBiAwBy@gBgAiB{@cBi@yC}@}CsAgDwAmAe@cAQm@REXUXg@Vk@Bi@Qg@[a@g@iBq@_HyBoIiC}FeCeAqLw@aJ^]dEbDbCpCnHxHdGtGbCfCjAzAMz@SVi@HoBo@sFiBwHcCaFoBk@YSwAcB_QUsCi@cBgLaLmDiDiDgDaJ_J{DcEUTsE`AqBj@}ARqAFo@y@MyA?o@Dc@d@oBtAoEMOe@{@{AHyEGsBGKMGMe@aD}@aBmB{Ca@sA_BkCM[?KX_@pAw@B[EQqCmFI}@WgA_BgDkBeEiQm_@U_ABm@Xk@|@iATc@FYAWES]{@sC_NgAgEkAyDcCcJ_@eBaDaN_@yB_@oEGc@IYQO[O{GKgDDkBVsBn@oAp@y@r@QBM?EMB[LOrBsAdA_@|A]dCc@bAE|DCxB@\\GJKDGF]E_Hi@}Ni@iOwAaY{GQwCCmBEs@K";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "6") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").show();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("kor3a");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "tgoi@sm~`TDt@bF[XDdBHKMGMe@aD}@aBmB{Ca@sAkB}CAUX_@~AcAWy@aCuEM]C[wIBgFHiWNmJNiC@iC?c@LeBAqKpIwM`Lw@l@_DtBwB`BU]bI}FPUd@c@dLoJhHuFhCgBv@Hj@?`@HnF?nKKhWQhFItIEWcAu@aBc@gA{GqNm@{Ae@y@iA_CaDkHoBiEES@]DORe@~@iAFGLC|As@j@Kh@BTBVLJHVZxMlWzDhHj@nAr@nAv@rAdFnJrHGjAGv@Jv@WZq@IgBKuHFu@DKHKb@ShA@lBCzCOxAOlEq@bCUtImAjFo@jDUjBA~EJvLd@nDDhJXzBBlBJvNd@fI`@bDDjBFjDNzKn@v]hA`FVbJj@hCXdB^PHtEnAnBv@bBf@hAH`BBdBA`@EdKcBv@El@@NDVJPPBL`@Zx@t@^Pz@LrAFb@?bCOdEOp@BnFtBbBf@^FlAJjCDd@JPNR`@Jn@HbBR`CHLX|@h@~@BJfBlCr@|@hBdBl@p@dB`CHGD?VZB?C?W[E?IFt@fAxBdCz@fAdBnBpIfI`FbF^b@LDf@j@bC|Cx@n@`CtA`Bv@j@PpCf@zDf@r@?~AHtCHJ_@NZ\\?~CL`APJLnBLj@@vDZ~C^|AXLFBHGVKBuAQqA[e@G{@IARmAOlAN@S_CUqBEyHi@wCMcDYqC_@gCa@cCk@cDyAkAq@m@Uw@g@e@U]KqCUaALuHnAiFdAuAR_KfBsDr@oFv@uI~A}A^{@b@c@`@]b@S\\c@jAU`@YVu@b@oAh@ORh@r@WIUO}@Z";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "7") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").show();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("kor3aa");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "rjxi@ep|`Tg@LDc@O@cAAg@IiCs@mB]iC?{@Li@N]UGS{@oBm@_BSUk@Kw@EO@wA\\yCf@oIx@gBb@s@R_BdAMD]FW@WAc@OOMS[GMqBeLA[@Wd@yAF[CUOc@[g@e@_@s@a@}@Wq@Ek@ByAXo@Xy@j@uBfBUHSBc@?u@CuAfMs@|D_@vAsBhEy@zAk@RgAViALqBN{DDEWWuCImBF}AlAaLCgBMyAWgAkAk@qBu@cCmA@k@XI^QpBmAn@s@JSZcAM[OO_G}Bs@Ki@pAQHSAwDqAoCeASUEQAWzA}DTK`@EPDvBv@~DhBHVAh@{AtDQHSAwDqAmEcBYI]C]AuNzAiIbA_E`@kEl@qHv@DVEW{@De@AsFl@eJfAqD\\mOhBlAtAfCfCxBpB`IzHRFx@b@f@O\\B\\n@\\`BrBdCFRpEvEdEpEh@p@^ZrB|BdJzJJV@TOXSTQBy@AsUwHsD{AeH_CmBy@{G_C_@KG?QEaBm@m@]g@y@gAcD_CsG?CqA_D{CeIuAiDkFkNc@qAwBd@_Df@MCe@o@GQSuA?s@D[f@uBtAoEMOe@{@{AHyFI?X?YyDOYEcFZEu@";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "8") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").show();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("kor3b");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "tgoi@sm~`TDt@bF[XDdBHKMGMe@aD}@aBmB{Ca@sAkB}CAUX_@~AcAWy@aCuEM]C_@wIFgFHiWNmJNiCCqCD_CV}B`BuGbFwM`Lw@l@_DtBwB`BU]bI}F|MiLhHuFhCgBv@Hj@?`@HrFEjKAhWOfFIvIGWgAu@aBc@gA{GqNm@{Ae@y@iA_CaDkHoBiEES@]DORe@fAqALC|As@j@Kh@BTBVLJHVZ`CtEXOYNvIvPzDhHj@nAr@nAl@lAdAdBxApChA`CvDIlC@dACf@FXIRCTQVYSqLFu@DKHKb@ShA@lBCzCOxAOlEq@bCUjNmBtAOjDUjBA~EJvLd@nDDhJXzBBlBJThGHdCJbFJdIRzF?z@RrJTbKTzLc@pPErCUpFlAEzAHjAR|Bh@c@~BmApF_@|By@bEmArDgA~Cu@fBiAdD{@|BSjB@HFNk@^GPMPMJQHQDS@Q?SCOGOKMMMSMKg@YaAa@iUsHsD{AA_Ai@{F]kCo@iHBc@BKFGLELB^XjAfAVPhEpEdEpEh@p@^ZrB|BdJzJd@R^@TEV?`@FpAUJO`AgCr@{BlDqJf@kBt@qDf@qCvBqKn@gCpEmLRo@CMBLxCeIBYCSqAe@SUEQAWzA}DTK`@EPDvBv@~DhBHVAh@OX`@j@tFlCl@Np@oAlCeGZNcB`EwAtCDPtN|Gn@VhEfAdA\\pANVEjA[lAeAx@k@n@YxAYj@Cp@D|@Vr@`@d@^Zf@Nb@BTGZe@xAAV@ZpBdLFLRZNLb@NV@VA\\GLE~AeAr@SfBc@nIy@xCg@vA]NAv@Dj@Jl@BJCN@RJn@jA";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "9") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").show();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("kor4");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "~loi@ox~`Te@u@a@sAkB}CAI?KX_@~AcAWy@aCuEM]C_@WgAu@aBc@gA{GqNm@{Ae@y@iA_CaDkHoBiEES@]DORe@fAqALC|As@j@Kh@BTBVLJHVZxMlWzDhHj@nAr@nAr@xA|F{B|E}A^ExA@fCGfCBlBCzCOxAOlEq@bCUjNmBtAOjDUjBA~EJvLd@nDDhDJdL\\JbDNnDTzGwNPeGFsC?iAFwDFoBJ{IBiFL_CHqJ?i@A{FLgBAiCB}@BgBRe@JOb@LThBdJ|@fEjAlGZnBLdACzA]hLGVADc@\\QDa@P}AXu@PANb@|ABN?NpEvLtAhDzCdIpA~CB?jBhFFNC@rA~DZf@pAp@~@^jVpI@eASsBo@qFm@_GG}A`@]j@^nBrAxPnQvGrH~AbBh@R`ACh@Fd@b@Nr@Ef@Yn@u@bBsA~CoM`_@i@vAOn@WpB@VDJZVLRDZCd@IZy@`CKv@BjBfArJ`AnJn@fFZ~A~B|J^nBdAxETv@XnBxAxIBd@~BnO`ArHzAvK^dBPfBnBvOlBlPn@rDx@tFZtCz@~KZlFL~@FtA`@tE?`Aa@dEe@|B}A`Gm@dDSrBSdE^fAXZVPz@t@d@n@x@vAx@bBXhAx@vETr@d@nAn@lA`BhB~@x@`BlAxGrERRRj@DXR~CN|@r@zB`@pBLT\\Tl@NfAj@f@b@\\`@p@n@p@jAxAfE~@rBPRZRjAj@^`@vAdCzA`BTZx@|@|@jAlAlB^z@z@bCj@bB^vAV~AJlANx@Lb@NPb@^nB~@t@b@zCxBr@`@lBl@|@\\vAp@fC|At@TjBNjERbAFjARrBf@v@V~Ap@h@ZpAbAv@f@\\Hl@FdB@rACfAI`AEzG@h@At@GzHeBfAQvCI~I?tBFhALbCd@f@TzAv@jA|@b@X^R~C~@vCnAtBv@xBz@|FzBbAXd@HjA@t@Ch@I`@A`AJ~@XjIj@nMrAxGx@x@B\\ETKREV@RDRJLNj@b@xHxAfLnDbOvFjJrDrAx@`E|C~B|BzQbSpIzJrBxBlJjJtA~AbAzADVDDv@zAd@pB`AzGb@p@h@d@XPf@R`B\\v@TDOENf@NZJlD`BtPvJlCbAtBbAhM`HbD~AdBZ^@tEh@v@Df@?v@GrC[vE[lEc@vBQ~@DnA\\lFrBfA^zIhBrBXxBNbEDlD?`FJnAFn@HzA`@vF`BlCr@~@PfFr@f@?lCe@hDe@xB_@~@_@fCwAp@YfAYp@EZAd@BjAPxCVhDn@p@Pn@Zh@d@RRlB~Af@b@@Dn@@t@H";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "10") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").show();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("kor44");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "pmgj@yqg`TiBYCGuCcCSSi@e@o@[q@QiDo@yCW}ASo@?q@DgAXq@XgCvA_A^yB^iDd@mCd@g@?gFs@_AQmCs@wFaB{Aa@o@IoAGaFKmD@cEGyBOsBY{IiBgA_@mFsBoA]_AEmCReFh@iDRsCZw@Fg@?w@EuEi@_@AeB[oCsA_DeBqGkDaD_BmCcAuG{D_E{B_B_AaBw@gBu@_Be@aB]g@Sk@a@_@_@[g@aA{Ge@qBi@gA]WsAcBwCwCq@a@g@Uy@Kw@Bm@H_@Ng@TqAhAc@Vq@Ru@Fk@Cg@Ik@Uk@a@wOoRwFgHqFiGc@q@[u@C}@Bs@Xw@hBkEB[AYM]Q[iAm@}Am@gBo@wKkEsGcCqKwC_IqAUBq@VOB_@EOEWUKWSOYMUGeNaBsBS_C]{RoAkASuFgBwEmBiH{CgAYgAa@c@WcBmAq@a@gAe@qCk@aAGuEEgIDmAHeAPcIdBk@DqC@gEA{AHkBFwBEs@MOGcCkBgAi@cA_@aCq@uAWgCQcBGaDY_@Ia@QaAo@_B{@eDmA_A[gAu@[[wAcAiAm@gBy@[S]a@Ui@UqAUsBQu@cAiDeAyCUe@iCsDkDgEg@y@i@cAi@e@_Ac@_@Ug@{@uAsEWi@qAeBeAkAa@]m@[wAm@WSOY]_Ba@qAY}A]_EKi@Wa@kBsAmFqD_BwAwA{AkAoB_@aA[oAc@cDYoAwAuCq@mAm@s@uAo@a@MQALiERaETwBvCeMVeCHyA?WWkEW{Cs@_L{@}JuAwIUoAA[w@}Gy@_HgEm[e@oC_@sBSKMOISAU@ODOHKTOUoAiBwLkDsR}AkIkCeL]kBk@eEkBeQ_@wDGoBUgBCiA@_ADe@\\q@t@yEAQ_@g@EOB]JOVEt@I\\KTi@h@yAdBiF`CaHtCoHj@wBFQK_@KUQWe@{@cAo@}IoC_IkCqGiCCw@k@}F]gC]_EMcB@a@H[XGLH^XxJnJbI~IzDbEpAxAxAjAZNv@E\\Dt@@t@_@vHoT~EsVnB{FrAmD?I`AiCJItCsHRcAB[ESqAe@OSESAUBSn@aBTi@d@q@v@HnBx@~Al@p@\\n@VN`@kAnDe@j@e@C}FwBkC}@w@K_AJaMpAiIbA_E`@kEl@qHv@y@DaMvAeGl@wR~BoJgJ{DcEUTsE`AqBj@}ARqAFo@y@MyA?o@Dc@d@oBtAoEMOe@{@{AHW?aEGsBGKMGMe@aD}@aB}@yA";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "11") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").show();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("korf2a");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "x~li@iyeaT|Qn@h@?h@~JhApVfAl[Ch@NfHT~Cn@zD|DrPpBzHvAvEbApDr@MhAq@~B}@tB_@dDy@hFiAxBg@dAMfBK~AEpEX`^bDnE\\d@kKVaEj@eEPu@Za@PKTCl@?`@I\\M\\StAcANIdB_@hAC~A@vDRZAbBg@nGSvCEfG@hDn@jAPrNlAnE\\I|AIPQ`Ba@`CCl@?hABjAnAzR?lBsAhSHTWlEOlF[xGvNd@fI`@bDDjBFjDNzKn@v]hA`FV~EZViDFwBDa@Po@NWXYn@e@v@c@DGJe@Hq@DKLKnAQhFYHCxAcAZKVCzCEvB\\xBmN|Gr@lCZ|BRrBXvD}R}CIe@?]IcAQ_HeAsHmAoHcBwHcB}IwB}Du@eBk@a@Ls@WeCu@}D{AkCu@u@QmB_@}@EoBCkA@s@G{A[oA]w@Q}@CoJaDqASiCYmDSPkC@i@E{FDsDPuFLkAlAgDHgA@q@GcD@gE`@eCt@yDFg@@YoDjC{BfBmBhAw@ZGIv@]|@e@rJmHV@v@FlCZrCd@tRlDxDf@`KfAjDj@fATxOpCrIbAjG~@j@uBpEkV";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "12") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").show();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("korf2aa");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "zpwi@m~daTtI{c@p@{CpBsKdB`@hD`A`C~@lD`BlFjAXPzHiFVLlA\\j@HZJjAj@d@LvANl@B~AAnDxAjAZh@OpBkE~CtApDvBc@dA`HrCzAj@hDwGZw@h@kBTqASEMl@Lm@RD~@}Eq@W{A[{Cg@CHBIWG_A_@oB_Ao@UGLFMcBo@s@_@OQ]m@a@m@MKc@S_Be@q@IgCg@wAg@iCqAkBmAMEsA]yCi@YEg@C_AJe@JYD]@o@A}CDkBCSBkAKaBSkCi@{Aa@{Be@y@dEwDs@g@OaFaAiASO?[FsFtEq@r@aCnBmFvE{NpKeIvGcBvAcAF{@G{FIcDB{@Cy@f@e@CaAO_A_@wAQ_AHc@J[@HcCJ_ARw@n@}Bd@_BNqABg@Bg@HaAHcAHaALaA`@}BJmALkADa@F_@X{@j@kCyDI{DSoERkAJmAC_FSaCBgBA_AYw@i@uBg@}CmA_Bg@sBScBKyBUkAGeAGy@N_Bb@i@Ji@Ag@Qa@[}@aA{BeCo@}A_@_BMw@Iy@Ky@?y@B[F[DHAv@F~@LjAj@tC`@bAj@z@kAxA{AnBBNLTmCvE}N|PqDlEuEjFuDbE_@O_PwE}CoA]b@KDsBk@_BIiD}@yC]G~@J`ADv@In@YjBeAnHkA?_C@yC?gCA}E@sC?qF@yBAmD@kB@iBAaB?_CBgEAwERaH\\eDLD~An@fMwQ]CBi@tDeEj@Qu@@YVs@HWl@y@`@_@NS~AF";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "13") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").show();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("korf2b");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "v~li@kyeaTlRn@s@}OlAEnPu@tGEr^AA]@\\bM??sAzCCpEBf@yCTwBRuA@q@OsAHeAxC\\hD|@~AHrBj@JE\\c@|CnA~OvE^NtDcEtEkFpDmE|N}PlCwEUg@l@u@pA_B]i@Qi@EUEOG[Qw@WoBK_AE{@PG@r@Fv@Ln@Jl@N~@Tt@L\\R^t@`AbBbBx@x@^R^Fb@ElBe@v@Mx@CjAHtAJfBLhCRjARlAd@nAj@pAZlAVfCfAv@Dr@@v@Gt@@xBDjBHjBBlBOt@Cr@EfB?bBLpBLrBDKr@Or@i@dB_@vDEr@Or@WtAOhAKjAOlBKvASvAa@lA_@lA]pAIj@E~@I|@?TDFf@KZIX?ZA|AXl@Pd@Pv@HP?PKRSJEdCC|HBfBRhAu@tBgBlM{J|EiDxAoAtFsE~EgEfBaBtAiAd@YRCR?jHvAtEt@r@wDpJvBpAPzALPDjBB|CEn@@v@Gd@K~@Kf@BXDxCh@rA\\LDjBlAhCpAvAf@fCf@p@H~Ad@b@RLJ`@l@\\l@NPJFf@VrCdAnB~@~@^nGjAfA^g@tBu@vDk@nBoAnCsBzDiBq@aHsCkAjCAJiCkAMISS]gAgATYqAoA\\kA[oDyA_B@m@CwAOe@MkAk@[Kk@ImA]WM{HhFYQ_FgA_EeBwDsA_EcAiM~n@i@rC";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "14") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").show();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("korf2bb");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "pqwi@i_eaTeArFU`BcChMi@nBoJuAaHy@iVmE{@M{BQkCYkDa@{AUwTaE{@MsDc@c@AcIfGmBhAw@ZGIv@]|@e@dJ_HCl@Gf@u@xDa@dCAfEFbDAp@IfAmAfDMjAQtFErDDzFAh@QjClDRhCXpARnJ`D|@Bv@PnA\\zAZr@FjAAnBB|@DlB^t@PjCt@|DzAdCt@l@\\T_@vBv@|Dt@|IvBrB`@vCp@z_@xGfBBlAANV?VaExRwSiBcAzE}@jFgCe@cCDgAZy@p@g@Nu@F{BF}B^[lAK`@mBlAm@dAOxAIrCa@pBeBnA}Av@sE|AsD\\oHPmEIoENiGO}PLsDRyDLcJCeF`@a@mIO_HRwGhAeQp@cJZwGk@mHq@gLTkE`@gCR}BcF[_Io@}BUaCc@uAYwAKcD?gILyCD}Ar@iBEwDS{A@uAT}@`@u@r@s@Xy@X_AAq@h@kA`Im@lOwVwBoLgAyE[wEPkN|CkFfAyElBhDbOe@FaH}Y}FiTgB_Jq@yH{BSiGM_CJ_C\\m@RmB`Ay@r@QBKCIQDSLOrBsAdA_@|A]dCc@bAE|DCxB@\\GJKDGF]NsGk@yMm@wPwAaYiQ]CBi@tDeEj@Qu@@YVs@HWl@y@`@_@NSzAF";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "15") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").show();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("kor5");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "txni@yuw`TD@FQHIm@aKkOz@}H^kTnAIRQJIBM?WGQUCYHWHIXIRBRJJPxDQ~DMrHa@nN{@rIm@CYl@E^pG\\jDDDTATFj@d@TFfLHdM?FMJKNEN?NBLFHL\\LdJ?xOHhACt@K`@ApIBNFvHUzHe@zDOxAKpC]nBc@TIhFgA\\e@uBiJm@kDeC_U_@wDGcBUsBCiA@_ADe@Xo@H[f@mD?SAQWe@E[BKHMLGPET@LNDR?LCPUz@BLOr@WpB@VDJZVLRDZCd@IZy@`CKv@BjBfArJ`AnJn@fFZ~A~B|J^nBdAxETv@XnBxAxIj@tCvBvMLN|@b@\\?b@S|FcEPWNWlA{CX}AJkAVqJBsEJsEPqAPu@Vs@`@}@tIkQhDuGjBoCrDaFp@u@XMl@?l@FxFfAl@?VMb@e@HOJe@BaAPwDHw@\\sCb@y@fBoCZs@H]Fi@EcAKcBA}CE_AG[IUS]wDmCe@k@i@aBQDqIx@eD`@uAL{@Wy@_@eHeDmC}AsC}@mC_AcDqAyD}AoAg@k@D]TYp@q@Vm@?e@Qw@_AwAg@mFgBuBq@}Bu@sK{DW_@Iq@KmBc@_Eg@iF]oD`@Yt@X|GlGtKnLlJ`Kx@Rx@?r@@p@QbB{EpFcOrAgHxAqHxAeHhCiG|FePCSqAe@SUEQAWzA}DTK`@EPDvBv@~DhBHVAh@OX`@j@tFlC^J\\BFDFJDP~FnC|E`CfAb@rEjAv@ANETO|AaGj@_BHQPQlEkChCqCvAqAdAgAzD{CpBwArBeBjEeEd@iAVu@^wBL_Aj@wGZqCDeBEg@i@eCI]By@DWx@VhAH`BBdBA`@E`Dg@bF{@d@_AtAiDV_BOsHVyClB{LpB}J@Yb@mBfAmGVgBFuCBa@b@{AfAkCr@uB~@kBf@_Bt@sCXcBTiCXmBx@wDLcAXeDB{@Hc@FKpA}A|@{@xLsIvAgAxA}@dAi@hF}Bz@YlEgAxBo@LGtAaAv@s@dF{EtByB`B}AHEJ?bAc@z@WZe@X}AFq@@_@CSGKYSmHyEiCkBMUAUDYx@_BnCaFxBiEZw@^oA^mBSEMl@Lm@RD~@}ETFpAB~BN~@BdCTlBFXAlEu@~@MRAp@D`C`@|G`AhA@`CPbBHd@@zJEfDBFWJ_ARo@JUj@BdALV?^Eh@Ab@@x@ClC?~@Ml@AzAJPBhA\\`CdArE`BTBrA?NBVLbAt@hA[^Uf@c@nAw@j@Yj@_@bCoAzBmAhBoAtDaChF_D`EyBpBaAxBw@`@Eb@CbDBbBHn@JfCt@j@HlBGhDYhBG~@IbD?b@H`Bv@vAZBMCL~@JHH@HfDRb@Lf@^Td@NJxBr@j@VLLDDl@~ExAtLJ\\NXRNf@JxBJ~EHKxDQpFQtJf@Hb@D`BHjOZM`BrBFnCPFFY~JJHFN?NIPQHGb@KlCOALoDQKGSiGWF_BwBG@{@cEQ@q@LaDwAKSES?oDUy@QJq@?]@Q";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "16") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").show();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("kor55");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "blbj@oqeaTJK|@wXwEIyBKg@KSOOYK]yAuLm@_FEEMMk@WyBs@OKUe@g@_@c@MgDSEMIB}@KwAYYKiAo@s@QoC?_AHiBFiDXmBFk@IgCu@o@KcBIcDCc@Ba@DyBv@qB`AaExBiF~CuD`CiBnA{BlAcCnAk@^k@XoAv@g@b@_@TiAZcAu@WMOCsA?UCsEaBaCeAiA]QC{AKm@@_ALmC?y@Bc@Ai@@_@DW?eAMk@CKTSn@K~@GVgDC{JDe@AcBIaCQiAA}GaAaCa@q@ES@_ALmEt@Y@mBGeCU_AC_COqACg@tBu@vDk@nBoAnC_GxKQb@ATJN|MbJFTCj@[~BIRKRo@Tg@NcAb@EHGF_Az@qHnHyBnBy@p@g@TmA`@_FpAcBh@kF~BeB~@[PeD|B_ChBaGbEaA~@mAzAQh@KfCQxAMbAi@zBi@hD]bDWxAq@bCk@bB{@jBs@nBgAnC_@lACREl@?xAEl@U`BgAjGc@lBMXqB|JmBzLWxCNrHW~Ai@tAk@rAe@~@GVuHnAeAP[BkABqCEaAKi@KIpAh@dCDf@EdB[pCk@vGM~@_@vBWt@e@hAkEdEsBdBqBvA{DzCeAfAwApAiCpCmEjCQPIPk@~AuAdF_@fBcDu@aCo@q@UcNoG]ASHQVg@fB?LLt@z@`DEJGF_@JqBu@cCmA@k@XI^QpBmAn@s@JSZcAM[OO_G}Bo@Gm@pASDg@KiAe@wAe@kCgAWOEQAWzA}DTM`@CPDvBv@~DhBHVCf@aBtD_@Ns@Um@UaBi@iD{Ay@YcA@uARwD`@cJdA{JdAcEj@aBP_E`@cE`@mHz@_J|@{Gt@wCZyB`@lDvDpEdEjGhGr@b@`@AXIZJZbARxAx@~@tF~FfNbOhCjCfClCd@f@n@@t@E~@Ph@Z~DpBzDnBvDnA`ElApDpBbJhEj@H~AM|Es@hE_@z@Ef@LXt@N^j@l@lDhCT^Nh@XABb@WBFlFHtA?`@El@Mb@Yr@eBtCa@v@]jCYlFA|@Kj@Ub@a@^e@Pg@?aAOCb@Bc@cE{@e@Gm@ASNe@h@uBpCqC`EiDtGSZcAxBsGtMy@nB[vAIl@IrEGpESjJEh@a@jCoAbDYh@ONaC|A{CtBg@`@BZGXKPOJQFS@SCSKMOISAU@ODOHKTOUoAiBwL{AyIMFGWFVLG_B{IoAoGs@MeFbAY?oBb@qC\\yAJ{DN{Hd@wHTMDU@EPEDiDAAWgC@_@@s@L_DBqDG}CCiF?kEAFLFDGEGMo@BUJIJMFOBO?MGKIGMm@GqFEcD@sDCeHIu@KIJdBtYlA|QfAdQRbGd@rJRrCxCMF|A~AG@~@A_ANG@GAoAqGV@RCPMVs@`AW?KGIMBSj@cB@{@w@oNqAwWyB}]UgF]eFKGIIEMAUFQ?G";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "17") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").show();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("korf4b");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "thfj@wzq`TuHr@oIl@gD`@yADqCTmAAo@BkB`@aBRcAH{FPKpC[lBOzAExAAxAEpAk@hG_@fB@|FCtAGnAC^I`@}@lCeAfB}DpHc@x@}AbCq@hAgA|AWp@Of@WbBk@`FGvA?pAF^JZn@dA`@h@h@f@NLTHjAVLFHJZx@Hp@A\\UjAGrAFb@b@r@BN?\\ILQHcAVKF[\\]v@Gl@HjCKZs@z@]lFCRGTKFs@FGJiBlH]BKPW`Ba@pDeFS{DW}EAkEJiA?aG_A{Ei@}DQ_MaAiFkA}@c@oA{@iB{@WGu@GyBCkG?{FYwERwJpAoEd@{AV}HhBq@Jw@?yBGeB_@{KoCmA|GIV[h@i@dBS`@u@lAmAtCoBdFYh@Wv@wAnDYd@oBs@wKkEsGcCqKwC_IqAUBa@P[FS?_@IWUKWSOYMUGeNaBsBSCN";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "18") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").show();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("korf4bb");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "ts{i@{tl`TBO_C]uOaAQIEI?QJIh@I`@A`AJ~@XjIj@nMrAxGx@x@B\\ETKREV@RDRJLNj@b@xHxAfLnD|VpJtAqDVa@TIXi@nBeFlAuCt@mARa@h@eBZi@HWlA}GzKnCdB^xBFv@?p@K|HiBzAWnEe@vJqAvESzFXjG?xBBt@FVFhBz@nAz@|@b@hFjA~L`A|DPzEh@`G~@hA?jEK|E@zDVdFR`@qDVaBJQ\\ChBmHFKr@GJGFUBS\\mFr@{@J[IkCFm@\\w@Z]JGbAWPIHM?]COc@s@Gc@FsATkA@]Iq@[y@IKMGkAWUIOMi@g@a@i@o@eAK[G_@?qAFwAj@aFVcBNg@Vq@fA}Ap@iA|AcCb@y@|DqHdAgB|@mCHa@B_@FoABuAA}F^gBj@iGDqA@yA[EZDDyADk@Ho@ZmBJqCzFQbAI`BSjBa@n@ClA@pCUxAEfDa@nIm@tHs@";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "19") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").show();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("korf4a");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "thfj@wzq`TuHr@oIl@gD`@yADqCTmAAo@BkB`@aBRcAH{FPEoD@yAIiC?m@Dy@`@iCPiBN}@\\{Br@kDHm@Ru@\\s@n@mCdByGpB\\LCdBuCxA{ApAaAl@eAVs@LkA@]AQKk@AoAHuABOHOr@SNMLi@TmACGEGe@WKQIUEyCHmBGuCDaANe@BUCaAD}ABEHCh@Gd@K~Am@KgAI]KQ]UaAi@a@_@s@g@WE_A{@eA{@}@kAe@u@m@oAQq@Ac@DmBAu@Ei@Mg@qCiCk@a@OESCaADOAo@S_AOSIk@e@_@c@We@EQ@q@X_GH{@j@yCeD@sGc@}CYuEi@uABmATyDx@YBa@?sFMoJ]uCMiBU}@Ow@WuAs@aDyBe@c@Yc@s@q@YQgB}@s@a@w@{@e@o@eCuEUYiAeAo@s@[m@_@mA]sBi@yBKKQA_AEk@OMT]`@iAx@[Ja@TmBTm@LWTcAbA_ErBqAb@o@Hu@@OC]OoAs@WEOBi@r@YRSJa@JgALcB?i@DIBEHgB|DSPo@XcGGs@IiDeAmB[y@[iBc@aGaBpA{E|@mCxBcJJOfAy@XILAnC?^CdAWrAS^IDEr@UWmCLCNdA";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "20") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").show();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("korf4aa");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "xv_j@{sx`TNdA`A?v@PfAh@lAJD?LGd@q@Ve@RAtCh@vA`@f@HhBHzCAfJRnCR~CZxBkK^qATk@FGHCp@?hCTtBVb@?pAWj@E|@Ah@DpAN|B`@lDbAbGrAbGF\\CPIp@g@~@i@rEcC`Bs@d@EtAA^@THbCbBf@XvEhA~A`AfClB`Ax@bBdBt@~@vAzAVf@P`@p@nCxBbKRlAR|A@d@IdA_@jChEzAyAhG}@pDy@hEIz@Y~FAp@DPVd@^b@j@d@RH~@Nn@RN@`AERBNDj@`@pChCLf@Dh@@t@ElB@b@Pp@l@nAd@t@|@jAdAz@~@z@VDr@f@`@^`Ah@\\TJPH\\JfA_Bl@e@Ji@FIBCDE|AB`ALAM@CTOd@E`AFtCIlBDxCHTJPd@VDFBFUlAMh@OLs@RINCNItA@nAJj@@PA\\MjAWr@m@dAqA`AyAzAeBtCMBqB]eBxGo@lC]r@St@Il@s@jD]zBO|@QhBa@hCEx@?l@HhCAxADnDzFQbAI`BSjBa@n@ClA@pCUxAEfDa@nIm@tHs@";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "21") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").show();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("korf3");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "pryi@yskaTLBLCJIx@yC^mAsCm@FW|@ZzHbBV{@nBwIrAsFbBgHvDjA|AXbDZlEf@rAPd@JpEd@AHkEc@m@OsAQiEg@kD]yAWgDgA}A|GyCdMyEpSaC~Jp@`@lEpBtDnB|CnBNFbAHfC?n@G\\GnBo@zD_@vDg@j@EV@z@JpCf@hCp@|A^t@DbA?|AGjBHJAr@@^AhB]XA|@?`AFr@LVHpBfAp@VnAV^D|@BNCh@WR?`I`BFDtAXfCV|B\\hB^\\HnAr@`Ct@_@bCi@dCOfACt@@VN|@BbAc@tF[~J`L\\zCHN?zJVzOf@@LcAAuDMeAGaRk@[CiCEqEMmEM_@tKMjG]rJWrKEp@GLSP[BeDDEHGFIDGZW`E[zDk@jEs@hFsIDmAAsCMqAMiAA}GaAaCa@q@ES@_ALmEt@Y@mBGeCU_AC_COqACg@tBu@vDk@nBoAnC_GxKQb@ATJN|MbJFTCj@[~BIRdAJlCl@rAPrH`@xFp@nC@^DZH|Bx@pB`@bBRFDj@DdBXnAl@n@`@tBt@\\ATEtBa@|AWpBAtDc@v@GjBDh@Dp@@TC\\Ib@_@d@m@dAiAjAi@ZWRUvAyBTQ~DyBrAm@n@KvEG|@?hADjGd@BWCVXBV?XETMPQv@qCdAmENg@RQ~@a@j@Or@[lBY~@S|@[RQR_@j@aBVa@ZSXK|COZOb@c@TKpAEvCm@\\Cj@Bd@NtAp@HJHX@^F\\PVbCvAh@Lb@DdBAlBNxCh@ZBnBDl@?j@Gt@Ud@vAdBWVAf@DjDp@hBbBn@|@wCTwAy@y@[_Dg@RdETdDd@bDNxELlCDf@bArD`@rCD~@Gr@cAjF_AjI]jCa@hCBVPZzBpAdEj@z@t@d@l@xAj@n@b@X\\L\\B^EnFTdJBvBLzBC|EMvAcAhFa@nC_@vFi@fGMbAs@~Dg@~CE|@WfI{@Rw@PaC]iDg@{B_AsAq@cBg@aArELD_BvGWx@OCcA`EQz@Cf@n@M`Bg@h@U`BaA`GeCrD_CbAiAfAyAVe@|@Wp@Sh@K|BKpFi@t@E|CG|@Id@Md@Y\\[Pa@Vq@f@mBb@_CRs@VWjD?~@GR?|BLjAxA|Ah@lATlEZBYCXjCP?~@[lDYtEYjHKnAc@zCEHsBdBOHOTA@oAnD]r@eBt@a@Ta@\\s@~@_@l@gBlDc@`CWlCYtBoB~Ju@`D]tAy@dCqBdFk@dBMj@cArFq@dFJHBHEv@WEUrBtQ~C`EbA~A_Hd@eCBC`BNpDRpK^f@}KHmBFsDTcH~@}Fb@TnFbEvB~@n@PvEbBFWGV`F`Bx@^b@Pf@ZnBjAeAhEc@zBe@`DUbAIfA?VJ|@BhBEbACNeAtDg@pBQVE^cA|Ca@z@Qn@{ArGe@bD|@CvDEBPwC@Ah@IDK?";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "22") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").show();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("korf33");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "xpdj@is{`Te@AMOIq@NwAP_AxAuGRo@Zw@fA_DXy@j@qB~@qDDSDcACgBG_AEg@Jw@RcAd@aDb@{BfAeEsCkB}Aq@aFaBwEcBo@QwB_AoFcEc@U_A|FUbHGrDIlBg@|KqK_@qDSaBOCBe@dC_B~GaEcAuQ_DVeC|@yGbAsFLk@j@eBpBeFx@eC\\uAt@aDnB_KXuBVmCb@aCfBmD^m@r@_A`@]`@UdBu@\\s@nAoD@ANUNIrBeBDIb@{CJoAXkHXuE_Al@m@h@l@i@~@m@ZmD?_AyIm@mAU}Ai@kAyA}BMS?_AFkD?WVSr@c@~Bg@lBWp@Q`@]Ze@Xe@L}@H}CFu@DqFh@}BJe@F{@Vw@NqCa@{Ck@{B_AsAq@cBg@aArE}DtOQz@Cf@n@M`Bg@h@U`BaA`GeCrD_CjAoAUITH~@sAVm@v@Oz@WTmID}@\\}B|@aFLcAh@gG^wF`@oCbAiFLwA@_EO?N?@]M{BCwBIgCMCLBK}EDoFC_@M]Y]o@c@yAk@e@m@{@u@eEk@{BqAQ[CW`@iC\\kC~@kIbAkFFs@E_Aa@sCcAsDEg@MmCOyEe@cDUeDSeEa@wAdBWVAf@DjDp@hBbBn@|@wCTwAy@y@[_Dg@a@wAe@wAu@Tk@Fm@?oBE[CyCi@mBOeB@c@Ei@McCwAQWG]A_@IYIKuAq@e@Ok@C]BwCl@qADUJc@b@[N}CNYJ[RW`@k@`BS^SP}@Z_ARmBXs@Zk@N_A`@SPOf@eAlEw@pCQPULYDW?eHi@iAE}@?wEFo@JsAl@_ExBUPwAxBST[VkAh@eAhAe@l@c@^]HUBgEMw@FuDb@qB@}AVuB`@UD]@uBu@o@a@oAm@eBY[EO?_@DMAiCa@wAa@w@WSI{@Q]C{@@kAEiCYuAK}DSoBQaBUaCi@yAKKGJOX}AHqACSGKYSmHyEwB}AQMMUAUDYx@_BnCaFxBiEZw@h@kBtAoHTFpAB~BN~@BdCTlBFXAlEu@~@Mh@?ZB`C`@|G`AhA@pALrCLlA@bIEdByLp@yJC]IGEICI@KBKFGHEJAH@JDDHDHdEBLMFMDq@VsK\\sJLkG\\}K`L^|CDNAjLZ@WAV|BH?LqPi@GG}CEaL_@\\cKb@uFCcAO}@AWBu@NgAhAiGaCu@oAs@]IiB[eGy@uAYSAcDo@qCo@S@_@RWFaAA_@EqAWwBiAcAa@o@KcBKg@BqB\\c@@u@CKCkBI}AFcA?u@E}A_@iCq@_Cc@mAOWAk@DwDf@{D^oBn@]Fo@FgC?cAIOG}CoBuDoBmEqB_Ai@hByH\\uAj@qCxBcJnBwIrAsF~A_HzDbAzA\\dDXlEd@rAP`@JdFp@`APGf@Fg@aAQeFq@a@KsAQmEe@eDY{A]kD_A}A|GaFzSg@OqE_A_@lAy@xCKHMBs@O";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "23") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").show();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("kor6");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "hj_j@wbbaTvA{Bv@aAfAw@hCiAb@GDP^XrEdDr@`@pCtBrBtAj@d@fAt@\\A|@TtBMx@b@\\VPBHE|A[~@Wh@OWw@mC}GPKrAvDLGIWHVhA]Pf@wAf@`AdC|@vC`BpEpAbDHz@c@fD@F_@bDEj@]tC}@|EaArELDuBxISGuAzFEhCAlCAd@a@r@k@p@OCgAlA_@z@uClIwBpG{A~EgA`DcAfCcCvHmBpF_DtGqCoAIS}As@kB{@wAg@cCi@qAO}@IiBU}@EAJ@KkAMcBGo@DgAb@uBhBs@v@sAvBu@\\_Ap@eAl@oDbBuMvFwBlAy@Tg@?sAOWIgFu@[@wHkAsE_@wEO_FWcCSgBKYKuDa@oCe@iCm@{FkCWKkB_AcAUqAGo@F]DuHrAcDn@uCZwP~CyIpAsHxAuAj@mAbBKRUr@MZSVgAp@qBdASJ]H_@Bw@?]E[AuCw@oB]kAB_@AUDgBJSCQMeBmE?GBMZOb@HvBdElAb@^@jACnB\\tCv@Z@\\Dv@?^C\\IvAw@A]@\\l@YfAq@RWL[Ts@JSlAcBtAk@rHyAjBYG_BCwEBgDHeDV}I\\yI`@FOzCMvDW|IIdDAnEHdGjEo@vP_DtC[rAbGRbBCZ_@xBIdAKhC_ApEUnDU~CGxArBhAvBjAlAd@dBLxA@jA?|@HdAFjAyDdBsGnAd@hAXJJ@XiAxE@FvB~DF@`@AXHzBnBhDn@hCSdB[l@Bf@HXT|@PoAfCDHv@f@XNDJEf@q@pEg@vB[t@a@h@eApB_Ad@{@\\uAz@}BjAq@l@k@`@SRiBvAeB`Ba@dAc@z@Mb@}@|@MXoArDe@z@{@~BmAbBe@\\ORQr@@XH^ERQ^_@Ze@TWVk@t@eEpGONc@v@]d@mBdCy@d@iBvBGTEVB\\NAO@TbCCXFhDf@hDV|BLtBFl@b@dAMp@Wr@c@xAOv@?R|AV`Cd@v@TdBV~APdAFz@EnASdCBl@Eh@]hAe@hAOb@CnB|@nAJ~@?t@M|@]nAu@l@Ur@ApDHnC@v@R\\^b@ZhAl@b@Aj@QfFyDvAoA|A}AbAw@t@WdAUhACrABlADlA@~Ej@nBZR@rB@XCnCo@~B_@lGy@x@U~@e@h@K`AMlAFRDhAVbEjApHjB|A}Fb@eA`@wAb@iB`AeEZa@v@g@f@MxB@p@GzAa@`AGzAa@g@}ESiCl@q@hEmCrBaCv@kATYhBkCb@u@Hq@?c@CEAMBK";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "24") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").show();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("kor66");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "fg`j@ksy`TNED@D@FJ@FEJEBB\\Mr@M^sB~Cs@tAm@p@yBnBgElC[TIX?d@NhBf@dErABh@J~@d@tANRGd@q@Vi@LAXHrB^dBd@bAJlAFpAAlB@zDLzBBbADvFf@ObBRlCdAp@\\POTc@l@oBhAi@Jo@Fa@H}@PcA`AQZ}DjB{An@yA?o@SoAs@WEOBs@z@c@V}@R{@BuA@g@DOL_BnD_@d@k@RqDGgABe@GWAoBu@kIoBaGaBqHkBcEkA}A]mAGaALi@J_Ad@y@TmGx@_C^oCn@YBsBASAoB[_Fk@mAAyA@gC@oAJu@VcAv@}A|AwAnAgFxDk@Pc@@iAm@c@[]_@w@SoCAcDIaA@m@ToAt@}@\\u@L_A?oAKoB}@c@BiANiAd@i@\\m@DeCCoAR{@DeAG_BQeBWw@UaCe@}AW?SNw@b@yAVs@Lq@c@eAGm@MuBW}Bg@iDGiDBYUcCC]DWFUnA}AXYx@e@lBeC\\e@b@w@NOdEqGj@u@VWd@U^[P_@DSI_@AYPs@NSd@]lAcBz@_Cd@{@nAsDLY|@}@Lc@b@{@`@eAdBaBhBwARSj@a@p@m@|BkAtA{@z@]~@e@dAqB`@i@Zu@f@wBp@qEDg@EKYOw@g@EIjA{BUKa@O}@Uq@GmK@gEaDgAqAkAaBzAyF}CaAsBzHcAxC}BW_BH}CImCcAsBuAkAs@?uAX_GrAeIr@mIq@oFa@}A_DNwP~CyIpAsHxAuAj@mAbBKRUr@MZSVgAp@qBdASJ]H_@Bw@?]E[AuCw@oB]kAB_@AUDgBJSCQMeBmE?GBMZOb@HvBdElAb@^@jACnB\\tCv@Z@\\Dv@?^C\\IvAw@A]@\\l@YfAq@RWL[Ts@JSlAcBtAk@rHyAjBYG_BCwEBgD`@cOxAaX`@B{@jMOzCMvDW|IIdDAnEHdGjEo@vP_DnWeEpA_@^j@r@t@p@l@fAt@fD|AvBf@bDb@tDZx@C~CL?U`FTjAd@r@JxBJpCVtFt@f@H`B\\x@@x@Ef@M\\S~@y@v@uBhAeBzBiBnB{A~CgBfB}@|AWtBOj@I`@MN?h@[vAcBf@UpAc@jA?fDNxAXzBt@~@d@bA\\hBTnCXbCh@vAf@hEnBRBpClAtCcGlBqFbCwHbAgCfAaDzA_FvBqGtCmI^{@zBaC\\u@@]BmCAoAAWaAKeEaAkEsAwBkAcAgAqB{@eIwBuCa@sAu@o@c@Au@r@g@nAo@`Ac@b@i@T_@UI[YoBgCc@_@u@e@_@e@Me@Fw@l@kD}CkJqAkDC[@MP{@h@gBRi@bBmCVw@";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "25") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").show();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("korlm");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "dgpi@}`d`TKT@DFHPJz@kBPQPEvBcEdBeDGCFBr@sAvAgDp@qBrB}IfAqEn@sDT{BNwDIuGOmDUwBOsAKoAM?L?q@}JiAuRIiCIuFGuBW_G@yBZ_BZu@`@o@pAmA`BkAn@g@l@q@|@aBv@eC`AmDj@uDPqBXsENkEt@gJFgADiEG{JRuJN}ETaDT{BNu@d@cAl@y@fFsF^]t@u@dAoAnDcDrG}EbH{FhEiDbAy@jAoAtAwB\\aA|ByIdBoIJiA@{@AeAqA}Wc@kCOk@Qe@}@iB]g@i@i@oI}Ei@e@[a@O_@Mi@Iu@CoAVaCr@uDb@oBjA_EhAeDxAaDZi@|@gAt@o@bAi@dBy@XSXURYXo@TiAXqBNqBDu@TuCFaCLmCXiDPmAhCuKNu@b@gD@m@s@eIOuDg@aHCaAOsAE_AI]UqCkBgLy@yHw@mGiAaJ{BmPi@aD_@qBSKMOISAU@ODOHKTOUoAiBwL{AyIMFGWFVLG_B{IoAoGkCkLm@kD}AeNgAqKGcBUsBCiA@_ADe@Xo@H[f@mD?SAQWe@E[BKHMLGPET@PAREPQpNu`@@IAKmAcCGa@?YF[LUHKJITITEV?`@FpAUJO`AgCr@{BlDqJf@kBt@qDf@qCvBqKn@gCpEmLRo@GYFXxCeIBYCSqAe@SUEQAW|@}B";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "26") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").show();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("korlmm");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "~bti@gb~`T\\_ATK`@EPDvBv@~DhBHVAh@{AtDQHSAwDqASDMHo@lAc@lAy@rBgA|Cw@nB_CfGKZ_@lBm@`DmApF_@|By@bEmArDgA~Cu@fBiAdD{@|BSjB@HFNk@^GPk@~@sEfM{H`Um@nAi@vAOn@WpB@VDJZVLRDZCd@IZy@`CKv@BjBfArJ`AnJn@fFZ~A~B|J^nBdAxETv@XnBxAxIBd@~BnO`ArHzAvK^dBPfBnBvOlBlPn@rDx@tF^rDv@`KZlFL~@FtA`@tE?`Aa@dEe@|B}A`Gm@dDSrBa@lJeA`JSfAQh@]j@[Vi@\\yCvAi@d@mA|AWb@eAbC[n@m@dBeApDiBhIKtAN@OAGzAFdAJn@Vl@d@j@dAt@~CfBv@ZrA`A^^\\l@jAfCb@rBPxADp@jA~V@j@G|AKv@cA`FoCfLm@|AS`@eA|AeAdAyDbDaDlC{KnI_BvAqD|CsCbDuCvCi@`@oAbBc@hAs@dII|BQzHElHHvEIrEu@pL]pG_@pF}@bFm@lCiA~C[t@q@|@u@r@gBhAoAhAe@v@Wn@]tAGx@?l@LjCJlDN`KXpEDdBh@tJb@|Gh@lGV~BPbDFfGMxDW`Dg@tCqAxFsBjIc@vAg@nAc@fAeAtBsFlKaBrD_BvF]VIDK?a@EHk@Le@`DkGQKGIAEJU";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "27") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").show();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("kor7");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "r~li@oyeaT`Rn@SoDo@{QAe@Be@W}FIaAOoAeAkHaCqMe@eBgIoX_DuKo@}BW_AEc@?YHId@Iz@FnI`AxIh@fCTvDt@rDv@~L~BtCXjEXzDJlCAhDg@tDs@bAYxBkA|BiAzAu@pAq@lDmBf@a@x@aAh@c@f@A~@PxEhAr@Ll@BXDXATCRMr@c@LKh@Kt@Et@@tACpCLb@FfAVn@?n@Gv@Ch@N`@RZThB`APBV?bCGhAL|@^vAx@^HNCVIx@YVEV@x@\\\\X`@RnALtAFhAJhAHf@TNl@?z@BTHPrApAj@j@`@b@H\\BTIn@CRENEVAj@Bh@LfAd@fCXhAN\\V`@z@~@fChCNJh@PP@XA|Ae@z@S`@ArCNtGf@f@Fx@NzDxA|AXt@RnAr@v@NtAA`AC~A@fEPxAAxDYpA@p@@tCPdELhCL|BZnBb@`AHrDK`BFn@Nb@NhGdD`H`Dh@NfARvABlB?~AAp@CXD?NaKhImE|CeLxIiDnCkAn@c`@l^UNWLwBp@UJ[T}A~Ak@h@cHfFcIfGmBhAaC~@eBv@{SzH}Bv@aJlDeDjA{C|A[RaC`Ca@d@sQpYaClDjALtAHjEd@tCT`D^zHj@C`@uBOuJ_A??mDYuI{@}DzFa@r@e@j@uNlMuAfBe@z@}@nCuCnNe@tC]zEMlCA|F`HEfCOvB]fLyArHcApHu@pLTzQp@vNh@f@jRe[XiM\\iMJsCN{C?gIBkINgDF{AHo@DQXbFhW|@xFAnDUtGGzAOZIPjDtD~^h^RFz@f@ZEX?HBXZTr@Db@H\\ZZp@r@^l@pGxG";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "28") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").show();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("kor77");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "f~li@}veaTdAm@hHRzCJlBHPk@?y@{@{QO}Fa@aGmAoJ{AmIkBiIePgj@~KrArKh@hYvFfLjAfEDbBBbBWzIyA`KsF`EsBdDeDxIrBpBHdCiAxHEjDp@zBSxElBtE?t@VbDzAtBi@~@Fz@z@t@L|CRtBTr@TCfA\\nAv@x@jAv@ZbAQpCJnChAhEdCnDvAlAl@d@f@@hBUrC_@vHd@pD`@fElB|Bh@bCdAnFGnFXtH[nLZbCN|BVpBd@fAJpDM|ADp@LXLjGdDbH`Dl@RfANrAFpB?z@EXToBtBgEhDsE~CaLxIyDxCkDdC{CzCmGdGuOxN_EzA}CtC{GbFgIjG}AbAkBh@aCdAsSnHaCbAcJdDgDvAqCxAm@\\{BxBe@r@kAbBmAhBqC`FsCpEqC|D}@~A[b@aB`CqApBJPlAeBn@{@`ALzLpAdHl@dHh@Ja@ya@sD_BdC}A|Bg@v@_@d@wNjMwAlBi@~@c@nAi@`BiCfNk@pDY`EKnC?zFBfDD~CN~CIh@[\\c@Ha@ZKb@Rn@v@Nr@MRVt@pClAbGnApGdAtGSvGK~DEVUDi@@gJcJUX_@Ca@`AeAbDa@|BJzA`@lAd@ZvGkAnFxNpJbW`EnKz@~@bNbF`^`MlHrBl@@RENMLW?SESqIyJ_JiJ";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "29") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").show();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();

                var map = new L.Map("kor8");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "~bti@gb~`T\\_ATK`@EPDvBv@~DhBHVm@~BaAhBwDkAs@JYXeCvGyC~H{A~D}@bEq@dEaA~DmAjGkBzFmFpNEpAYl@eArB{@`Cw@bCaFtN}F`O]hBSrBDJZVLRDZCd@IZy@`CKv@BjBfArJ`AnJn@fFZ~A~B|J^nBdAxETv@XnBxAxIj@tC~BvNNZPDNHJLFNBZGXh@VvGrBbC|@hBZfCV`H^nA`@fAn@x@p@jAvAfAdAjCjBbBr@NBhFDbAF~AZbABrE_@bCBvBLTDJFPVHvAH\\LZ~@hAFDNDb@BN?x@W|@_@x@a@fAuAJUH]NyAZo@VM\\BlCZh@?VAlBk@^S\\Wl@o@^qBLMNIL?f@NNJ`@p@r@dBXTd@RdDx@nA`@^PlHtIx@z@z@b@t@HfAFrBe@jBs@zDaCnC}@rB[LAEnFHfACLHf@n@|AdA`B|B`D|ElAjExAx@TzCv@`Cj@nC`@lALZA^Qj@]^e@z@uAh@}@p@u@l@Sn@AVB~@^lExBvJpF`An@f@`@JNBLD\\Eb@Sv@Gd@ATFVLJ^Tn@ThA\\xAZd@FlAH~GFvA{DRe@Xg@TSx@e@NGd@GbABXD\\HZNl@j@TNRHZBxBJ\\FtAf@RTFNHrAFVTd@VVrALTFp@b@hCbAZRl@h@XP^H~Ed@n@Nl@Th@VpAv@rB`A`BfArAjAdChBDLFpBHhAj@`A\\^bBrArBjAn@r@JPZz@lA|DR~ADv@Jv@\\`BP\\r@p@PTNd@b@nBV`@RNfA\\|@TzA[fAK~@FRDj@TXFVBjGFv@Id@Sp@s@RIPAX@NFRPx@jA`@Td@N`B\\z@LdA?^FPNRV`@ZvAP^Hr@?`BQ~@FlATb@L`A^TDV?d@E\\Ir@IRA~ANj@CZEVGl@a@v@q@j@[dAe@|A{Ap@w@`Aa@`@Id@?rBLf@?vBW`Gr@bD|@Ro@v@NpBPYzAtExCtGdAbAT~Ch@|B\\vAXz@FfCg@`@Qj@{ANGxJFnCLnFDbBDf@Cf@G`@KhBw@bBiALE`@ElAEbGGzFQbAI`BSjBa@n@ClA@pCU\\Az@CfDa@nIm@~KgAdEm@tAOhEYp@Gf@KvCiArA[b@ApCDJj@N\\TPZLx@Hd@@~AVxCfC|AdBt@`Bv@nCFtBAhARpBB|@Iz@UvACf@GhD@fCFnATnCHf@J^dAnB^`At@`CBPI~@BLPb@FZA`@QbACt@@PRz@LxANXTDL?pASfCC`BQJ@\\PfAn@l@h@FHFRJ^DXTdCX~Bb@vAb@dANVHHp@^hA`Az@ZZP\\d@Ph@@XAJIViFtCwA~@}ElCUTOVSd@Cb@Bb@LPJHLDH?fAa@h@Kd@Ah@Df@Lb@TPXp@z@fAx@FFHXARILON_@RaCRWFQF[XOXKd@HnCJhAlAfFHvAj@tAFZ?VIp@INMH{@Rg@XURY\\g@|@a@bAo@pAiA`BmDpGcAzBOv@MbAGPKL}@n@e@h@SZOb@?Nr@dD?\\CJMR{@l@IJGX@b@Fn@DVHRZn@rB`CLTLb@l@pCpCfKvA~BPj@D\\?Lq@~HMZIHkAb@cAb@e@ZON}AlBsA|B{@x@]n@iAjEA\\NpBXnCG\\GLa@d@k@f@u@z@]h@m@~Aw@lBkBvB_ApAyA`Cm@r@_B`ByCdCg@\\}Az@i@^[Zm@t@IPy@bChDn@p@Pn@Zh@d@RRlB~Af@b@@Dn@@t@H";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "30") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").show();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();

                var map = new L.Map("kor88");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "pmgj@yqg`TiBYCGuCcCSSi@e@o@[q@QiDo@d@kAZaAr@gA|@u@t@[rA_AxBcBzC_Dv@iA|@yAvAmBp@q@f@{@^{@v@oB`@q@h@m@|@y@\\g@DW?UWaCMkB?a@F[Z_AVoAXy@d@m@p@o@hAoBhAwAr@u@pAq@jA[POHUFm@l@}GEm@Ma@{AaCOo@Sm@ScAiA_Ey@wDISKWi@q@iAoAm@oAGYGo@Ac@FYV[l@]R]BQy@sD@[`@s@d@k@hAy@FSLaANy@Zs@rAiCvAgCt@wA~@qAfAgCj@kAh@i@p@a@\\M\\ELIHODy@Ce@o@{A?W@]oAeGSgCIgBZo@XWj@QfBMXE`@QPOFO@UQ]m@e@e@c@w@eAc@Ug@Mi@Ee@@i@JgA`@I?MEKIMQCc@Bc@Re@NWTU~EmCtA_A|BsA`B{@PODWEo@Yg@o@e@w@[mA_Aq@a@Ya@[q@k@kBIe@MmAWqCEYY}@m@i@gBaAUAwAPqB@i@D}@NM?UEOYMyAS{@AQ?[T}A?c@EYSk@DoAw@iC_@_AeAqBK_@Ig@KaAK{AEaACaFDmALaAN_AH{@C}@U_CB{@EcBE_@s@aCs@_B{BcC}BkBwAUm@Cy@I[MUQO]Ki@sCEi@DkATwClAw@JqBJ{CVq@L_Fl@J^QFPGK_@gKbAoIl@gD`@yADqCTuB?_@D}@V_AN{@J_AF{FPcGFmADa@DYLm@b@YNOLiBv@s@P}@DcBEoFEoCMwADqCIsAAkADk@zAa@Pk@J{AZ{@Gg@O}HkAOEgCi@iC_@sAYgAu@oD{ByF}ASC_@KcBUQ?_CYoBZ{CSe@?a@H{@Z{@|@Qj@gAn@eAd@k@Zc@`@aAp@WF[Dk@B_BOS@s@H]He@DW?UEa@M_@Qc@MyAYs@Ce@Bc@Hi@Da@AsAU[?SMYUY_@g@MeA?{@Mo@MwA_@a@Uo@_A[]YIg@?OJ[^a@X_@Nq@FsB?wCGq@K_A[_AGgAJ{AZWEg@IeAc@SOW]m@iCmAwAOY]eBKw@Ew@S{AYeAKUcAaDWa@c@c@{@c@A@@AsD}BQUa@gAGkAIyBiAi@gAw@yAuAqA}@{BkAqAw@}Am@a@EaAEa@G{B[g@Mw@_@w@e@w@_@wBoAa@Ga@Cc@IYa@Sa@KoBGQQUi@UuAa@oBGw@Qk@k@e@Y_B[o@@q@XkAx@cAhC{@bCaHIsBQ_Ba@aCw@]WIWBe@ZsABe@I_@S[kA{@wDuBQOaAi@cAg@QZq@Ww@Ov@Np@VP[wCcB{@a@gC_A{@As@Tg@l@oB`D[`@k@Zw@PkAIoCa@sCq@iD{@eFeB}EmAi@k@yCwEo@}ASq@AkBBgEyBTmAVsAn@iDvBkBr@sBd@_AE}@Is@[aAeAmHuI_@QoAa@eDy@i@SW[q@_Bm@}@a@Qg@DMR_@fBq@t@aA^s@^q@ZaA@mC[]CWL[n@OxAUr@oAzAyB`Ao@Ps@COEGESUIPHQk@s@[eAEkACEYYUEwBMcCCsE^cACcDc@iFEe@Go@_@]OiA{@eAm@cAaAkA}AaCaBoAa@aH_@gCWiB[cC}@mCy@GNFOiCy@i@WKPOJQFS@SCSKMOISAU@ODOHKTOUoAiBwLkDsR}AkIkCeL]kBk@eEkBeQ_@wDGoBUgBCiA@_ADe@\\q@BM\\aCPu@@SAQkA_BgB}BsBaDs@mBeBeFa@{Cw@oH_@uF?cBBgATwBHk@ZeADu@i@cGe@mCUwDYaB@a@DMTWf@ZtHzGvCdDlEvE`CbCpA`BlCzCr@h@b@Lb@A`@C^J\\@j@WpHgTdAsDp@kExB}Jt@wCt@sBrAoDd@kAfD}Ih@kAGeAqAg@S}@x@eC";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "31") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").show();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();

                var map = new L.Map("korf1a");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "~rui@uio`TbC}AoB{FkLfETd@PRZRjAj@^`@vAdCzA`BTZx@|@|@jAlAlB^z@fBfF^vAV~AJlANx@Lb@NPb@^nB~@t@b@zCxBr@`@lBl@|@\\vAp@fC|At@TjBNhAFARsD[_@Ia@Qm@a@sBiAeDmA_A[gAu@[[[WmAw@w@a@gBy@[S]a@Sc@WwAmDIKrBq@fGO|@c@|B[`EQpEe@lE]lAWhAEAD@S|AGvCBRqB@eABCBCrISfEUbCCd@If@WfAoBxEcAZiBb@MHU`@ENMbESfAa@rB_@~@a@v@KL_@\\AFCFhLxDRZBAC@vCjEfClDh@~@z@nBRXTPpCrA|DnD\\VlAr@LPP^Lf@DHZJ~CTpFv@|A\\|AR";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "32") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").show();
                $("#korf1b").hide();
                $("#korf1bb").hide();

                var map = new L.Map("korf1aa");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "tuvi@mui`T|@DlHb@}@~C_A|EwAtIEz@]jCyAlFy@rDk@hDiAlJGhBs@jHIVG^ItBYhCW`By@hE}@|CeB`ESb@uApBIXQfCMbA@r@N`Dr@hK?hB~BPl@J^NxF`Cx@`@`Al@n@Vn@PXLb@ZjAp@`@X`A\\zBnAh@b@hA~Aj@p@^XTFtBCxBMjC@XAp@@dCTjB\\RArAe@`AUlC}@~AS`CKdBBf@Hd@DRC~@Or@O\\Et@?tAFLBrAd@jANrHXvAAh@BlBXn@Xt@N|E^|BJr@GRGjHyCNOPaD@cBDi@Fe@Tw@BGHC`@?jK\\p@CdDuBVIjBYhFa@b@IXIt@YdAs@ZM^EpAGj@GbEcAnNcAp@If@C^?VBTHdAx@VJhA^t@PhH`A|AZ^Lv@Ll@F|@?ZD|Ad@JaAJaBRiAZqATqAJkFLsCXuBLs@Lg@n@cB`@}@h@{Ax@mC\\uAz@eFL]jBmDj@mA\\m@TUdAy@zCwBlCqBNSpBmEnByCtA{Bz@mAn@{@`@WzAo@Ia@dAOD`@j@GRGLQPm@t@sBHEFAlBJ\\AtCk@z@YpAi@GSFRTK~BiAtBkAlBcANKJYQeI@m@g@SYQi@e@c@q@aA{Ge@qBw@{A[QOOw@eAoCwCk@g@g@]YMa@MaBGg@Bm@H{AxAo@b@m@P]Fe@Bm@Ae@Mk@UuFaGoH_JwFgHqFiGc@q@[u@C}@?q@Hk@J_@~AaELc@C[EOOWiAm@eBq@_Bk@wKkEsGcCqKwC_IqAUBa@P[FS?_@IWUKWSOYMUGeNaBsBS_C]{RoAkASsAa@mE{AuMsFgAYyAi@uB}Aq@a@gAe@qCk@aAGuEEoF@eDLw@LH`BFbC?nBExBOnBYnBc@tBEtESbAuA|E[dA_CjD}@~AwAdEkA|Eu@`E_@nAa@f@_A|@_@d@q@fA}@dBy@lAgAp@i@LgAf@qAxAoAnAUd@_BlCy@hBUtAKhASnASj@{@|@u@RmAr@g@lA]rAmHc@cAEwASqDa@mDi@oC_@[KEIMg@Q_@MQmAs@]W}DoDqCsAUQSY{@oBi@_AgCmDkDgFiLyDG@IEAEBKJAHF^]JM`@w@^_A`@sBRgALcEDOTa@LIhBc@bA[lAuC`@cAVgAHg@Be@TcCRgEbA?DUFaGXABaAC?rAACSFwCR}AViA\\mAd@mEPqEZaEb@}BN}@p@gGMCE\\D]LBJsBlDHUsBk@wBi@gB[F]@e@wBh@EOg@Uc@gBkCmA}A_CqCcBoCOOy@]o@c@g@m@Q[yAaEUy@o@oAFKp@jAxAfE~@rBPRZRjAj@^`@fAnBnBuAn@c@";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "33") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").show();
                $("#korf1bb").hide();

                var map = new L.Map("korf1b");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "~rui@uio`TbC}AoB{F}LnEKQyAaEUy@o@oAl@aBlBkGp@sANc@`@oBfAaEjAyDdBgFzAeFt@}CtBoHLW^YpAo@^KVOtAwBl@m@nAkBFq@CU@sAEu@_@aAQ]SeA@q@WgCQg@KGy@EgAN{@^QLW@a@E}DqAsAi@b@qAt@}AYIgE}@{Bo@eBm@q@[c@_@k@}@oAmAiAEiAPuE^wBTcBZsA^_Bl@_Dt@gATe@FsCTs@eIOuDg@aHCaAOsAE_AI]UqCkBgLy@yHw@mGiAaJ{BmPi@aD_@qBSKMOISAU@ODOHKTOUoAiBwL{AyIMFGWFVLG_B{IoAoGkCkLm@kD}AeNgAqKGcBUsBCiA@_ADe@MSMKKAwBL}L^uMf@oTvAmBHwLx@_MfAgDTmFNs@DmIP{BH";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "34") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").show();

                var map = new L.Map("korf1bb");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "|yni@ojy`T{CJRbDB@CA\\tGs@Ds@uL?GBCn@EFIf[_AlQwAtWgBtN{@l^qA\\EVOf@mD?SAQWe@E[BKHMLGPET@LNDR?LCPQhAOr@QfBHNLHVHRC^SNCnMg@pDIpEQhRk@~CAjDBL@HDNNRHj@F~FAXDNHZd@JXBVAj@KvA]fCq@tD]f@a@l@sBlCkCfEiDtGSZcAxBsGtMy@nB[vAIl@IrEGpESjJEh@a@jCoAbDKPlIJxRAl@IhCm@h@Wh@_@lBeCfBgC`BqBzEgGNIdB_BbAc@f@IjBSrAC^D|Ab@n@TvA|@FCL@FD@HCHKFMfIStAkBhJ}BdMkB`IU`BOvEcCCsE^KnBQH_At@mDvBaNdG}Ad@[Fg@DoE`@sARsBNsGDgBDgBN|@pHn@rDx@tFZtCz@~KZlFL~@FtA`@tEx@InBU~D{@dBk@bCo@pBYfIaA`A@n@Tp@b@\\h@j@|@b@^p@ZdBl@zBn@fEjAJBTCHFCNMHKZWl@_@|@BLLHj@R|DpAb@JTGPMz@_@fAOx@DJFPf@VfCFp@@h@FZP\\^`ADt@ArABTGp@oAjBe@z@}A|Bq@RwAb@_@XMVuBnHu@|C{AdFeBfFkAxDgA`Ea@nBOb@q@rAmBjGYh@OVBRp@jAxAfE^x@jLiE|BpGgC|A";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
			} else if (type === '') {

				$('#default').hide();
				$('#map').show();
				$('#maps').hide();
				$('#mapss').hide();
				$('#kor2').hide();
				$('#kor22').hide();
				$('#kor3a').hide();
				$('#kor3aa').hide();
				$('#kor3b').hide();
				$('#kor4').hide();
				$('#kor44').hide();
				$('#korf2a').hide();
				$('#korf2aa').hide();
				$('#korf2b').hide();
				$('#korf2bb').hide();
				$('#kor5').hide();
				$('#kor55').hide();
				$('#korf4b').hide();
				$('#korf4bb').hide();
				$('#korf4a').hide();
				$('#korf4aa').hide();
				$('#korf3').hide();
				$('#korf33').hide();
				$('#kor6').hide();
				$('#kor66').hide();
				$('#korlm').hide();
				$('#korlmm').hide();
				$('#kor7').hide();
				$('#kor77').hide();
				$('#kor8').hide();
				$('#kor88').hide();
				$('#korf1a').hide();
				$('#korf1aa').hide();
				$('#korf1b').hide();
				$('#korf1bb').hide();
				var map = L.map('map').setView([-6.996667, 110.416664], 13);
	var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 20,
		zoomControl: true,
		attribution: '&copy; Trans Semarang | <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);
	map.fitBounds(polyline.getBounds());
}
			})
		});
	</script>

@endsection