<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Formulário</title>
</head>
<style type="text/css">
	
body{
	margin: 0;
	width: 100vw;
	height: 100vh;
	background-image: linear-gradient(45deg, #060126, #030085);
	display: flex;
	justify-content: center;
	align-items: center;
	font-family: OCR A Std, monospace;
	font-weight: 500;
}

form{
	width: 60vw;
	height: 70vh;
	background-color: white;
	border-radius: 30px;
	padding: 20px;
	justify-content: center;
	align-items: center;
	box-shadow: 0 8px 35px 0 rgba( 31, 38, 135, 0.40 );
}







</style>
<body>
	<div class="formulario">
		  <form action="testa_funcionario.php" method="post">

		  	<div class="form-floating mb-3">
				  <input type="number" class="form-control" id="cod" placeholder="Insira seu codigo" name="codigo">
				  <label for="cod">Codigo do Funcionário</label>
				</div>

		  	<div class="form-floating mb-3">
				  <input type="name" class="form-control" id="nom" placeholder="Insira seu nome" name="nome">
				  <label for="nom">Nome Completo</label>
				</div>
		  	
		  	<div class="form-floating mb-3">
				  <input type="date" class="form-control" id="dat" placeholder="Insira sua data de Nascimento" name="nascimento">
				  <label for="dat">Data de Nascimento</label>
				</div>

		  	<div class="form-floating mb-3">
				  <input type="decimal" class="form-control" id="sal" placeholder="Insira seu salário" name="salario">
				  <label for="sal">Codigo do Funcionário</label>
				</div>


		  	<div class="col-12">
    			<button class="btn btn-primary" type="submit">Cadstrar</button>
  			</div>

		  </form>
  </div>
</body>
</html>