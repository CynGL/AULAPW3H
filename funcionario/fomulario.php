<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário</title>
</head>
<body>
  <form action="testa_funcionario.php" method="post">
  	<label for="codigo">codigo</label>
  	<input type="number" name="codigo">
  	<br><br>
  	<label for="nome">Nome</label>
  	<input type="text" name="nome">
  	<br><br>
  	<label for="nasc">Nascimento</label>
  	<input type="date" name="nascimento">
  	<br><br>
  	<label for="sal">Salario</label>
  	<input type="number" name="salario">

  	<input type="submit" value="Cadastrar">
  </form>
</body>
</html>