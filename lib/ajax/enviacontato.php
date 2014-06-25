<?php
	#cadastra email
	include('../../functions/banco.php');
	include('../../conf/tags.php');
	$banco = new banco;
	$banco->Conecta();
	
	$email = $_POST["email"];
	$Syntaxe='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';  
	
	if(preg_match($Syntaxe, $email)){

	}else{
		echo 'emailerrado';
	}
?>