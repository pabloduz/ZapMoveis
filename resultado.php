<?php	
	include_once 'conexao.php';

	if(!isset($_SESSION)) {			
		session_start();
	}
	
	if ($_SESSION['opcao'][0] == "1"){
		
		$_SESSION['descricao'] = $_SESSION['descricao'] . "Casa";
	}
	else if ($_SESSION['opcao'][0] == "2"){
		
		$_SESSION['descricao'] = $_SESSION['descricao'] . "Apartamento";
	} 
	else {
		$_SESSION['descricao'] = $_SESSION['descricao'] . "Casa ou apartamento";
	}
	
	if ($_SESSION['opcao'][2] == "1"){
		
		$_SESSION['descricao'] = $_SESSION['descricao'] . " com aparência moderna";
	}
	else if ($_SESSION['opcao'][2] == "2"){
		
		$_SESSION['descricao'] = $_SESSION['descricao'] . " com aparência clássica";
	}
	else{
		$_SESSION['descricao'] = $_SESSION['descricao'] . " com aparência sofisticada";
	}
	
	if ($_SESSION['opcao'][3] == "1"){
		
		$_SESSION['descricao'] = $_SESSION['descricao'] . " em local de clima quente";
	}
	else if ($_SESSION['opcao'][3] == "2"){
		
		$_SESSION['descricao'] = $_SESSION['descricao'] . " em local de clima temperado";
	} 
	else{
		$_SESSION['descricao'] =  $_SESSION['descricao'] . " em local de clima agradável durante o ano";
	}
	
	if ($_SESSION['opcao'][4] == "1"){
		
		$_SESSION['descricao'] = $_SESSION['descricao'] . " com localização na zona rural";
	}
	else if ($_SESSION['opcao'][4] == "2") {
		
		$_SESSION['descricao'] = $_SESSION['descricao'] . " com localização na zona urbana";
	}
	
	if ($_SESSION['opcao'][5] == "1"){
		
		$_SESSION['descricao'] = $_SESSION['descricao'] . ", dispondo de pelo menos dois quartos";
	}
	else {
		$_SESSION['descricao'] = $_SESSION['descricao'] . ", dispondo de mais de dois quartos";
	}
	
	if ($_SESSION['opcao'][6] == "1"){
		
		$_SESSION['descricao'] = $_SESSION['descricao'] . " e vaga de estacionamento.";
	}
	else if ($_SESSION['opcao'][6] == "2") {
		
		$_SESSION['descricao'] = $_SESSION['descricao'] . " e dispensando vaga de estacionamento.";
	}
	else{
		$_SESSION['descricao'] = $_SESSION['descricao'] . " e disponibilizando vaga de estacionamento.";
	}
	
	$aleatorio= rand(1,2);
	
	if ($_SESSION['condicao'][0] == "1"){

		if ($_SESSION['opcao'][7] == "1"){

			$_SESSION['descricao'] = $_SESSION['descricao'] . " Que tenha pátio";
		}
		else {
			$_SESSION['descricao'] = $_SESSION['descricao'] . " Que possa ter pátio";
		}
		
		if ($_SESSION['opcao'][8] == "1"){

			$_SESSION['descricao'] = $_SESSION['descricao'] . " e tenha piscina";
		}
		else if ($_SESSION['opcao'][8] == "2") {
		
			$_SESSION['descricao'] = $_SESSION['descricao'] . " e não tenha piscina";
		}
		else {
			$_SESSION['descricao'] = $_SESSION['descricao'] . " e possa ter piscina";
		}
		
		if ($_SESSION['condicao'][2] == "1"){
			
			if ($_SESSION['opcao'][9] == "1"){

				$_SESSION['descricao'] = $_SESSION['descricao'] . ", fornecendo proximidade à praia";
			}
			else if ($_SESSION['opcao'][9] == "2") {
				
				$_SESSION['descricao'] = $_SESSION['descricao'] . ", dispensando proximidade à praia";
			}
			else{	
				$_SESSION['descricao'] = $_SESSION['descricao'] . ", sem necessidade de proximidade a pontos turísticos";
			}	
		} 
		else if ($_SESSION['condicao'][3] == "1"){
				
			if ($_SESSION['opcao'][9] == "1"){
				
				$_SESSION['descricao'] = $_SESSION['descricao'] . ", fornecendo proximidade a montanhas";
			}
			else if ($_SESSION['opcao'][9] == "2")  {
				
				$_SESSION['descricao'] = $_SESSION['descricao'] . ", fornecendo proximidade a planaltos";
			}
			else{
				$_SESSION['descricao'] = $_SESSION['descricao'] . ", sem necessidade de proximidade a pontos turísticos";
			}
		} 
		else {
			$_SESSION['descricao'] = $_SESSION['descricao'] . ", sem necessidade de proximidade a pontos turísticos";
		} 
	
		if ($_SESSION['condicao'][4] == "1"){
			
			if ($_SESSION['opcao'][10] == "1"){

				$_SESSION['descricao'] = $_SESSION['descricao'] . " e perto da natureza.";
			}
			else if ($_SESSION['opcao'][10] == "2") {
				
				$_SESSION['descricao'] = $_SESSION['descricao'] . " e afastado da natureza.";	
			}
			else{
				$_SESSION['descricao'] = $_SESSION['descricao'] . " e à natureza.";
			}
		} else{
			$_SESSION['descricao'] = $_SESSION['descricao'] . " e à natureza.";
		}
		
		
		if($_SESSION['opcao'][1] == 0){
			$_SESSION['opcao'][1]= $aleatorio;
		}	

		if($_SESSION['opcao'][2] == 0){
			$_SESSION['opcao'][2]= $aleatorio;
		}			
	
		if($_SESSION['opcao'][6] == 0){
			$_SESSION['opcao'][6]= $aleatorio;
		}
	
		if($_SESSION['opcao'][8] == 0){
			$_SESSION['opcao'][8]= $aleatorio;
		}	
		
		$modelo= $_SESSION['opcao'][0]; 
		$valor= $_SESSION['opcao'][1];
		$estilo= $_SESSION['opcao'][2]; 
		$garagem= $_SESSION['opcao'][6];
		$piscina= $_SESSION['opcao'][8];
		
		
		$sql = "select id from imoveis where modelo = '$modelo' and valor = '$valor' and estilo= '$estilo' and garagem= '$garagem' and piscina= '$piscina'";
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
	
		if ($_SESSION['opcao'][7] == "1"){

			$_SESSION['descricao'] = $_SESSION['descricao'] . " Que tenha academia ou quadra de esportes";
		}
		else {
			$_SESSION['descricao'] = $_SESSION['descricao'] . " Que tenha ou não academia ou quadra de esportes";
		}
		
		if ($_SESSION['condicao'][2] == "1"){
			
			if ($_SESSION['opcao'][8] == "1"){

				$_SESSION['descricao'] = $_SESSION['descricao'] . ", fornecendo proximidade à praia";
			}
			else if ($_SESSION['opcao'][8] == "2") {
				
				$_SESSION['descricao'] = $_SESSION['descricao'] . ", dispensando proximidade à praia";
			}
			else{	
				$_SESSION['descricao'] = $_SESSION['descricao'] . ", sem necessidade de proximidade a pontos turísticos";
			}	
		} 
		else if ($_SESSION['condicao'][3] == "1"){
				
			if ($_SESSION['opcao'][8] == "1"){
				
				$_SESSION['descricao'] = $_SESSION['descricao'] . ", fornecendo proximidade a montanhas";
			}
			else if ($_SESSION['opcao'][8] == "2")  {
				
				$_SESSION['descricao'] = $_SESSION['descricao'] . ", fornecendo proximidade a planaltos";
			}
			else{
				$_SESSION['descricao'] = $_SESSION['descricao'] . ", sem necessidade de proximidade a pontos turísticos";
			}
		} 
		else {
			$_SESSION['descricao'] = $_SESSION['descricao'] . ", sem necessidade de proximidade a pontos turísticos";
		} 
	
	
		if ($_SESSION['condicao'][4] == "1"){
			
			if ($_SESSION['opcao'][9] == "1"){

				$_SESSION['descricao'] = $_SESSION['descricao'] . " e perto da natureza.";
			}
			else if ($_SESSION['opcao'][9] == "2") {
				
				$_SESSION['descricao'] = $_SESSION['descricao'] . " e afastado da natureza.";	
			}
			else{
				$_SESSION['descricao'] = $_SESSION['descricao'] . " e à natureza.";
			}
		} else{
			$_SESSION['descricao'] = $_SESSION['descricao'] . " e à natureza.";
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