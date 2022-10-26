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
	<div id="map" style="width: 800px; height: 600px"></div>
    <script src="../../../../js/Polyline.encoded.js"></script>
	{{-- <script src="./resources/js/Polyline.encoded.js"></script> --}}
	<script>
		var map = new L.Map('map');
		L.tileLayer(
			'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
			{
				attribution: '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
				maxZoom: 18
			}
		).addTo(map);

		var encoded = 'pdpi@gcd`TKbA~@f@TEFHPJz@kBPQPEPYdBiDxCyFvAgDp@qBrB}IfAqEn@sDT{BNwDIuGOmDUwBOsAWkDe@aHiAuRIiCIuFGuBW_G@yBZ_BZu@`@o@pAmA`BkAn@g@l@q@|@aBv@eC`AmDj@uDPqBXsENkEt@gJFgADiEG{JRuJN}ETaDT{BNu@d@cAl@y@fFsF^]t@u@dAoAnDcDrG}EbH{FhEiDbAy@jAoAtAwB\\aA|ByIdBoIJiA@{@AeAqA}Wc@kCOk@Qe@}@iB]g@i@i@oI}Ei@e@[a@O_@Mi@Iu@CoAVaCr@uDb@oBjA_EhAeDxAaDZi@|@gAt@o@bAi@dBy@XSXURYXo@TiAXqBNqBDu@TuCFaCLmCXiDPmAhCuKNu@b@gD@m@AWq@mHOuDg@aHCaAOsAE_AI]UqCkBgLy@yHw@mGiAaJ{BmPi@aD_@qBSKMOISAU@ODOHKTOUoAiBwL{AyIMFGWFVLG_B{IoAoGkCkLm@kDeC_U_@wDGcBUsBCiA@_ADe@Xo@H[f@mD?SAQWe@E[@[^Ub@?n@ApAoDtDqKtDqKt@_CmAuCoKwD}QkGo@aI]kCo@iHCe@VO\\FpCzBpXzYjBxB`AVl@Cf@@j@Ch@Q~H}T~EkVx@aDpEmLRo@??xCeIBYCSqAe@SUEQAWzA}DTK`@EPDn@TVHVBNWNa@`@_A~@aCbCcG`@kAnEyKfAuCDAtCyHd@mD^oB^uArA{DtHkVLm@X_A`FyNp@wBfEiM~@aCdAgCtDcHnFuJlA_C|GwLpG{Kf@cAnAsDn@cCtCwOrBuK|Gy]p@{CtDcSfAoFvCyPlAyHT}@`Ka[~EoOrD{KhC}HbCaHpAcDzAeFv@uClBgI\\uAj@qC|AwGWIqE_A_@lAy@xCKHMBMC';
		// var encoded = 'jqyi@etkaT}A]b@{BTyA\\GXWFW|@ZlIhBwCjMaC~Jy@~CiBtFwAtDuB~Fo@vBuGvRmCtIiG~Q_EfMSt@UtAi@bEeAlF_@|BeAtFgCzM_Mho@uBvKU`BcChMe@`B{@tCSf@m@nAgDtFoIrOaA|AeApBkFjJeCxE{@fBiAhCo@fBcM`_@s@nBYh@uHjVsAzD_@tA_@nBe@lDuCxHAFcArCi@lAcDlI_EpKyAfE~DhBHVAh@{AtDQHSAwDqAoCeASUEQAWzA}DTK`@EPDvBv@~DhBHVAh@{AtDQHSAyDiAg@Ta@z@u@nBuBxFmA`DsAzDg@`B]|Ai@rCw@hDc@vBa@zBsBjHe@tAc@pAq@|Aa@tAsAhDU|@I|@[bAs@rAcAFo@Sg@a@a@i@wAe@mNsE_KoDY_BOsBy@{He@}FDc@ZGbBnAlKjKpDbE|JvKz@x@t@Eh@DfAVP`@@h@WnAq@hAqFbO}DbLsCbHe@tBY|Bl@z@Pb@Cb@{@rBc@hBFpAr@lGnAtLp@jGrA~FpC~LjBpKfFh\\zB~P^dBPfBnBvOlBlPn@rDx@tFZtCz@~KZlFL~@FtA`@tE?`Aa@dEe@|B}A`Gm@dDSrBa@lJeA`JSfAQh@]j@[Vi@\\yCvAi@d@mA|AWb@eAbC[n@m@dBeApDiBhIKtAN@OAGzAFdAJn@Vl@d@j@dAt@~CfBv@ZrA`A^^\\l@jAfCb@rBPxADp@jA~V@j@G|AKv@m@xCgB|H}@pDm@|AS`@eA|AeAdAyDbDaDlC{KnI_BvAqD|CsCbDuCvCi@`@oAbBc@hAs@dII|BQzHElHHvEIrEu@pL]pG_@pF}@bFm@lCiA~C[t@q@|@u@r@gBhAoAhAe@v@Wn@]tAGx@?l@LjCJlDN`KXpEDdBh@tJb@|Gh@lGV~BPbDFfGMxDW`Dg@tCkAjFyBxIc@vAkAvCeAtBsFlKaBrDgDlL[`BQATeCVuBMAHk@Le@`DkGQKGIAEJU';

		var polyline = L.Polyline.fromEncoded(encoded, {
            color: '#b71c1c',
            weight: 8
        }).addTo(map);

		map.fitBounds(polyline.getBounds());
	</script>
</body>
@endsection
