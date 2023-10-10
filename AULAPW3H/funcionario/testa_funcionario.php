<?php 

require_once 'funcionario.php'; 


$funcionario = new Funcionario();


$funcionario->setCodigo($_POST['codigo']);
$funcionario->setNome($_POST['nome']);
$funcionario->setNascimento($_POST['nascimento']);
$funcionario->setSalario($_POST['salario']);


echo "<h2>Dados do Funcionário:</h2>";
echo "Nome: " . $funcionario->getNome() . "<br>";
echo "Código: " . $funcionario->getCodigo() . "<br>";
echo "Data de Nascimento: " . $funcionario->getNascimento() . "<br>";
echo "Salário: " . $funcionario->getSalario() . "<br>";

 ?>