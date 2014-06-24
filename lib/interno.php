<?php
	#include das funcoes da tela inico
	include('functions/banco-interno.php');

	#Instancia o objeto
	$banco = new bancointerno();

	#Imprimi valores
	$Conteudo = $banco->CarregaHtml('interno');
?>