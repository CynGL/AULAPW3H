<?php 
	include 'Funcionario.php';
	include 'Estagiario.php';

	$pedrinho = new Estagiario();
	$pedrinho->SetSalario(248);

	echo "O salário do Pedrinho é R$: " . $pedrinho->getSalario() . "<br>";



 ?>