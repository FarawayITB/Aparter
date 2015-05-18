
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
				      <a class="navbar-brand" href="{{ url('/admin/dispenda/notif') }}"><img src="{{ asset('/images/logo.png') }}" alt="" class="img-responsive"/> </a>
				    </div>
				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="menu nav navbar-nav">
				    	<li><a href="{{ url('/admin/dispenda/notif') }}">Lihat Notif</a></li>
				        <li><a href="{{ url('/admin/dispenda/showsewa') }}">List Pembayaran</a></li>
				        <li><a href="{{ url('/admin/dispenda/retribusi') }}">Perubahan Retribusi</a></li>
				      </ul>
				      <h4 class="text-right">Selamat datang, {{"Admin Dispenda"}}</h4>
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
<div class="main"><!-- start main -->
<div class="container">
	<div class="row">
		<div class="col-xs-3">
		</div>
		<div class="col-xs-6">
			<div class="page-header" style="text-align:center"> 
				<h1>Kirim Pemberitahuan Retribusi</h1> 
			</div>
		</div>
		<div class="col-xs-2">
		</div>
	</div>
	@if(Session::has('error'))
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Error!</strong> {{ Session::get('message', '') }}
		</div>
	@endif
	
	<div class="row">
		<form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/dispenda/ubah') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
				<label class="col-md-4 control-label"><h4>Subjek</h4></label>
				<div class="col-md-6">
					<input type="text" class="form-control" name="subjek" value="Retribusi">
				</div>
				<div>
					<h4><span class="label label-danger">{{ $errors->first('luas') }}</span></h4>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-md-4 control-label"><h4>Isi</h4></label>
				<div class="col-md-6">
					<textarea class="form-control" name="isi"></textarea>
				</div>
				<div>
					<h4><span class="label label-danger">{{ $errors->first('harga') }}</span></h4>
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
</div>
</body>
</html>