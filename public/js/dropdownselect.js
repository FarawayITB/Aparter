$(document).ready(function () {
	$('#daftarid li').on('click', function(){
	    $('#idtempat').val($(this).text());
	});
});