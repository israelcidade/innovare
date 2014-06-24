<?php
	#include das funcoes da tela inico
	include('functions/banco-externo.php');

	#Instancia o objeto
	$banco = new bancoexterno();

	#Imprimi valores
	$Conteudo = $banco->CarregaHtml('externo');
?>