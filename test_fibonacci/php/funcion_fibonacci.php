<?php

$valor=$_POST['var_num'];
fibonacci($valor);

function fibonacci($valor){
	if($valor>0 && $valor<=12){	
		for($x=1;$x<=$valor;$x++){
			print recursiva($x);		
		}
	}else{
		print 'Ingrese un valor numérico mayor a cero y menor igual a 12';
	}

}

function recursiva($v){
	if ($v==0){
		return 0 . ", ";
	}else if($v==1){
		return 1 .", ";
	}
	else{
		return ( recursiva($v-1) + recursiva($v-2)  ).", ";
	}
}

?>