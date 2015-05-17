
<!DOCTYPE HTML>
<html>
<head>
		<title>Aparter - Pemkot Bandung</title>
		<!-- Bootstrap -->
		<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
		{{-- <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet"> --}}
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		 <!--[if lt IE 9]>
		     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!--  webfonts  -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		<!-- // webfonts  -->
		<link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
		<!-- start plugins -->
		<script src="{{ asset('/js/jquery.min.js') }}"></script>
		{{-- // <script src="{{ asset('/js/bootstrap.js') }}"></script> --}}
		<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('/js/jenis_pendaftaran.js') }}"></script>
		<script src="{{ asset('/js/hoverakun.js') }}"></script>
		<script src="{{ asset('/js/dropdownselect.js') }}"></script>
		<script src="{{ asset('/js/maps.js') }}"></script>
		{{-- // <script src="{{ asset('/js/getLatLng.js') }}"></script> --}}
		<script src="https://maps.googleapis.com/maps/api/js?&libraries=places"></script>
	</head>
<body>
<div class="header_bg"><!-- start header -->
			<div class="container">
				<div class="row header">
				<nav class="navbar" role="navigation">
				  <div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="{{ url('/admin') }}"><img src="{{ asset('/images/logo.png') }}" alt="" class="img-responsive"/> </a>
				    </div>
				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="menu nav navbar-nav">
				        <li><a href="{{ url('/admin/dishub/notif') }}">Lihat Notif</a></li>
						<li><a href="{{ url('/admin/dishub/showParkir/1') }}">Lihat Parkir</a></li>
				        <li><a href="{{ url('/admin/dishub/showLahan/1') }}">Lihat Lahan</a></li>
				        <li><a href="{{ url('/admin/dishub/addLahan') }}">Add Lahan</a></li>
				      </ul>
				      <h4 class="text-right">Selamat datang, {{"Admin Dishub"}}</h4>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
				</div>
		<ol class="breadcrumb">
		  <li><a href="index.html">Home</a></li>
		  <li class="active">features</li>
		</ol>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-xs-3">
		</div>
		<div class="col-xs-6">
			<div class="page-header" style="text-align:center"> 
				<h1>List Pendaftaran Parkir</h1> 
			</div>
		</div>
		<div class="col-xs-2">
		</div>
	</div>
	@if(Session::has('success'))
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Success!</strong> {{ Session::get('message', '') }}
		</div>
	@endif
	
	<ul class="nav nav-tabs">
	  <li><h5>Sort by:</h5></li>
	  <li><a href="{{ url('admin/dishub/showParkir/1') }}">Daftar</a></li>
	  <li><a href="{{ url('admin/dishub/showParkir/2') }}">Disetujui</a></li>
	  <li><a href="{{ url('admin/dishub/showParkir/3') }}">Proses</a></li>
	  <li><a href="{{ url('admin/dishub/showParkir/4') }}">Selesai</a></li>
	</ul>
		
	<div class="col-xs-16">
		<table class="table table-condensed">
			<thead>
				<tr style="font-size:16px">
					<th>No. KTP</th>
					<th>Alamat</th>
					<th>Kecamatan</th>
					<th>Lokasi</th>
					<th>Jenis Kendaraan</th>
					<th>Status</th>
					<th>Luas</th>
					<th>Tarif</th>
					<th>Tenggat</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($parkir as $par): ?>
					<tr style="font-size:14px">
						<td><?php echo $par->id_pemilik ?></td>
						<td><?php echo $par->alamat ?></td>
						<td><?php echo $par->nama_kecamatan ?></td>
						<td><?php echo $par->lokasi ?></td>
						<td><?php echo $par->jenis_kendaraan_parkir ?></td>
						<td>
								<?php
									if($par->status==1)
									{
										echo "Daftar";
									}
									else if($par->status==2)
									{
										echo "Disetujui";
									}
									else if($par->status==3)
									{
										echo "Proses";
									}
									else
									{
										echo "Selesai";
									}
								?>
							</td>
						<td><?php echo $par->luas ?></td>
						<td><?php echo $par->tarif ?></td>
						<td>
							<?php
								if($par->tenggat == "0000-00-00")
								{
									echo '<span class="label label-danger">REKOMENDASI</span>';
								}
								else
								{
									echo $par->tenggat;
								}
							?>
						</td>
						<?php if(($par->status == 1) || ($par->status == 2) || ($par->status == 3)){?>
						<td>
							<form class="form-horizontal" role="form" method="POST" action="{{ url('admin/dishub/confirmParkir') }}" onsubmit="return confirmAct()">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="id" value="<?php echo $par->id_parkir ?>">
								<input type="hidden" name="no_ktp" value="<?php echo $par->id_pemilik ?>">
								<input type="hidden" name="alamat" value="<?php echo $par->alamat ?>">
								<div class="form-group">
									<div>
										<select name="status">
									<?php
										echo '<option value="1">Dihapus</option>';
										if(Request::segment(4)==1){
											echo '<option value="2">Disetujui</option>';
											echo '<option value="3">Diproses</option>';
											echo '<option value="4">Selesai</option>';
										}
										else if(Request::segment(4)==2)
										{
											echo '<option value="3">Diproses</option>';
											echo '<option value="4">Selesai</option>';
										}
										else if(Request::segment(4)==3)
										{
											echo '<option value="4">Selesai</option>';
										}
									?>
										</select>
									</div>
								</div>
						</td>
						<td>
								<div class="form-group">
									<div>
										<button type="submit" class="btn">Update</button>
									</div>
								</div>
							</form>
						</td>
						<?php } else { ?>
						<td>-</td>
						<?php }?>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
		<?php //echo $parkir->render() ?>
	</div>
	
	<div class="footer_btm"><!-- start footer_btm -->
	<div class="container">
		<div class="row  footer1">
			<div class="col-md-5">
				<div class="soc_icons">
					<ul class="list-unstyled">
						<li><a class="icon1" href="#"></a></li>
						<li><a class="icon2" href="#"></a></li>
						<li><a class="icon3" href="#"></a></li>
						<li><a class="icon4" href="#"></a></li>
						<li><a class="icon5" href="#"></a></li>
						<div class="clearfix"></div>
					</ul>	
				</div>
			</div>
			<div class="col-md-7 copy">
				<p class="link text-right"><span>&#169; All rights reserved | Design by&nbsp;<a href="http://w3layouts.com/"> W3Layouts </a></span></p>
			</div>
		</div>
	</div>
</div>
<script>

	function confirmAct()
	{
		var x = confirm("Apa Anda yakin?");
		if (x)
			return true;
		else
			return false;
	}

</script>
</body>
</html>

