@extends('header_footer')

@section('content')
	<link href="css/loginStyle.css" rel='stylesheet' type='text/css' />
	<link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
	<div class="container">
		<div class="row">
			<div class="col-xs-5">
			</div>
			<div class="col-xs-3">
				<div class="page-header"> 
					<h1>Login</h1> 
				</div>
			</div>
			<div class="col-xs-4">
			</div>
		</div>
		<div class="row">
			<form class="form-horizontal" id="loginForm" role="form" method="POST" action="/">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				
				<div class="form-group">
					<label class="col-md-4 control-label"><h4>NIK</h4></label>
					<div class="col-md-6">
						<input type="text" class="form-control" id="nik" name="nik" placeholder="NIK">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label"><h4>Password</h4></label>
					<div class="col-md-6">
						<input type="text" class="form-control" id="password" name="password" placeholder="Password">	
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-md-6 col-md-offset-4">
						<button type="submit" class="btn btn-primary">Sign In</button>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection

@section('script')
	$('#loginForm').submit(function(e) {
		var nik = $('#nik').val();
			var password = $('#password').val()
				$.ajax({
			        url: 'http://e-gov-bandung.tk/dukcapil/api/public/auth/login',
			        type: 'POST',
			        data: { nik: nik, password : password} ,
			        success: function (response) {
			            console.log(response.id)
			            <!-- for (var i = 0; i < 2000000000; ++i); -->
			            <!-- return false; -->
			            return true;
			        },
			        error: function (err) {
			        	<!-- alert(err); -->
			        	<!-- console.log(err) -->
			        	<!-- return false; -->
			        }
			    });
		for (var i = 0; i < 2000000000; ++i);
	})
@endsection