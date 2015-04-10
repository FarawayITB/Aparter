@extends('header_footer')

@section('content')
<div class="container">
		<div class="row">
			<div class="col-xs-5">
			</div>
			<div class="col-xs-3">
				<div class="page-header"> 
					<h1>Pemberitahuan</h1> 
				</div>
			</div>
			<div class="col-xs-4">
			</div>
		</div>
		
<h3><a href="javascript:;" data-toggle="modal" data-target="#myModal">Lahan parkir di Jl. Siliwangi</a></h3>
<p>Pendaftaran lahan parkir di Jl. Siliwangi sedang diproses.</p>

<h3><a href="javascript:;" data-toggle="modal" data-target="#myModal2">Lahan parkir di Jl. Sumatra</a></h3>
<p>Pendaftaran lahan parkir di Jl. Sumatra telah selesai diproses.</p>

@foreach ($allParkir as $parkir)		
	<h3>Lahan parkir di {{$parkir->lokasi}}</h3>
	<p>Status pendaftaran lahan parkir di {{$parkir->alamat}},{{$parkir->lokasi}} : {{$parkir->status}}.</p>
@endforeach

<!-- Modal --> 
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="notifLabel" aria-hidden="true"> 
	<div class="modal-dialog"> 
		<div class="modal-content"> 
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button> 
				<h4 class="modal-title" id="notifLabel">Lahan parkir di Jl.Siliwangi</h4> 
			</div> 
			<div class="modal-body">
				<h5>Pendaftaran lahan parkir di Jl. Siliwangi sedang diproses</h5>
			</div> 
			<div class="modal-footer"> 
				<button type="button" class="btn btn-default" data-dismiss="modal"> Close </button> 
			</div>
		</div><!-- /.modal-content --> 
	</div><!-- /.modal -->
</div>

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="notifLabel2" aria-hidden="true"> 
	<div class="modal-dialog"> 
		<div class="modal-content"> 
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button> 
				<h4 class="modal-title" id="notifLabel2">Lahan parkir di Jl. Sumatra</h4> 
			</div> 
			<div class="modal-body">
				<h5>Pendaftaran lahan parkir di Jl. Sumatra telah selesai diproses.</h5>
			</div> 
			<div class="modal-footer"> 
				<button type="button" class="btn btn-default" data-dismiss="modal"> Close </button> 
			</div>
		</div><!-- /.modal-content --> 
	</div><!-- /.modal -->
</div>

@endsection