<?php 

# carrega a classe
include_once 'Funcionario.php';

//instancia novo Funcionario
$pedro = new Funcionario();

//atribui novo Salário
$pedro-> $_POST['codigo'];


//obtém o Salário
echo "Salário: R$ " .$pedro->getSalario();


 ?>