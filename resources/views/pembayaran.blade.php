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
					<label for="no-ktp" class="col-md-4 control-label"><h4>No. KTP</h4></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="no-ktp">
					</div>
				</div>

				<div class="form-group"> 
					<label for="idtempat" class="col-md-4 control-label"><h4>ID tempat</h4></label> 
					<div class="col-md-6"> 
						<div class="input-group">                                            
				            <input type="text" id="idtempat" name="idtempat" class="form-control"></input>
				            <div class="input-group-btn">
				                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
				                    <span class="caret"></span>
				                </button>
				                <ul id="daftarid" class="dropdown-menu">
				                    <li><a>12345</a></li>
				                    <li><a>67890</a></li>
				                    <li><a>10293</a></li>
				                </ul>
				            </div>
				        </div>
					</div> 
					<div class="col-md-2">
					</div>
				</div> 

				<div class="form-group"> 
					<label for="unggah" class="col-md-4 control-label"><h4>Bukti Pembayaran</h4></label> 
					<div class="col-md-6">
						<input type="file" id="unggah" name="unggah" class="form-control">
					</div>
					<div class="col-md-2">
					</div>
				</div> 

				<div class="form-group"> 
					<div class="col-sm-offset-5 col-sm-10"> 
						<button type="submit" class="btn btn-default">Selesai</button> 
					</div> 
				</div> 
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			</form>
		
		</div>
	</div>
@endsection