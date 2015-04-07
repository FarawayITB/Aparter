@extends('header_footer')

@section('content')
  <div class="col-md-8">
    <iframe 
      width="780px"
      height="400px"
      src="https://www.google.com/maps/embed/v1/search?q=Bandung,+West+Java+Indonesia&key=AIzaSyAHzKdE2kvxD0JhunmDQU2SsXvjSiz9v2c">
    </iframe>
    <form method="post">
      <select name="kecamatan">
      	<option>Antapani</option>
      	<option>Bandung Wetan</option>
      	<option>Buahbatu</option>
        <option>Cicendo</option>
        <option>Coblong</option>
      </select>
      <button type="submit" class="btn btn-primary">
        Tampilkan
      </button>
    </form>
  </div>
  <form>
	<div class="thumbnail">
		<div class="caption">
		<input type="radio" name="parkir" value="itb">
			<h3>Parkir ITB</h3>
			<dl>
				<p>Jl. Ganesha No.10 | motor dan mobil | Rp 2.000 per hari</p>
			</dl>
		</div>
	</div>
	<div class="thumbnail">
		<div class="caption">
		<input type="radio" name="parkir" value="itb">
			<h3>Parkir Kebun Binatang</h3>
			<dl>
				<p>Jl. Tamansari No.10 | motor dan mobil | Rp 2.000 per hari</p>
			</dl>
		</div>
	</div>
	<div class="thumbnail">
		<div class="caption">
		<input type="radio" name="parkir" value="itb">
			<h3>Parkir Baltos</h3>
			<dl>
				<p>Jl. Tamansari No.1 | motor dan mobil | Rp 2.000 per hari</p>
			</dl>
		</div>
	</div>
  </form>
@endsection