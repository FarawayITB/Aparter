@extends('header_footer')

@section('content')
	<div class="main"><!-- start main -->
		<div class="container main">
			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<strong>Whoops!</strong> There were some problems with your input.<br><br>
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
			<h2>Pendaftaran Parkir</h2>
			
			<form class="form-horizontal" role="form" method="POST" action="{{ url('/parkir/save') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group">
					<label class="col-md-4 control-label">No. KTP</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="id_pemilik">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Alamat</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="alamat">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Lokasi</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="lokasi">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-md-4 control-label">Status</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="status">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-md-4 control-label">Luas</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="luas">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-md-4 control-label">Tarif</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="tarif">
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