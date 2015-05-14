@extends('header_footer')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-xs-3">
			</div>
			<div class="col-xs-7">
				<div class="page-header"> 
					<h1>Progress Pengajuan Lahan/Parkir</h1> 
				</div>
			</div>
			<div class="col-xs-2">
			</div>
		</div>

		<div class="row">
			<form class="form-horizontal" role="form" enctype='multipart/form-data' method="post" action="/user/status">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" id="user" name="user" value="{{$id_ktp}}">

				<div class="form-group"> 
					<label for="idtempat_parkir" class="col-md-4 control-label"><h4>ID tempat parkir</h4></label> 
					<div class="col-md-6">
						<select class="form-control idtempat_parkir" id="idtempat_parkir" name="idtempat_parkir">
							<option>Tidak ada</option>
							@foreach ($parkirs as $parkir)
								<option id="{{$parkir->id_parkir}}">Parkiran id: {{$parkir->id_parkir}} di {{$parkir->alamat}}</option>
							@endforeach
						</select> 
					</div>
				</div>

				<div class="form-group"> 
					<label for="idtempat_lahan" class="col-md-4 control-label"><h4>ID tempat lahan</h4></label> 
					<div class="col-md-6">
						<select class="form-control idtempat_lahan" id="idtempat_lahan" name="idtempat_lahan">
							<option>Tidak ada</option>
							@foreach ($lahans as $lahan)
								<option id="{{$lahan->id_lahan}}">Lahan id: {{$lahan->id_lahan}} di Terminal: {{$lahan->nama}}</option>
							@endforeach
						</select> 
					</div>
				</div>
			</form>
		</div>

		<div class="jumbotron"> 
			<div class="container">
				<div class="info">
					<div class="well well-lg">
						<blockquote>
							<h2>Keterangan Status</h2>
						</blockquote>
						<dl class="dl-horizontal"> 
						</dl><br>
					</div>
				</div>
				<div class="status">
				</div>
			</div>
		</div>
	</div>
@endsection