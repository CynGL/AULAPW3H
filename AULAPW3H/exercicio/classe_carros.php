<?php

    class Carro
    {
        var $cor;
        var $ano;
        var $numeroPortas;
        var $peso;

        function Acelerar(){
            $velocidade = 0;
            $velocidade = $velocidade + 1;
            print 'Velocidade: ' . $this->velocidade . "<br>";
        }

        function InformarCor(){
            print 'Cor: ' . $this->cor . "<br>";
        }
    }


?>