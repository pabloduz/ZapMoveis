<?php
	// Estabelece conexão com o BD
	// e configura conexão
	
	try{
		$db = new PDO('mysql:host=localhost;dbname=zapmoveis;charset=utf8','root', '' );
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $exception){
		echo "Erro: ". $exception->getMessage();
	}
?>