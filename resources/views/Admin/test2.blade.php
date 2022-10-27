@extends('master.admin_layout')

@section('content')
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
	 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</head>
<body>
	 {{-- Section 3 - Maps & Route --}}
	 <div title="mapsandrute" style="display: flex;flex-direction: column;justify-content: center;align-items: center;padding: 0px 0px 80px;width: 100%;height: 1206px;background: #AF2330;">
        <div title="headinfomaps" style="display: flex;flex-direction: column;justify-content: flex-start;align-items: flex-start;padding: 80px 120px 156px;gap: 80px;width: 100%;height: 524px;background: #1D2939;">
            <div title="infotext" style="display: flex;flex-direction: column;justify-content: center;align-items: flex-start;padding: 0px;gap: 20px;width: 800px;height: 208px;color: #FFFFFF">
                <div title="headinfo" style="width: 800px;height: 92px;">
                    <p style="font-weight: 500;font-size: 24px;line-height: 32px;margin-block-start: 0em;margin-block-end: 0em;margin-bottom: 0em;">TS.MAPS</p>
                    <p style="font-weight: 700;font-size: 48px;line-height: 60px;margin-block-start: 0em;margin-block-end: 0em;margin-bottom: 0em;">Route & Corridor Info</p>
                </div>
                <p style="font-weight: 300;font-size: 24px;line-height: 32px;margin-block-start: 0em;margin-block-end: 0em;margin-bottom: 0em;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit orci condimentum natoque elit amet mauris augue sed nunc. Consequat tincidunt risus nulla viverra. Massa sollicitudin dui adipiscing massa. </p>
            </div>
        </div>
        <div title="headmaps" style="display: flex;flex-direction: column;align-items: center;padding: 0px 120px;width: 1440px;height: 758px;background: #AF2330;">
            <div title="maps" style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;gap: 2px;width: 1200px;height: 758px;/*background: #F9FAFB;*/border: 1px solid #98A2B3;box-shadow: 0px 4px 12px rgba(29, 41, 57, 0.12);backdrop-filter: blur(10px);border-radius: 20px;margin-top: -156px;">
                <div title="actionmaps" style="display: flex;flex-direction: row;justify-content: space-between;align-items: center;padding: 40px;width: 100%;height: 156px;background: #1D2939;border-top-left-radius: 20px;border-top-right-radius: 20px">
                    <div title="headeraction" style="display: flex;flex-direction: column;justify-content: center;align-items: flex-start;padding: 0px;gap: 4px;width: 295px;height: 76px;color: #FFFFFF;">
                        <p style="font-weight: 300;font-size: 24px;line-height: 32px;margin-block-start: 0em;margin-block-end: 0em;margin-bottom: 0em;">Select your preference of</p>
                        <p style="font-weight: 600;font-size: 32px;line-height: 40px;margin-block-start: 0em;margin-block-end: 0em;margin-bottom: 0em;">Route Corridor Info</p>
                    </div>
                    <div class="btn-group" onclick="toggleItems()" style="display: flex;flex-direction: row;align-items: center;width: 490px;height: 76px;background: #AF2330;border-radius: 8px;">
                        <button class="btn btn-tsm btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false" style="height: 100%">Pilih Koridor BRT</button>
                        <ul class="dropdown-menu dropdown-menu-lg-end"  style="width: 100%">
                            @foreach($result as $datas)
                            <li><a class="dropdown-item {{$datas['kor']}} hidden">Koridor {{$datas['kor']}} {{$datas['origin']}} - {{$datas['toward']}}</a></li>

                          @endforeach
                        </ul>
                    </div>
                </div>
                <div title="leaflet" style="display: flex;flex-direction: row;justify-content: space-between;align-items: center;width: 100%;height: 600px;background: #98A2B3;border-bottom-left-radius: 20px;border-bottom-right-radius: 20px">
                    <div style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;gap: 4px;width: 400px;height: 100%;left: 0px;background: #F9FAFB;border-bottom-left-radius: 20px;">

                    </div>
                    <div class="container bg-dark" id="map" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
                </div>
            </div>
        </div>
    </div>
