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
		
<h3>Lahan parkir di Jl. Siliwangi</h3>
<p>Pendaftaran lahan parkir di Jl. Siliwangi sedang diproses.</p>

<h3>Lahan parkir di Jl. Sumatra</h3>
<p>Pendaftaran lahan parkir di Jl. Sumatra telah selesai diproses.</p>

@foreach ($allParkir as $parkir)		
<h3>Lahan parkir di {{$parkir->lokasi}}</h3>
<p>Status pendaftaran lahan parkir di {{$parkir->alamat}},{{$parkir->lokasi}} : {{$parkir->status}}.</p>
@endforeach

@endsection