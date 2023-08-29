<?php

    //insere a classe
    include_once 'classe_contas.php';

    //cria dois objetos
    $valor1 = new Conta();
    $valor2 = new Conta();

    //atribuir valores
    $valor1->nome = "Jacinto Passos";
    $valor1->saldo = 3.14159265359;

  


    //Imprimindo os valores
    $valor1->ExibeDados();



?>