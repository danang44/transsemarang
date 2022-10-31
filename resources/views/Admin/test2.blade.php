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

	<script src="../../../../js/Polyline.encoded.js"></script>
	<script type="text/javascript" src="../../../../js/polyline.js"></script>
	{{-- <script src="./resources/js/Polyline.encoded.js"></script> --}}
	
</body>
@endsection

