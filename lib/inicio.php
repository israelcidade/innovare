<?php
	#include das funcoes da tela inico
	include('functions/banco-inicio.php');

	#Instancia o objeto
	$banco = new bancoinicio();
teste
	#Imprimi valores
	$Conteudo = $banco->CarregaHtml('inicio');
?>