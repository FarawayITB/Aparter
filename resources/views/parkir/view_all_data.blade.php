@extends('header_footer')

@section('content')
	<div class="main"><!-- start main -->
		<div class="container">
			<div class="row">
			<div class="col-xs-4">
			</div>
			<div class="col-xs-4">
				<div class="page-header"> 
					<h1>Data Daftar Parkir</h1> 
				</div>
			</div>
			<div class="col-xs-4">
			</div>
		</div>
		<div class="row">
			<div class="col-xs-2">
			</div>
			<div class="col-xs-8">
			<table class="table table-condensed">
				<thead>
					<tr style="font-size:16px">
						<th>No. KTP</th>
						<th>Alamat</th>
						<th>Lokasi</th>
						<th>Status</th>
						<th>Luas</th>
						<th>Tarif</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($parkir as $par): ?>
						<tr style="font-size:14px">
							<td><?php echo $par->id_pemilik ?></td>
							<td><?php echo $par->alamat ?></td>
							<td><?php echo $par->lokasi ?></td>
							<td><?php echo $par->status ?></td>
							<td><?php echo $par->luas ?></td>
							<td><?php echo $par->tarif ?></td>
							<td><a href="parkir/{{ $par->id_parkir }}/edit">Edit</a></td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
			<?php //echo $parkir->render() ?>
			</div>
			<div class="col-xs-2">
			</div>
		</div>
	</div>
@endsection