<?php
	session_start();
	if($_GET)
	{
		$controle = $_GET["controle"];
		$metodo = $_GET["metodo"];
		
		require_once "controle/".$_GET["controle"].".php";
		$control = new $controle();
		$control -> $metodo();
	}
	else
	{
		require_once "controle/controleUsuario.php";
		$controle = new controleUsuario();
		$controle -> atividades();
	}
?>