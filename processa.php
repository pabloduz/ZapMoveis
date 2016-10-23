<?php	
	if(!isset($_SESSION)) {			
		session_start();
	}		
	
	if(isset($_POST)){
		$_SESSION['opcao'][]= $_POST['opcao'];
		$_SESSION['pos']++;
	}
	
	if ($_SESSION['pos'] == "1"){
		$_SESSION['info'] = "Informe o valor pretendido.";
		$_SESSION['o1pcao'] = "Alto ";
		$_SESSION['o2pcao'] = "Baixo ";
		$_SESSION['o3pcao'] = "Sem preferência.";
			
		echo "<script>location.href='questionario.php';</script>";
	}
	
	else if ($_SESSION['pos'] == "2"){
		$_SESSION['info'] = "Qual clima lhe agrada mais?";
		$_SESSION['o1pcao'] = "Tropical ";
		$_SESSION['o2pcao'] = "Temperado ";
		$_SESSION['o3pcao'] = "Sem preferência.";
			
		echo "<script>location.href='questionario.php';</script>";
	}
	
	else if ($_SESSION['pos'] == "3"){
		$_SESSION['info'] = "Em que local gostaria de morar?";
		$_SESSION['o1pcao'] = "Zona urbana ";
		$_SESSION['o2pcao'] = "Zona rural ";
		$_SESSION['o3pcao'] = "Sem preferência.";
			
		echo "<script>location.href='questionario.php';</script>";
	}	
	
	else if ($_SESSION['pos'] == "4"){
		$_SESSION['info'] = "Escolha a quantidade de pessoas.";
		$_SESSION['o1pcao'] = "1 a 2 ";
		$_SESSION['o2pcao'] = "3 ou mais ";
		$_SESSION['o3pcao'] = "Sem certeza.";
				
		echo "<script>location.href='questionario.php';</script>";
	}	
	
	else if ($_SESSION['pos'] == "5"){
		$_SESSION['info'] = "Posssui ou possuíra carro?";
		$_SESSION['o1pcao'] = "Sim ";
		$_SESSION['o2pcao'] = "Não ";
		$_SESSION['o3pcao'] = "Sem certeza.";
				
		echo "<script>location.href='questionario.php';</script>";
	}
	
	else if ($_SESSION['pos'] == "6"){
		$_SESSION['info'] = "Perto de comércio e pontos turísticos?";
		$_SESSION['o1pcao'] = "Sim ";
		$_SESSION['o2pcao'] = "Não ";
		$_SESSION['o3pcao'] = "Sem preferência.";
				
		echo "<script>location.href='questionario.php';</script>";
	}
	
	else if ($_SESSION['pos'] == "7"){
		$_SESSION['info'] = "Com qual das atividades você mais se identifica?";
		$_SESSION['o1pcao'] = "Ficar em casa ";
		$_SESSION['o2pcao'] = "Sair com os amigos ";
		$_SESSION['o3pcao'] = "Sem preferência.";
				
		echo "<script>location.href='questionario.php';</script>";
		
	} else{
		
		echo "<script>location.href='personalizado.php';</script>";
	
	}
?>