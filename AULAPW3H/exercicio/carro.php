<?php

    //insere a classe
    include_once 'classe_carros.php';

    //cria dois objetos
    $valor1 = new Carro();


    //atribuir valores
    $valor1->velocidade = 0;
    $valor2->cor = "Azul";

    //Imprimindo os valores
    $valor1->Acelerar();
    $valor1->InformarCor();


?>