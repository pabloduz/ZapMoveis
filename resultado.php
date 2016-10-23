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
		
		$_SESSION['descricao'] = $_SESSION['descricao'] . "em local de clima quente ";
	}
	else if ($_SESSION['opcao'][2] == "2"){
		
		$_SESSION['descricao'] = $_SESSION['descricao'] . "em local de clima temperado ";
	} 
	else{
		$_SESSION['descricao'] =  $_SESSION['descricao'] . "em local de clima quente ou temperado ";
	}
	
	if ($_SESSION['opcao'][3] == "1"){
		
		$_SESSION['descricao'] = $_SESSION['descricao'] . "inserido na zona urbana";
	}
	else if ($_SESSION['opcao'][3] == "2") {
		
		$_SESSION['descricao'] = $_SESSION['descricao'] . "inserido na zona rural";
	} 
	else{
		$_SESSION['descricao'] = $_SESSION['descricao'] . "na zona urbana ou rural";
	}
	
	if ($_SESSION['opcao'][4] == "1"){
		
		$_SESSION['descricao'] = $_SESSION['descricao'] . ", com o limite de dois quartos ";
	}
	else {
		$_SESSION['descricao'] = $_SESSION['descricao'] . ", com pelo menos dois quartos ";
	}
	
	if ($_SESSION['opcao'][6] == "1"){
	
		$_SESSION['descricao'] = $_SESSION['descricao'] . "e que apresente proximidade ao comércio e pontos turísticos. ";
	}
	else {
		$_SESSION['descricao'] = $_SESSION['descricao'] . "e que apresente boa vizinhança. ";
	}
		
	$aleatorio= rand(1,2);
	
	if ($_SESSION['condicao'][0] == "1"){

		if ($_SESSION['opcao'][8] == "1"){

			$_SESSION['descricao'] = $_SESSION['descricao'] . "Que tenha pátio ";
		}
		else {
			$_SESSION['descricao'] = $_SESSION['descricao'] . "Que tenha ou não pátio ";
		}
		
		if ($_SESSION['opcao'][9] == "1"){

			$_SESSION['descricao'] = $_SESSION['descricao'] . "e piscina";
		}
		else {
			$_SESSION['descricao'] = $_SESSION['descricao'] . "e com ou sem piscina";
		}
		
		if ($_SESSION['condicao'][2] == "1"){
			
			if ($_SESSION['opcao'][10] == "1"){

				$_SESSION['descricao'] = $_SESSION['descricao'] . ", fornecendo vaga de estacionamento.";
			}
			else {
				$_SESSION['descricao'] = $_SESSION['descricao'] . ", fornecendo ou não vaga de estacionamento.";
			}	
		}else{
			$_SESSION['descricao'] = $_SESSION['descricao'] . ", sendo ponto frequente de transporte público.";
		}
		
		if($_SESSION['opcao'][1] == 0){
			$_SESSION['opcao'][1]= $aleatorio;
		}	
		
		if($_SESSION['opcao'][9] == 0){
			$_SESSION['opcao'][9]= $aleatorio;
		}
	
		if($_SESSION['opcao'][10] == 0){
			$_SESSION['opcao'][10]= $aleatorio;
		}	
		
		$modelo= $_SESSION['opcao'][0]; 
		$valor= $_SESSION['opcao'][1];
		$piscina= $_SESSION['opcao'][9];
		$garagem= $_SESSION['opcao'][10];
		
		
		$sql = "select id from imoveis where modelo = '$modelo' and valor = '$valor' and piscina= '$piscina' and garagem= '$garagem'" ;
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

				$_SESSION['descricao'] = $_SESSION['descricao'] . ", fornecendo vaga de estacionamento.";
			}
			else {
				$_SESSION['descricao'] = $_SESSION['descricao'] . ", fornecendo ou não vaga de estacionamento.";
			}
			
		}else{
			$_SESSION['descricao'] = $_SESSION['descricao'] . ", sendo ponto frequente de transporte público.";
		}
		
		if($_SESSION['opcao'][1] == 0){
			$_SESSION['opcao'][1]= $aleatorio;
		}	
	
		if($_SESSION['opcao'][8] == 0){
			$_SESSION['opcao'][8]= $aleatorio;
		}
		
	
		$modelo= $_SESSION['opcao'][0]; 
		$valor= $_SESSION['opcao'][1];
		$academia= $_SESSION['opcao'][8]; 

		
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