@extends('header_footer')

@section('content')
	<div class="main"><!-- start main -->
		<div class="container">
		<div class="row">
			<div class="col-xs-5">
			</div>
			<div class="col-xs-3">
				<div class="page-header"> 
					<h1>Pendaftaran Lahan Parkir</h1> 
				</div>
			</div>
			<div class="col-xs-4">
		</div>
		</div>
		<div class="row">
			<form class="form-horizontal" role="form" method="POST" action="{{ url('/parkir/save') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group">
					<label class="col-md-4 control-label">&nbsp; </label>
					<div class="col-md-6">
						<input id="op-1" type="radio" name="jenis_daftar" value=1 checked="checked">
						<label for= "payment1">Lahan Pribadi</label>
						&nbsp; &nbsp; &nbsp; 
						<input id="op-2" type="radio" name="jenis_daftar" value=2>
						<label for= "payment2">Rekomendasi Perparkiran</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label"><h4>No. KTP</h4></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="id_pemilik" placeholder="Masukan No KTP Anda" value="{{$nik}}">	<!-- dari cookies -->
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label"><h4>Alamat</h4></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="alamat" placeholder="Alamat lahan parkir yang ingin didaftarkan">
					</div>
				</div>

				<div class="form-group"> 
					<label class="col-md-4 control-label"><h4>Kecamatan</h4></label> 
					<div class="col-md-6">
						<select class="form-control" name="kecamatan">
							@foreach ($kecamatans as $kecamatan)
								<option>{{$kecamatan->nama_kecamatan}}</option>
							@endforeach
						</select> 
					</div>
				</div>

				<div class="form-group"> 
					<label class="col-md-4 control-label"><h4>Jenis Parkir</h4></label> 
					<div class="col-md-6">
						<select class="form-control" name="jenis">
							@foreach ($jeniss as $jenis)
								<option>{{$jenis->jenis_kendaraan_parkir}}</option>
							@endforeach
						</select> 
					</div>
				</div> 

				<div class="form-group">
					<label class="col-md-4 control-label"><h4>Lokasi Lat Lng</h4></label>
					<div class="col-md-6">
						<div class="col-md-6">
							<input type="text" class="form-control" name="lokasi_lat" placeholder="(Optional) Latitude Google Maps">	
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" name="lokasi_lng" placeholder="(Optional) Langitude Google Maps">	
						</div>
					</div>
				</div>
				
				<div id="inputan-1" class="form-group toHide" >
					<label class="col-md-4 control-label"><h4>Luas</h4></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="luas" placeholder="Dalam meter persegi">
					</div>
				</div>
				
				<div id="inputan-2" class="form-group toHide" >
					<label class="col-md-4 control-label"><h4>Tarif</h4></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="tarif" placeholder="Tarif yang anda inginkan untuk sekali parkir per hari">
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-6 col-md-offset-4">
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection