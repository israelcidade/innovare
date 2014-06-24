<?php
	#include das funcoes da tela inico
	include('functions/banco-sobre.php');

	#Instancia o objeto
	$banco = new bancosobre();

	#Imprimi valores
	$Conteudo = $banco->CarregaHtml('sobre');
?>