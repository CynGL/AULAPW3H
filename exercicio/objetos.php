<?php 
	
	$conta_cyntia = new Conta;
	$conta_cyntia->Agencia = 6677;
	$conta_cyntia->Codigo = "CC.12 34. 56";
	$conta_cyntia->DataDeCriacao = "04/09/2023";
	$conta_cyntia->Titular = $cyntia;
	$conta_cyntia->Senha = 9876;
	$conta_cyntia->Saldo = 567.89;
	$conta_cyntia->Cancelada = false;

	echo "\n";
	echo "Manipulando a conta de: {$conta_cyntia->Titular->Nome} \n";
	echo "O saldo atual é R\$ {$conta_cyntia->ObterSaldo()} \n";

	$conta_cyntia->Depositar(20);
	echo "O saldo atual é R\$ {$conta_cyntia->ObterSaldo()} \n";

	$conta_cyntia->Retirar(10);
	echo "O saldo atual é R\$ {$conta_cyntia->ObterSaldo()} \n"; 






 ?>