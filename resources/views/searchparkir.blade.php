@extends('header_footer')

@section('content')
	<form class="form-horizontal" role="form"> 
		<div class="form-group">
			<div class="col-md-1">
			</div>
			<div class="col-md-10">
				<br><br>
				<div id="googleMap" style="width:640;height:400px;"></div>
			</div>
			<div class="col-md-1">
			</div>
		</div>
	</form>

	<form class="form-horizontal" role="form">
	</form>

	<div class="container infoparkir">
		<div class="row">
			<?php if ($parkir->count()==0) { ?>
				<h3>Tidak tersedia lahan parkir pada kecamatan yang Anda masukkan</h3>
			<?php }
			foreach ($parkir as $par): ?>
				<?php $location = explode(",", $par->lokasi)?>
				<div class="col-md-6" id="parkir_item" onclick="setMarker(<?php echo $location[0]?>,<?php echo $location[1]?>)">
					<h3><a href="javascript:;">Parkir <?php echo $par->alamat ?></a></h3>
					<dl>
						<p>Rp <?php echo $par->tarif ?> per hari</p>
					</dl>
				</div>
			<?php endforeach ?>
		</div>
	</div>
@endsection