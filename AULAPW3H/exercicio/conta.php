<?php

    //insere a classe
    include_once 'classe_contas.php';

    //cria dois objetos
    $valor1 = new Conta();
    $valor2 = new Conta();

    //atribuir valores
    $valor1->nome = "Cyntia Garcete Lino";
    $valor1->saldo = 3.500;

  


    //Imprimindo os valores
    $valor1->ExibeDados();



?>