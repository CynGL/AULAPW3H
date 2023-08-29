<?php

    class Conta
    {
        var $numAge;
        var $numConta;
        var $nome;
        var $saldo;

        function ExibeDados()
        {
            print 'Nome: ' . $this->nome . "<br>";
            print 'Saldo: ' . $this->saldo . "<br>";
        }
    }


?>