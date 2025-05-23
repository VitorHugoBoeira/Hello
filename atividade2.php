<?php

$nome = readline("qual seu nome? ");
$idade = readline("qual seu idade? ");
$endereco = readline("qual seu endereco? ");
$ponto = readline("qual seus pontos fortes? ");
$profissao = readline("qual área deseja trabalhar? ");
$grauesc = readline("qual seu grau de escolaridade? ");
$objetivo = readline("qual seu objetivo na empresa? ");
$carteira = readline("possui CNH? Responda com 1 para SIM e 2 para NÃO! ");

switch ($carteira){
	case 1:
 		$cnh = readline("qual o tipo de CNH? ");
		if($idade <18){
			echo 'IDADE ESTA INCORRETA!';
			break;
		}
		else {
			echo "Nome:$nome\nIdade:$idade\nEndereco:$endereco\nPontos fortes:$ponto\nArea que deseja trabalhar:$profissao\nGrau de Escolaridade:$grauesc\nObjetivo na empresa:$objetivo\nCNH:$cnh";
			break;		
		}
	
	case 2:
		$cnh = 'Não possuí cnh';
		echo "Nome:$nome\nIdade:$idade\nEndereco:$endereco\nPontos fortes:$ponto\nArea que deseja trabalhar:$profissao\nGrau de Escolaridade:$grauesc\nObjetivo na empresa:$objetivo\nCNH:$cnh";
}
?>
