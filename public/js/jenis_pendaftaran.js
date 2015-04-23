$(document).ready(function(){
 
  $("input[name$='jenis_daftar']").click(function(){
 
  var radio_value = $(this).val();
 
  if(radio_value=='1') {
    $("#inputan-1").show("slow");
    $("#inputan-2").show("slow");
    $("#inputan-3").show("slow");
  }
  else if(radio_value=='2') {
    $("#inputan-3").show("slow");
	  $("#inputan-2").hide("slow");
    $("#inputan-1").hide("slow");
   }
  });
 

  $("#inputan-1").show();
  $("#inputan-2").show();
 
});