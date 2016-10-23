<?php
	if(!isset($_SESSION)) {			
		session_start();
		
		$_SESSION['opcao']= [];
		$_SESSION['pos']= 0;

		$_SESSION['questio']= [];		
		$_SESSION['indice'] = 0;
		$_SESSION['posicao']= 0;
		
		$_SESSION['descricao']= "";
		$_SESSION['condicao']= [0,0,0,0];

	}		
	
	$_SESSION['info']= "Escolha uma das seguintes alternativas.";	
	$_SESSION['o1pcao']= "Casa";
	$_SESSION['o2pcao']= "Apartamento";
	$_SESSION['o3pcao']= "Sem preferência.";
	
	
	echo "<script>location.href='questionario.php';</script>";	
?>