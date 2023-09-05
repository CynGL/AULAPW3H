<?php 

	include_once 'Pessoa.php';
	include_once 'Conta.php';


	$cyntia = new Pessoa;
	$cyntia->Codigo = 10;
	$cyntia->Nome = "Cyntia Garcete Lino";
	$cyntia->Altura = 1.72;
	$cyntia->Idade = 19;
	$cyntia->Nascimento = '09/08/2004';
	$cyntia->Escolaridade = "Ensino médio";

	echo "Manipulando o objeto $cyntia->Nome: \n";
	echo "{$cyntia->Nome} é formado em: {$cyntia->Escolaridade}\n";

	$cyntia->Formar('Técnico em Desenvolvimento de Sistemas');
	echo "{$cyntia->Nome} é formado em em {$cyntia->Escolaridade} \n";
	echo "{$cyntia->Nome} possui {$cyntia->Idade} anos \n";


	$cyntia->Envelhecer(1);
	echo "{$cyntia->Nome} possui {$cyntia->Idade} anos \n";





 ?>