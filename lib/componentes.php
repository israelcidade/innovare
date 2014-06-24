<?php
	#include das funcoes da tela inico
	include('functions/banco-componentes.php');

	#Instancia o objeto
	$banco = new bancocomponentes();

	#Imprimi valores
	$Conteudo = $banco->CarregaHtml('componentes');
?>