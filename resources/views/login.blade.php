@extends('header_footer')

@section('content')
	<div class="container" onload="checklogin/check()">
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
						<input type="password" class="form-control" id="password" name="password" placeholder="Password">	
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