<!DOCTYPE html>
<html>
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
	<script>
		var map = new L.Map('map');
		L.tileLayer(
			'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
			{
				attribution: '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
				maxZoom: 18
			}
		).addTo(map);
        var encode = "xtmj@giz`Te@AYdAeAE]WMQcAyBoB}E_@q@a@Yu@UMGSY_@iBEa@IWMMSKgEmAeAWkFyAaDw@mDc@wBS_C]gB[i@]M_@O{@GeAOs@]u@}@qAQc@Ks@Ek@Kg@]_@yD}@y@M[AcAd@kBrAwDvCqBdAyD~AyAr@mCdBu@\\{Bl@cCX{CJgA@{BCsBMsD_@gFw@yEy@kD_@mBGcA?_BFkALu@P{Bv@aAXyCl@]JiDl@eCPaADwBCiHJsCFsCNiBI}AYmAc@[OuHmEyAs@kAg@k@Sw@Si@IeFg@aKgAq@EaDCwCPwENwD?aEDuCD?n@iACOe@mDHyAAoFc@sNoAeDWiJ_AgGu@aBWmG}A_K_DqEkAsAYIKgJqB}GaBiFyAeDkAKZJ[kCiAcFiCkBgA}EyDo@e@s@a@_Ag@QAiAq@yAs@aDyAISiEoBwAg@cCi@oCYiBU}@EAJ@KkAMcBGo@DgAb@uBhBs@v@sAvBu@\\_Ap@eAl@oDbBuMvFwBlAy@Tg@?sAOWIgFu@[@wHkAsE_@wEO_FWcCSgBKYKuDa@oCe@iCm@{FkCWKkB_AcAUqAGo@F]DuHrAcDn@uCZwP~CyIpAsHxAuAj@mAbBKRUr@MZSVgAp@qBdASJ]H_@Bw@?]E[AuCw@oB]kAB_@AUDgBJMLSJSFMR}@z@iGdGgA|Am@jDs@tFg@pDe@rDEn@[|BK`@Ir@YxAEJMLOL{@VuBZa@LSP{@d@a@Vw@`@}ARwDn@cA`@uAf@k@JuA?oAPgBp@aAl@cA`AMD[FO?c@IQGSQS]G]?SP{ABk@Mi@S{@i@w@k@iAw@kAy@Oq@@o@Ve@d@k@bAsAbB{@d@yCZuLjAcAWeAa@kBiAwBy@gBgAiB{@cBi@yC}@}CsAgDwAmAe@cAQm@REXUXg@Vk@Bi@Qg@[a@g@iBq@_HyBoIiC}FeCeAqLw@aJ^]dEbDbCpCnHxHdGtGbCfCjAzAMz@SVi@HoBo@sFiBwHcCaFoBk@YSwAcB_QUsCi@cBgLaLmDiDiDgDaJ_J{DcEUTsE`AqBj@}ARqAFo@y@MyA?o@Dc@d@oBtAoEMOe@{@{AHyEGsBGKMGMe@aD}@aBmB{Ca@sA_BkCM[?KX_@pAw@B[EQqCmFI}@WgA_BgDkBeEiQm_@U_ABm@Xk@|@iATc@FYAWES]{@sC_NgAgEkAyDcCcJ_@eBaDaN_@yB_@oEGc@IYQO[O{GKgDDkBVsBn@oAp@y@r@QBM?EMB[LOrBsAdA_@|A]dCc@bAE|DCxB@\\GJKDGF]E_Hi@}Ni@iOwAaY{GQwCCmBEs@K";


		// var encoded = "d}li@_weaTd@mA|BFdGThCHjAF^?PPpA|XnBxf@LhGR|Cp@|DnDjOpBbIdBvFbApDbD~NZx@PT\\\\PXBtAB`@Hp@l@pP~[|AxCjAvBd@z@Rf@HJLDbC}@xB}@nC{@`AWr@GxGIvC@bDKzEm@tL}AnHaA`Hk@xTj@~Ld@lIb@^bIL~GwILcMLwl@|@sUZcADi@JQVzElVfAbGApDQzGMbBUr@lDpD`OtNpOhOf@R`@@@ZK^@d@fARrAn@p@z@dAdAlApCpCzCfDtD|DfF`GjEhEt@Dr@Ax@Rp@d@zFfCtEtBpAj@pCt@rBz@fG|CdCjA|@b@\\\\Lb@?vDe@~Ec@fD[n@_@l@o@j@o@d@w@z@eAh@Mr@?p@NdAlAVf@lAvBLdAIp@QzA?RF\\\\R\\\\RPPFb@HN?ZGLEbAaA`Am@fBq@nAQtA?j@KtAg@bAa@vDo@|ASv@a@`@Wz@e@RQ`@MtB[z@W\\\\[DKXyAHs@Ja@Z}BDo@d@sDf@qDr@uFl@kDfA}AhGeG|@{@TsA}AaE?GBMZOb@HDDpB~DlAb@^@jACnB\\\\tCv@Z@\\\\Dv@?^C\\\\IvAw@A]@\\\\l@YfAq@RWL[Ts@JSlAcBtAk@rHyAxIqAvP_DtC[bDo@tHsA\\\\En@GpAWpA_@^j@r@t@p@l@fAt@fD|AvBf@bDb@tDZx@C~CL?U`FTjAd@r@JxBJpCV|G~@`B\\\\x@@x@Ef@M\\\\S~@y@v@uBhAeBzBiBnB{A~CgBfB}@|AWtBOj@I`@MN?h@[vAcBf@UpAc@jA?fDNxAXzBt@~@d@bA\\\\hBTnCXbCh@vAf@hEnBRBpBz@tEhCDJrBhAlG~EjBfAbFhCjChAdDjAhFxAnNdDtCl@LC`H`BzBx@fGhBjA\\\\xD|@lBZdHz@zUxBdBJh@HjFd@|BLrA?`FKxNOt@@xESxCOlDDtCVhCVzC^tEb@h@JfB`@`Ab@dB|@rBrAjEbCrAd@bBZv@Dr@@hN]zGAbCSfLgC`AY`Bi@fAQbBEbBBxAHdEb@zB^fG`AxEh@tBLvBBhEIZCjB_@v@WzAu@bAa@hFeCbDmAbAi@rAy@~BmBtB}AfAe@ZIdASb@Gt@EpBBz@HfATxA`@`ALtBFzAMvBi@bCq@`Eu@~AMrBEdBPbBb@hCx@bDlA|AhAzCrDdAjArCbCX`@x@~AlAxCd@z@|A|B\\\\^|AxAx@h@lAf@d@Lr@NdEh@l@Nr@^fAt@nAfA`CnB|@f@n@Vd@HOzAIvAiBBiKc@oLLqGOyCKEg@IScA?";
		// var encoded = "jqyi@etkaT}A]b@{BTyA\\GXWFW|@ZlIhBwCjMaC~Jy@~CiBtFwAtDuB~Fo@vBuGvRmCtIiG~Q_EfMSt@UtAi@bEeAlF_@|BeAtFgCzM_Mho@uBvKU`BcChMe@`B{@tCSf@m@nAgDtFoIrOaA|AeApBkFjJeCxE{@fBiAhCo@fBcM`_@s@nBYh@uHjVsAzD_@tA_@nBe@lDuCxHAFcArCi@lAcDlI_EpKyAfE~DhBHVAh@{AtDQHSAwDqAoCeASUEQAWzA}DTK`@EPDvBv@~DhBHVAh@{AtDQHSAyDiAg@Ta@z@u@nBuBxFmA`DsAzDg@`B]|Ai@rCw@hDc@vBa@zBsBjHe@tAc@pAq@|Aa@tAsAhDU|@I|@[bAs@rAcAFo@Sg@a@a@i@wAe@mNsE_KoDY_BOsBy@{He@}FDc@ZGbBnAlKjKpDbE|JvKz@x@t@Eh@DfAVP`@@@h@WnAq@hAqFbO}DbLsCbHe@tBY|Bl@z@Pb@Cb@{@rBc@hBFpAr@lGnAtLp@jGrA~FpC~LjBpKfFh\\zB~P^dBPfBnBvOlBlPn@rDx@tFZtCz@~KZlFL~@FtA`@tE?`Aa@dEe@|B}A`Gm@dDSrBa@lJeA`JSfAQh@]j@[Vi@\\yCvAi@d@mA|AWb@eAbC[n@m@dBeApDiBhIKtAN@OAGzAFdAJn@Vl@d@j@dAt@~CfBv@ZrA`A^^\\l@jAfCb@rBPxADp@jA~V@j@G|AKv@m@xCgB|H}@pDm@|AS`@eA|AeAdAyDbDaDlC{KnI_BvAqD|CsCbDuCvCi@`@oAbBc@hAs@dII|BQzHElHHvEIrEu@pL]pG_@pF}@bFm@lCiA~C[t@q@|@u@r@gBhAoAhAe@v@Wn@]tAGx@?l@LjCJlDN`KXpEDdBh@tJb@|Gh@lGV~BPbDFfGMxDW`Dg@tCkAjFyBxIc@vAkAvCeAtBsFlKaBrDgDlL[`BQATeCVuBMAHk@Le@`DkGQKGIAEJU";
            console.log(encoded);
		var polyline = L.Polyline.fromEncoded(encoded, {
            color: '#b71c1c',
            weight: 8
        }).addTo(map);

		map.fitBounds(polyline.getBounds());
	</script>
</body>
</html>

