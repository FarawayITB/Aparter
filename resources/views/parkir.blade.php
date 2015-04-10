@extends('header_footer')

@section('content')
	<form class="form-horizontal" role="form"> 
		<div class="form-group">
			<div class="col-md-1">
			</div>
			<div class="col-md-10">
				<br><br>
				<div id="googleMap" style="width:640;height:400px;"></div>
			</div>
			<div class="col-md-1">
			</div>
		</div>
	</form>

	<form class="form-horizontal" role="form">
	</form>

	<div class="container infoparkir">
		<div class="row">
			<div class="col-md-6" id="1">
				<h3><a href="javascript:;">Parkir ITB</a></h3>
				<dl>
					<p>Jl. Ganesha No.10 | motor dan mobil | Rp 2.000 per hari</p>
				</dl>
				<input type="hidden" id="lat1" value="-6.893075">
				<input type="hidden" id="long1" value="107.609116">
			</div>
			<div class="col-md-6" id="2">
				<h3><a href="javascript:;">Parkir Baltos</a></h3>
				<dl>
					<p>Jl. Tamansari No.1 | motor dan mobil | Rp 2.000 per hari</p>
				</dl>
				<input type="hidden" id="lat2" value="-6.898996">
				<input type="hidden" id="long2" value="107.608264">
			</div>
		</div>
		<div class="row">
			<div class="col-md-6" id="3">
				<h3><a href="javascript:;">Parkir Braga Music</a></h3>
				<dl>
					<p>Jl. Purnawarman No.1 | motor dan mobil | Rp 2.000 per hari</p>
				</dl>
				<input type="hidden" id="lat3" value="-6.914762">
				<input type="hidden" id="long3" value="107.609832">
			</div>
			<div class="col-md-6" id="id4">
			</div>
		</div>
	</div>
@endsection