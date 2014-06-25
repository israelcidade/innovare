<?php
	#cadastra email
	include('../../functions/banco.php');
	include('../../conf/tags.php');
	$banco = new banco;
	$banco->Conecta();
	
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$assunto = $_POST["assunto"];
	$Syntaxe='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';  
	
	if(preg_match($Syntaxe, $email)){
		if($banco->EnviaEmailContato($nome,$email,$assunto)){
			echo 'ok';
		}else{
			echo 'not';
		}
	}else{
		echo 'emailerrado';
	}
?>