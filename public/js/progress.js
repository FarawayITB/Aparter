$(document).ready(function () {
	// var base = "http://localhost:8000";
	var base = "http://e-gov-bandung.tk/aparter/public";

	// AJAX Request parkir
	$('.idtempat_parkir').change(function(e) {
		$(".idtempat_lahan").get(0).selectedIndex = 0;
		var id = $("#idtempat_parkir").children(":selected").attr('id');
		var user = $("#user").val();
		$.ajaxSetup({
		   headers: { 'X-CSRF-TOKEN' : $('input[name=_token]').val() }
		});
		$.ajax({
			type: 'post',
		    url: base + '/api/progress/parkir',
		    data: {idparkir: id, user: user},
		    success: function(data) {
		    	// Info
		    	$('.dl-horizontal').empty();
		    	$('.dl-horizontal').append('<dt><p><strong>25%</strong></p></dt>');
				$('.dl-horizontal').append('<dd><p>Tahap Registrasi. Pengecekan dokumen-dokumen prerequisite</p></dd>');
				$('.dl-horizontal').append('<dt><p><strong>50%</strong></p></dt>');
				$('.dl-horizontal').append('<dd><p>Dokumen lengkap. Permintaan pembuatan tempat parkir disetujui</p></dd>');
				$('.dl-horizontal').append('<dt><p><strong>75%</strong></p></dt>');
				$('.dl-horizontal').append('<dd><p>Tahap Administrasi. Pemrosesan lebih lanjut oleh dinas perhubungan</p></dd>');
				$('.dl-horizontal').append('<dt><p><strong>100%</strong></p></dt>');
				$('.dl-horizontal').append('<dd><p>Selesai. Ijin pembentukan perparkiran sudah selesai</p></dd>');

		    	// Progress Bar
		    	$('.status').empty();
		    	$('.status').append("<p>Status pendaftaran lahan parkir pada area terpilih: <strong>"+data+"</strong> selesai<p>");
		    	$('.status').append('<div class="progress progress-striped active">' +
		    		' <div class="progress-bar progress-bar-info" role="progressbar"' + 
		    			' aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: '+ data +'; ' + 
		    				' <span class="sr-only">'+ data +' Complete</span></div>' +
		    		'<div class="progress progress-striped active">');
		    },
		    error: function(data) {
		    	$('.dl-horizontal').empty();
		    	$('.status').empty();
		    }
		});
	});

	// AJAX Request lahan
	$('.idtempat_lahan').change(function(e) {
		$(".idtempat_parkir").get(0).selectedIndex = 0;
		var id = $("#idtempat_lahan").children(":selected").attr('id');
		var user = $("#user").val();
		$.ajaxSetup({
		   headers: { 'X-CSRF-TOKEN' : $('input[name=_token]').val() }
		});
		$.ajax({
			type: 'post',
		    url: base + '/api/progress/lahan',
		    data: {idlahan: id, user: user},
		    success: function(data) {
		    	// Info
		    	$('.dl-horizontal').empty();
		    	$('.dl-horizontal').append('<dt><p><strong>25%</strong></p></dt>');
				$('.dl-horizontal').append('<dd><p>Tahap Registrasi.</p></dd>');
				$('.dl-horizontal').append('<dt><p><strong>50%</strong></p></dt>');
				$('.dl-horizontal').append('<dd><p>Dokumen lengkap.</p></dd>');
				$('.dl-horizontal').append('<dt><p><strong>75%</strong></p></dt>');
				$('.dl-horizontal').append('<dd><p>Tahap Administrasi.</p></dd>');
				$('.dl-horizontal').append('<dt><p><strong>100%</strong></p></dt>');
				$('.dl-horizontal').append('<dd><p>Selesai.</p></dd>');

		    	// Progress Bar
		    	$('.status').empty();
		    	$('.status').append("<p>Status penyewaan lahan terminal pada area terpilih: <strong>"+data+"</strong> selesai<p>");
		    	$('.status').append('<div class="progress progress-striped active">' +
		    		' <div class="progress-bar progress-bar-success" role="progressbar"' + 
		    			' aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: '+ data +'; ' + 
		    				' <span class="sr-only">'+ data +' Complete</span></div>' +
		    		'<div class="progress progress-striped active">');
		    },
		    error: function(data) {
		    	$('.dl-horizontal').empty();
		    	$('.status').empty();
		    }
		});
	});
});