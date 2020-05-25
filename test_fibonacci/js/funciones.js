$(document).ready(function(){
	$('#btnGenerar').click(function(){
		//console.log($("#idTxt").val());
		var valor=$("#idTxt").val();
		enviaRecibe(valor);		
	});
});



function enviaRecibe(valor){
	$.ajax({
		data: {'var_num':valor},
		url: "php/funcion_fibonacci.php",
		type: "post",
		dataType: "html",		
		success: function(data){
			//console.log(data);
			document.getElementById("divResultado").innerHTML=data
		}
	});
}

