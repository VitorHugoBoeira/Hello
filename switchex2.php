<?php

echo "1 = Soma\n2 = Subtração\n3 = Multiplicação\n4 = Divisão\n";

$operacao = readline("digite o numero da operação: ");
$valor1 = readline("digite o primeiro valor: ");
$valor2 = readline("digite o segundo valor: ");

switch ($operacao){
	case 1:
		$resultado = $valor1 + $valor2;
		echo "o resultado da soma é $resultado";
		break;
	case 2:
		$resultado = $valor1 - $valor2;
		echo "o resultado da subtração é $resultado";
		break;
	case 3:
		$resultado = $valor1 * $valor2;
		echo "o resultado da multiplicação é $resultado";
		break;
	case 4:
		if($valor1 && valor2 != 0){
			$resultado = $valor1 / $valor2;
			echo "o resultado da divisão é $resultado";
			break;
		}
		else {
			echo "Divisão por 0 não e permitida!";
			break;
		}
	default:
		echo "operação invalida! Escolha entre 1, 2, 3 ou 4!";
		break;
}
?>