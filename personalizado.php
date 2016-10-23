<?php	
	if(!isset($_SESSION)) {			
		session_start();
		
		//echo $_SESSION['indice'];
		//echo $_SESSION['posicao'];
	}
	
	if ($_SESSION['posicao'] == 0){
		
		if ($_SESSION['opcao'][0] == "1"){
		
			$_SESSION['questio'][]= "Possui ou possuíra animal de estimação?";
			$_SESSION['questio'][]= "Sim";
			$_SESSION['questio'][]= "Não";
			$_SESSION['questio'][]= "Sem certeza.";
			
			$_SESSION['indice'] += 1;

		}
		
		if ($_SESSION['opcao'][0] == "1"){
		
			$_SESSION['questio'][]= "Gostaria de uma casa com piscina?";
			$_SESSION['questio'][]= "Sim";
			$_SESSION['questio'][]= "Não";
			$_SESSION['questio'][]= "Sem preferência.";
			
			$_SESSION['indice'] += 1;
			$_SESSION['condicao'][0] = 1;			

		}
			
		if ($_SESSION['opcao'][0] == "2"){
		
			$_SESSION['questio'][]= "Costuma praticar exerícios físicos?";
			$_SESSION['questio'][]= "Sim";
			$_SESSION['questio'][]= "Não";
			$_SESSION['questio'][]= "Sem certeza.";
			
			$_SESSION['indice'] += 1;
			$_SESSION['condicao'][1] = 1;			

		}
	
		if ($_SESSION['opcao'][5] == "1"){

			$_SESSION['questio'][]= "Desejaria uma vaga de garagem?";
			$_SESSION['questio'][]= "Sim";
			$_SESSION['questio'][]= "Não";
			$_SESSION['questio'][]= "Sem preferência.";
			
			$_SESSION['indice'] += 1;
			$_SESSION['condicao'][2] = 1;			

		}


		if ($_SESSION['opcao'][7] == "2"){			
			
			$_SESSION['questio'][]= "Qual dos locais combina mais com você?";
			$_SESSION['questio'][]= "Campo";
			$_SESSION['questio'][]= "Praia";
			$_SESSION['questio'][]= "Sem certeza.";
			
			$_SESSION['indice'] += 1;
			$_SESSION['condicao'][3] = 1;			

		}
	}
	
	if (empty($_SESSION['questio'])){
		//Página com resultados
		
		echo "<script>location.href='resultado.php';</script>";
				
	}else{
		
		if ($_SESSION['indice'] == "1"){
			
			if ($_SESSION['posicao'] == "0"){
				$_SESSION['info']= $_SESSION['questio'][0];	
				$_SESSION['o1pcao']= $_SESSION['questio'][1];
				$_SESSION['o2pcao']= $_SESSION['questio'][2];
				$_SESSION['o3pcao']= $_SESSION['questio'][3];
				
				echo "<script>location.href='questionario.php';</script>";
			
			} else{
				//Página com resultados
				
				echo "<script>location.href='resultado.php';</script>";
			}
		}
		
		else if ($_SESSION['indice'] == "2"){		
		
			if ($_SESSION['posicao'] == "0"){
				$_SESSION['info']= $_SESSION['questio'][0];	
				$_SESSION['o1pcao']= $_SESSION['questio'][1];
				$_SESSION['o2pcao']= $_SESSION['questio'][2];
				$_SESSION['o3pcao']= $_SESSION['questio'][3];
				
				echo "<script>location.href='questionario.php';</script>";
			}
			
			else if ($_SESSION['posicao'] == "1"){
				$_SESSION['info']= $_SESSION['questio'][4];	
				$_SESSION['o1pcao']= $_SESSION['questio'][5];
				$_SESSION['o2pcao']= $_SESSION['questio'][6];
				$_SESSION['o3pcao']= $_SESSION['questio'][7];	

				echo "<script>location.href='questionario.php';</script>";
				
			}else{
				//Página com resultados
			
				echo "<script>location.href='resultado.php';</script>";
			}
		
		}
		
		else if ($_SESSION['indice'] == "3"){
			
			if ($_SESSION['posicao'] == "0"){
				$_SESSION['info']= $_SESSION['questio'][0];	
				$_SESSION['o1pcao']= $_SESSION['questio'][1];
				$_SESSION['o2pcao']= $_SESSION['questio'][2];
				$_SESSION['o3pcao']= $_SESSION['questio'][3];
				
				echo "<script>location.href='questionario.php';</script>";

			}
			
			else if ($_SESSION['posicao'] == "1"){
				$_SESSION['info']= $_SESSION['questio'][4];	
				$_SESSION['o1pcao']= $_SESSION['questio'][5];
				$_SESSION['o2pcao']= $_SESSION['questio'][6];
				$_SESSION['o3pcao']= $_SESSION['questio'][7];		

				echo "<script>location.href='questionario.php';</script>";
				
			}
			
			else if ($_SESSION['posicao'] == "2"){
				$_SESSION['info']= $_SESSION['questio'][8];	
				$_SESSION['o1pcao']= $_SESSION['questio'][9];
				$_SESSION['o2pcao']= $_SESSION['questio'][10];
				$_SESSION['o3pcao']= $_SESSION['questio'][11];

				echo "<script>location.href='questionario.php';</script>";
				
			}
			else{
				//Página com resultados

				echo "<script>location.href='resultado.php';</script>";
			}
		}
			
		else if ($_SESSION['indice'] == "4"){
			
			if ($_SESSION['posicao'] == "0"){
				$_SESSION['info']= $_SESSION['questio'][0];	
				$_SESSION['o1pcao']= $_SESSION['questio'][1];
				$_SESSION['o2pcao']= $_SESSION['questio'][2];
				$_SESSION['o3pcao']= $_SESSION['questio'][3];
				
				echo "<script>location.href='questionario.php';</script>";

			}
			
			else if ($_SESSION['posicao'] == "1"){
				$_SESSION['info']= $_SESSION['questio'][4];	
				$_SESSION['o1pcao']= $_SESSION['questio'][5];
				$_SESSION['o2pcao']= $_SESSION['questio'][6];
				$_SESSION['o3pcao']= $_SESSION['questio'][7];		

				echo "<script>location.href='questionario.php';</script>";
				
			}
			
			else if ($_SESSION['posicao'] == "2"){
				$_SESSION['info']= $_SESSION['questio'][8];	
				$_SESSION['o1pcao']= $_SESSION['questio'][9];
				$_SESSION['o2pcao']= $_SESSION['questio'][10];
				$_SESSION['o3pcao']= $_SESSION['questio'][11];

				echo "<script>location.href='questionario.php';</script>";
				
			}
			
			else if ($_SESSION['posicao'] == "3"){
				$_SESSION['info']= $_SESSION['questio'][12];	
				$_SESSION['o1pcao']= $_SESSION['questio'][13];
				$_SESSION['o2pcao']= $_SESSION['questio'][14];
				$_SESSION['o3pcao']= $_SESSION['questio'][15];

				echo "<script>location.href='questionario.php';</script>";
				
			}
			else{
				//Página com resultados
			
				echo "<script>location.href='resultado.php';</script>";
			}
		}
		
		else if ($_SESSION['indice'] == "5"){
			
			if ($_SESSION['posicao'] == "0"){
				$_SESSION['info']= $_SESSION['questio'][0];	
				$_SESSION['o1pcao']= $_SESSION['questio'][1];
				$_SESSION['o2pcao']= $_SESSION['questio'][2];
				$_SESSION['o3pcao']= $_SESSION['questio'][3];
				
				echo "<script>location.href='questionario.php';</script>";

			}
			
			else if ($_SESSION['posicao'] == "1"){
				$_SESSION['info']= $_SESSION['questio'][4];	
				$_SESSION['o1pcao']= $_SESSION['questio'][5];
				$_SESSION['o2pcao']= $_SESSION['questio'][6];
				$_SESSION['o3pcao']= $_SESSION['questio'][7];		

				echo "<script>location.href='questionario.php';</script>";
				
			}
			
			else if ($_SESSION['posicao'] == "2"){
				$_SESSION['info']= $_SESSION['questio'][8];	
				$_SESSION['o1pcao']= $_SESSION['questio'][9];
				$_SESSION['o2pcao']= $_SESSION['questio'][10];
				$_SESSION['o3pcao']= $_SESSION['questio'][11];

				echo "<script>location.href='questionario.php';</script>";
				
			}
			
			else if ($_SESSION['posicao'] == "3"){
				$_SESSION['info']= $_SESSION['questio'][12];	
				$_SESSION['o1pcao']= $_SESSION['questio'][13];
				$_SESSION['o2pcao']= $_SESSION['questio'][14];
				$_SESSION['o3pcao']= $_SESSION['questio'][15];

				echo "<script>location.href='questionario.php';</script>";
				
			}
			
			else if ($_SESSION['posicao'] == "4"){
				$_SESSION['info']= $_SESSION['questio'][16];	
				$_SESSION['o1pcao']= $_SESSION['questio'][17];
				$_SESSION['o2pcao']= $_SESSION['questio'][18];
				$_SESSION['o3pcao']= $_SESSION['questio'][19];

				echo "<script>location.href='questionario.php';</script>";
				
			}
			else{
				//Página com resultados
				
				echo "<script>location.href='resultado.php';</script>";
			}
		}
		
		
		$_SESSION['posicao']+= 1;
	
	}
?>