<?php 

	class Funcionario{

			private 	$codigo;
			public 		$nome;
			private 	$nascimento;
			protected 	$salario;


		    public function setCodigo($codigo) {
		        $this->codigo = $codigo;
		    }

		    
		    public function getCodigo() {
		        return $this->codigo;
		    }

		    
		    public function setNome($nome) {
		        $this->nome = $nome;
		    }

		   
		    public function getNome() {
		        return $this->nome;
		    }

		    
		    public function setNascimento($nascimento) {
		        $this->nascimento = $nascimento;
		    }

		    
		    public function getNascimento() {
		        return $this->nascimento;
		    }

			
			function setSalario($salario){
				//verifica se é numérico positivo
				if (is_numeric($salario)&&($salario > 0)) 
					{
						$this->salario = $salario;
				
					}
				}

		
			function getSalario(){
				return $this->salario;
			}


		}




 ?>