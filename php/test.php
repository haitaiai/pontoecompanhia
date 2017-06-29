<?php 

	$text = array("I"," ","E","N","I","L"," ","S","I","H","T"," ","H","S","I","R","E","B","B","I","G"," ","S");

	$tam = count($text) / 2;

	$cont = 0;

	$vet2 = array();
	
	function div($inicio, $fim, $vet, &$cont) {
		for ($i = $fim; $i >= $inicio; $i--) {
			$vet2[$cont] = $vet[$i];
			$cont++;
		} 
		return $vet2;
	}

	$vet2 = div(0, 10, $text, $cont);
	$vet2 += div(11, 22, $text, $cont);

	print_r($vet2);

 ?>