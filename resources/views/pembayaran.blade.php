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
					<label for="idtempat_parkir" class="col-md-4 control-label"><h4>ID tempat parkir</h4></label> 
					<div class="col-md-6">
						<select class="form-control" name="idtempat_parkir">
							<option>Tidak ada</option>
							@foreach ($parkirs as $parkir)
								<option>Parkiran id: {{$parkir->id_parkir}} di {{$parkir->alamat}}</option>
							@endforeach
						</select> 
					</div>
				</div>

				<div class="form-group"> 
					<label for="idtempat_lahan" class="col-md-4 control-label"><h4>ID tempat lahan</h4></label> 
					<div class="col-md-6">
						<select class="form-control" name="idtempat_lahan">
							<option>Tidak ada</option>
							@foreach ($lahans as $lahan)
								<option>Lahan id: {{$lahan->id_lahan}} di Terminal: {{$lahan->nama}}</option>
							@endforeach
						</select> 
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