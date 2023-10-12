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

		  	<div>
		  		    <label for="cod">Valor da conta:</label>
				  <input type="number" class="form-control" id="cod" placeholder="Insira o valor da conta" name="valor"><br>
				
				</div>

		  	<div>
		  		<p>Qualidade de serviço:</p>
				  <input type="radio" name="porcex">
				  <label for="excelente">Excelente - 10%</label>
				  <input type="radio" name="porcot">
				  <label for="excelente">Ótimo - 8%</label>
				  <input type="radio" name="porcbo">
				  <label for="excelente">Bom - 5%</label>
				  <input type="radio" name="porcru">
				  <label for="excelente">Ruim - 2%</label><br><br>
				  
				</div>

				<div class="col-12">
    			<button class="btn btn-primary" type="submit" name="operacao">Calcular Gorjeta</button><br><br>
  			</div>
		  	
		  	
		  	


		  

		  </form>
  </div>
</body>
</html>