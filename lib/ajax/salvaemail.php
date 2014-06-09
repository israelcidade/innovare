<?php
	#Funcao principal do acompanhamento - requisicao ajax chamada no arquivo html modelo.html
	include('../../functions/banco.php');
	include('../../conf/tags.php');
	$banco = new banco;
	$banco->Conecta();
	
	$email = $_POST["email"];
	
	if($email){
		$Sql = "Insert into c_emails (email) VALUES ('".$email."')";
		$result = $banco->Execute($Sql);
		echo true;
	}else{
		echo false;
	}
?>