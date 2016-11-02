<?php	
	include_once 'conexao.php';

	if(!isset($_SESSION)) {			
		session_start();
	}
	
	if ($_SESSION['opcao'][0] == "1"){
		
		$_SESSION['descricao'] = $_SESSION['descricao'] . "Casa ";
	}
	else if ($_SESSION['opcao'][0] == "2"){
		
		$_SESSION['descricao'] = $_SESSION['descricao'] . "Apartamento ";
	} 
	else {
		$_SESSION['descricao'] = $_SESSION['descricao'] . "Casa ou apartamento ";
	}
	
	if ($_SESSION['opcao'][2] == "1"){
		
		$_SESSION['descricao'] = $_SESSION['descricao'] . "com aparência moderna ";
	}
	else if ($_SESSION['opcao'][2] == "2"){
		
		$_SESSION['descricao'] = $_SESSION['descricao'] . "com aparência clássica ";
	} 
	
	if ($_SESSION['opcao'][3] == "1"){
		
		$_SESSION['descricao'] = $_SESSION['descricao'] . "em local de clima quente ";
	}
	else if ($_SESSION['opcao'][2] == "2"){
		
		$_SESSION['descricao'] = $_SESSION['descricao'] . "em local de clima temperado ";
	} 
	else{
		$_SESSION['descricao'] =  $_SESSION['descricao'] . "em local de clima agradável ";
	}
	
	if ($_SESSION['opcao'][4] == "1"){
		
		$_SESSION['descricao'] = $_SESSION['descricao'] . "com localização na zona rural";
	}
	else if ($_SESSION['opcao'][4] == "2") {
		
		$_SESSION['descricao'] = $_SESSION['descricao'] . "com localização na zona urbana";
	} 
	
	if ($_SESSION['opcao'][5] == "1"){
		
		$_SESSION['descricao'] = $_SESSION['descricao'] . ", com pelo menos dois quartos ";
	}
	else {
		$_SESSION['descricao'] = $_SESSION['descricao'] . ", com mais de dois quartos ";
	}
	
	if ($_SESSION['opcao'][6] == "1"){
		
		$_SESSION['descricao'] = $_SESSION['descricao'] . "e com vaga de estacionamento. ";
	}
	else {
		$_SESSION['descricao'] = $_SESSION['descricao'] . "e sem necessiade de vaga de estacionamento. ";
	}
	
	$aleatorio= rand(1,2);
	
	if ($_SESSION['condicao'][0] == "1"){

		if ($_SESSION['opcao'][7] == "1"){

			$_SESSION['descricao'] = $_SESSION['descricao'] . "Que tenha pátio ";
		}
		else {
			$_SESSION['descricao'] = $_SESSION['descricao'] . "Que não necessite de pátio ";
		}
		
		if ($_SESSION['opcao'][8] == "1"){

			$_SESSION['descricao'] = $_SESSION['descricao'] . "e piscina";
		}
		else {
			$_SESSION['descricao'] = $_SESSION['descricao'] . "e sem necessidade de piscina";
		}
		
		if ($_SESSION['condicao'][2] == "1"){
			
			if ($_SESSION['opcao'][9] == "1"){

				$_SESSION['descricao'] = $_SESSION['descricao'] . ", fornecendo proximidade à praia ";
			}
			else if ($_SESSION['opcao'][9] == "2") {
				$_SESSION['descricao'] = $_SESSION['descricao'] . ", não fornecendo proximidade à praia ";
			}	
		}else{
		
			if ($_SESSION['condicao'][3] == "1"){
				
				if ($_SESSION['opcao'][9] == "1"){
					
					$_SESSION['descricao'] = $_SESSION['descricao'] . ", fornecendo proximidade a montanhas.";
				}
				else if ($_SESSION['opcao'][9] == "2")  {
					
					$_SESSION['descricao'] = $_SESSION['descricao'] . ", fornecendo proximidade a planaltos ";
				}			
			}else{
				$_SESSION['descricao'] = $_SESSION['descricao'] . ", sem necessidade de proximidade a locais turísticos ";
			}
		}
		
		if ($_SESSION['condicao'][4] == "1"){
			
			if ($_SESSION['opcao'][10] == "1"){

				$_SESSION['descricao'] = $_SESSION['descricao'] . "e perto da natureza.";
			}
			else if ($_SESSION['opcao'][10] == "2") {
				
				$_SESSION['descricao'] = $_SESSION['descricao'] . "e longe da natureza.";
			}	
		}else{
			$_SESSION['descricao'] = $_SESSION['descricao'] . "e da natureza.";
		}
		
		if($_SESSION['opcao'][1] == 0){
			$_SESSION['opcao'][1]= $aleatorio;
		}	

		if($_SESSION['opcao'][2] == 0){
			$_SESSION['opcao'][2]= $aleatorio;
		}			
	
		if($_SESSION['opcao'][9] == 0){
			$_SESSION['opcao'][9]= $aleatorio;
		}
	
		if($_SESSION['opcao'][10] == 0){
			$_SESSION['opcao'][10]= $aleatorio;
		}	
		
		$modelo= $_SESSION['opcao'][0]; 
		$valor= $_SESSION['opcao'][1];
		$estilo= $_SESSION['opcao'][2]; 
		$piscina= $_SESSION['opcao'][8];
		$garagem= $_SESSION['opcao'][9];
		
		
		$sql = "select id from imoveis where modelo = '$modelo' and valor = '$valor' and piscina= '$piscina' and garagem= '$garagem' and estilo= '$estilo'";
		$resultado= $db->query($sql);
		
		$imovel = $resultado->fetch(PDO::FETCH_ASSOC);
		$imovel= $imovel['id'];	
				
		if($imovel){
			//Pesquisa com resultado
					
		}else{
			$sql = "select id from imoveis where modelo = '$modelo' and valor = '$valor'" ;
			$resultado= $db->query($sql);
		
			$imovel = $resultado->fetch(PDO::FETCH_ASSOC);
			$imovel= $imovel['id'];	
		}
				
		$_SESSION['id']= $imovel;

	}

	else if ($_SESSION['condicao'][1] == "1") {
	
		if ($_SESSION['opcao'][8] == "1"){

			$_SESSION['descricao'] = $_SESSION['descricao'] . "Que tenha academia ou quadra de esportes";
		}
		else {
			$_SESSION['descricao'] = $_SESSION['descricao'] . "Que tenha ou não academia ou quadra de esportes";
		}
		
		if ($_SESSION['condicao'][2] == "1"){
			
			if ($_SESSION['opcao'][9] == "1"){

				$_SESSION['descricao'] = $_SESSION['descricao'] . ", fornecendo proximidade à praia ";
			}
			else if ($_SESSION['opcao'][9] == "2") {
				$_SESSION['descricao'] = $_SESSION['descricao'] . ", não fornecendo proximidade à praia ";
			}	
		}else{
		
			if ($_SESSION['condicao'][3] == "1"){
				
				if ($_SESSION['opcao'][9] == "1"){
					
					$_SESSION['descricao'] = $_SESSION['descricao'] . ", fornecendo proximidade a montanhas ";
				}
				else if ($_SESSION['opcao'][9] == "2")  {
					
					$_SESSION['descricao'] = $_SESSION['descricao'] . ", fornecendo proximidade a planaltos ";
				}			
			}else{
				$_SESSION['descricao'] = $_SESSION['descricao'] . ", sem necessidade de proximidade a locais turísticos ";
			}
		}
		
		if ($_SESSION['condicao'][4] == "1"){
			
			if ($_SESSION['opcao'][10] == "1"){

				$_SESSION['descricao'] = $_SESSION['descricao'] . "e perto da natureza.";
			}
			else if ($_SESSION['opcao'][10] == "2") {
				
				$_SESSION['descricao'] = $_SESSION['descricao'] . "e longe da natureza.";
			}	
		}else{
			$_SESSION['descricao'] = $_SESSION['descricao'] . "e da natureza.";
		}
		
		if($_SESSION['opcao'][1] == 0){
			$_SESSION['opcao'][1]= $aleatorio;
		}	
	
		if($_SESSION['opcao'][7] == 0){
			$_SESSION['opcao'][7]= $aleatorio;
		}
		
	
		$modelo= $_SESSION['opcao'][0]; 
		$valor= $_SESSION['opcao'][1];
		$academia= $_SESSION['opcao'][7]; 

		
		$sql = "select id from imoveis where modelo = '$modelo' and valor = '$valor' and academia= '$academia'";
		$resultado= $db->query($sql);
		
		$imovel = $resultado->fetch(PDO::FETCH_ASSOC);
		$imovel= $imovel['id'];	
		
		if($imovel){
			//Pesquisa com resultado
			
		}else{
			$sql = "select id from imoveis where modelo = '$modelo' and valor = '$valor'" ;
			$resultado= $db->query($sql);
		
			$imovel = $resultado->fetch(PDO::FETCH_ASSOC);
			$imovel= $imovel['id'];	
		}
				
		$_SESSION['id']= $imovel;
		
	} 
	else{
		$modelo= $aleatorio;
		$valor= $_SESSION['opcao'][1];
		
		$sql = "select id from imoveis where modelo= '$modelo' and valor = '$valor'";
		$resultado= $db->query($sql);
		
		$imovel = $resultado->fetch(PDO::FETCH_ASSOC);
		$imovel= $imovel['id'];	
		
		$_SESSION['id']= $imovel;
		
		if ($valor == 0){
			$valor= $aleatorio;
			
			$sql = "select id from imoveis where modelo = '$modelo' and valor = '$valor'";
			$resultado= $db->query($sql);
		
			$imovel = $resultado->fetch(PDO::FETCH_ASSOC);
			$imovel= $imovel['id'];	
		
			$_SESSION['id']= $imovel;
			
		}
	}
	
	//Página com resultados	
	
	echo "<script>location.href='exibicao.php';</script>";
	
	//echo $_SESSION['descricao'];
	
	
	?>