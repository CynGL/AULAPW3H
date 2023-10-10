<?php

    //insere a classe
    include_once 'classe_produto.php';

    //cria dois objetos
    $valor1 = new Produto();
    $valor2 = new Produto();

    //atribuir valores
    $valor1->codigo = 4001;
    $valor1->descricao = "CD The Best of Eric Clapton";

    $valor2->codigo = 4002;
    $valor2->descricao = "CD Lover";



    //Imprimindo os valores
    $valor1->ImprimeEtiqueta();
    $valor2->ImprimeEtiqueta();


?>