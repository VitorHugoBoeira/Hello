<?php

$altura = readline("qual sua altura? Digite à em Metros\n");
$altura = floatval($altura);

echo "1 para Montanha-Russa\n2 para Carrosel\n3 para Roda-Gigante\n";
$brinquedo = readline("qual brinquedo você quer ir? ");

switch($brinquedo){
	case 1:
		if($altura < 1.2){
			echo "Você não tem altura minima para ir na Montanha-Russa!\nAltura minima:1.20 Metros!";
			break;		
}
		else{
			echo "Você pode ir na Montanha-Russa!";
			break;
		}
	case 2:
		if($altura < 0.8){
			echo "Você não tem altura minima para ir no carrosel!\nAltura Minima:0.8 Metros!";
			break;		
}
		else{
			echo "Você pode ir no carrosel!";
			break;
		}
	case 3:
		if($altura < 1){
			echo "Você não tem altura minima para ir na Roda-Gigante!\nAltura Minima:1 Metro!";
			break;		
}
		else{
			echo "Você pode ir na Roda-Gigante!";
			break;
		} 
} 
?>