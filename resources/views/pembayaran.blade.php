@extends('header_footer')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-xs-5">
			</div>
			<div class="col-xs-3">
				<div class="page-header"> 
					<h1>Pembayaran</h1> 
				</div>
			</div>
			<div class="col-xs-4">
			</div>
		</div>
		<div class="row">
			
			<form class="form-horizontal" role="form" enctype='multipart/form-data' method="post" action="/user/status">  
				<div class="form-group"> 
					<label for="no-ktp" class="col-sm-2 control-label"><h4>No KTP</h4></label> 
					<div class="col-sm-10"> 
						<input type="text" class="form-control" id="no-ktp" name="no-ktp" placeholder="Masukan NIK Anda"> 
					</div> 
				</div> 

				<div class="form-group"> 
					<label for="id-tempat" class="col-sm-2 control-label"><h4>ID tempat</h4></label> 
					
					<div class="col-sm-10"> 
						<div class="input-group"> 
							<div class="input-group-btn"> 
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> None 
									<span class="caret"></span> 
								</button> 
								<ul class="dropdown-menu"> 
									<li><a href="#">1123123</a></li> 
									<li><a href="#">2435235</a></li> 
									<li><a href="#">6342152</a></li> 
								</ul> 
							</div>
						</div>
					</div> 
				</div> 

				<div class="form-group"> 
					<label for="unggah" class="col-sm-2 control-label"><h4>Bukti Pembayaran</h4></label> 
					<input type="file" id="unggah" name="unggah">
				</div> 

				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10"> 
						<button type="submit" class="btn btn-default">Selesai</button> 
					</div> 
				</div> 
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			</form>
		
		</div>
	</div>
@endsection