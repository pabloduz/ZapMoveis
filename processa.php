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
		$_SESSION['o1pcao'] = "Até 1 milhão ";
		$_SESSION['o2pcao'] = "Mais de 1 milhão ";
		$_SESSION['o3pcao'] = "Sem preferência.";
			
		echo "<script>location.href='questionario.php';</script>";
	}
	
	
	else if ($_SESSION['pos'] == "2"){
		$_SESSION['info'] = "Qual a sua idade?";
		$_SESSION['o1pcao'] = "Até 30 anos ";
		$_SESSION['o2pcao'] = "Mais de 30 anos ";
		$_SESSION['o3pcao'] = "Sem certeza.";
				
		echo "<script>location.href='questionario.php';</script>";
	}
	
	else if ($_SESSION['pos'] == "3"){
		$_SESSION['info'] = "Qual clima lhe agrada mais?";
		$_SESSION['o1pcao'] = "Tropical ";
		$_SESSION['o2pcao'] = "Temperado ";
		$_SESSION['o3pcao'] = "Sem preferência.";
			
		echo "<script>location.href='questionario.php';</script>";
	}
	
	else if ($_SESSION['pos'] == "4"){
		$_SESSION['info'] = "Em que locais gostaria de morar?";
		$_SESSION['o1pcao'] = "Calmos ";
		$_SESSION['o2pcao'] = "Agitados ";
		$_SESSION['o3pcao'] = "Sem preferência.";
			
		echo "<script>location.href='questionario.php';</script>";
	}	
	
	else if ($_SESSION['pos'] == "5"){
		$_SESSION['info'] = "Escolha a quantidade de pessoas.";
		$_SESSION['o1pcao'] = "1 a 3 ";
		$_SESSION['o2pcao'] = "4 ou mais ";
		$_SESSION['o3pcao'] = "Sem certeza.";
				
		echo "<script>location.href='questionario.php';</script>";
	}	
	
	else if ($_SESSION['pos'] == "6"){
		$_SESSION['info'] = "Posssui ou possuíra veículo?";
		$_SESSION['o1pcao'] = "Sim ";
		$_SESSION['o2pcao'] = "Não ";
		$_SESSION['o3pcao'] = "Sem certeza.";
				
		echo "<script>location.href='questionario.php';</script>";
	}
	
	else{
		
		echo "<script>location.href='personalizado.php';</script>";
	
	}
?>