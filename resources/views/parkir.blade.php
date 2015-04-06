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
        <option>opsi 1</option>
      </select>
      <button type="submit" class="btn btn-primary">
        Ubah
      </button>
    </form>
  </div>
  <div class="col-md-4">
  	<h2>Lorem Ipsum ini harusnya diisi detil parkir.</h2>
	<h3>rehat dulu bro</h3>
	<h2>Lorem Ipsum ini harusnya diisi detil parkir.</h2>
	<h3>rehat dulu bro</h3>
	<h2>Lorem Ipsum ini harusnya diisi detil parkir.</h2>
	<h3>rehat dulu bro</h3>
  </div>
@endsection