</body>


	<script src="../../../../js/Polyline.encoded.js"></script>
    <script>
      	var map = new L.Map('map');
		L.tileLayer(
			'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
			{
				attribution: '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
				maxZoom: 18
			}
		).addTo(map);

		// var encoded = 'pdpi@gcd`TKbA~@f@TEFHPJz@kBPQPEPYdBiDxCyFvAgDp@qBrB}IfAqEn@sDT{BNwDIuGOmDUwBOsAWkDe@aHiAuRIiCIuFGuBW_G@yBZ_BZu@`@o@pAmA`BkAn@g@l@q@|@aBv@eC`AmDj@uDPqBXsENkEt@gJFgADiEG{JRuJN}ETaDT{BNu@d@cAl@y@fFsF^]t@u@dAoAnDcDrG}EbH{FhEiDbAy@jAoAtAwB\\aA|ByIdBoIJiA@{@AeAqA}Wc@kCOk@Qe@}@iB]g@i@i@oI}Ei@e@[a@O_@Mi@Iu@CoAVaCr@uDb@oBjA_EhAeDxAaDZi@|@gAt@o@bAi@dBy@XSXURYXo@TiAXqBNqBDu@TuCFaCLmCXiDPmAhCuKNu@b@gD@m@AWq@mHOuDg@aHCaAOsAE_AI]UqCkBgLy@yHw@mGiAaJ{BmPi@aD_@qBSKMOISAU@ODOHKTOUoAiBwL{AyIMFGWFVLG_B{IoAoGkCkLm@kDeC_U_@wDGcBUsBCiA@_ADe@Xo@H[f@mD?SAQWe@E[@[^Ub@?n@ApAoDtDqKtDqKt@_CmAuCoKwD}QkGo@aI]kCo@iHCe@VO\\FpCzBpXzYjBxB`AVl@Cf@@j@Ch@Q~H}T~EkVx@aDpEmLRo@??xCeIBYCSqAe@SUEQAWzA}DTK`@EPDn@TVHVBNWNa@`@_A~@aCbCcG`@kAnEyKfAuCDAtCyHd@mD^oB^uArA{DtHkVLm@X_A`FyNp@wBfEiM~@aCdAgCtDcHnFuJlA_C|GwLpG{Kf@cAnAsDn@cCtCwOrBuK|Gy]p@{CtDcSfAoFvCyPlAyHT}@`Ka[~EoOrD{KhC}HbCaHpAcDzAeFv@uClBgI\\uAj@qC|AwGWIqE_A_@lAy@xCKHMBMC';
		// var encoded = 'jqyi@etkaT}A]b@{BTyA\\GXWFW|@ZlIhBwCjMaC~Jy@~CiBtFwAtDuB~Fo@vBuGvRmCtIiG~Q_EfMSt@UtAi@bEeAlF_@|BeAtFgCzM_Mho@uBvKU`BcChMe@`B{@tCSf@m@nAgDtFoIrOaA|AeApBkFjJeCxE{@fBiAhCo@fBcM`_@s@nBYh@uHjVsAzD_@tA_@nBe@lDuCxHAFcArCi@lAcDlI_EpKyAfE~DhBHVAh@{AtDQHSAwDqAoCeASUEQAWzA}DTK`@EPDvBv@~DhBHVAh@{AtDQHSAyDiAg@Ta@z@u@nBuBxFmA`DsAzDg@`B]|Ai@rCw@hDc@vBa@zBsBjHe@tAc@pAq@|Aa@tAsAhDU|@I|@[bAs@rAcAFo@Sg@a@a@i@wAe@mNsE_KoDY_BOsBy@{He@}FDc@ZGbBnAlKjKpDbE|JvKz@x@t@Eh@DfAVP`@@h@WnAq@hAqFbO}DbLsCbHe@tBY|Bl@z@Pb@Cb@{@rBc@hBFpAr@lGnAtLp@jGrA~FpC~LjBpKfFh\\zB~P^dBPfBnBvOlBlPn@rDx@tFZtCz@~KZlFL~@FtA`@tE?`Aa@dEe@|B}A`Gm@dDSrBa@lJeA`JSfAQh@]j@[Vi@\\yCvAi@d@mA|AWb@eAbC[n@m@dBeApDiBhIKtAN@OAGzAFdAJn@Vl@d@j@dAt@~CfBv@ZrA`A^^\\l@jAfCb@rBPxADp@jA~V@j@G|AKv@m@xCgB|H}@pDm@|AS`@eA|AeAdAyDbDaDlC{KnI_BvAqD|CsCbDuCvCi@`@oAbBc@hAs@dII|BQzHElHHvEIrEu@pL]pG_@pF}@bFm@lCiA~C[t@q@|@u@r@gBhAoAhAe@v@Wn@]tAGx@?l@LjCJlDN`KXpEDdBh@tJb@|Gh@lGV~BPbDFfGMxDW`Dg@tCkAjFyBxIc@vAkAvCeAtBsFlKaBrDgDlL[`BQATeCVuBMAHk@Le@`DkGQKGIAEJU';
		var encoded = 'tgoi@sm~`TDt@bF[XDdBHKMGMe@aD}@aBmB{Ca@sAkB}CAUX_@~AcAWy@aCuEM]C[wIBgFHiWNmJNiC@iC?c@LeBAqKpIwM`Lw@l@_DtBwB`BU]bI}FPUd@c@dLoJhHuFhCgBv@Hj@?`@HnF?nKKhWQhFItIEWcAu@aBc@gA{GqNm@{Ae@y@iA_CaDkHoBiEES@]DORe@~@iAFGLC|As@j@Kh@BTBVLJHVZxMlWzDhHj@nAr@nAv@rAdFnJrHGjAGv@Jv@WZq@IgBKuHFu@DKHKb@ShA@lBCzCOxAOlEq@bCUtImAjFo@jDUjBA~EJvLd@nDDhJXzBBlBJvNd@fI`@bDDjBFjDNzKn@v]hA`FVbJj@hCXdB^PHtEnAnBv@bBf@hAH`BBdBA`@EdKcBv@El@@NDVJPPBL`@Zx@t@^Pz@LrAFb@?bCOdEOp@BnFtBbBf@^FlAJjCDd@JPNR`@Jn@HbBR`CHLX|@h@~@BJfBlCr@|@hBdBl@p@dB`CHGD?VZB?C?W[E?IFt@fAxBdCz@fAdBnBpIfI`FbF^b@LDf@j@bC|Cx@n@`CtA`Bv@j@PpCf@zDf@r@?~AHtCHJ_@NZ\\?~CL`APJLnBLj@@vDZ~C^|AXLFBHGVKBuAQqA[e@G{@IARmAOlAN@S_CUqBEyHi@wCMcDYqC_@gCa@cCk@cDyAkAq@m@Uw@g@e@U]KqCUaALuHnAiFdAuAR_KfBsDr@oFv@uI~A}A^{@b@c@`@]b@S\\c@jAU`@YVu@b@oAh@ORh@r@WIUO}@Z';

		var polyline = L.Polyline.fromEncoded(encoded, {
            color: '#b71c1c',
            weight: 8
        }).addTo(map);

		map.fitBounds(polyline.getBounds());
    </script>
</body>
@endsection'

