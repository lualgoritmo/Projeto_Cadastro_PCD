<?php
    abstract class conexao
	{
		protected $bd_amai;
		
		function __construct()
		{
			$parametros = "mysql:host=localhost;dbname=bd_amai;charset=utf8";
			try
			{
				$this -> bd_amai = new PDO($parametros, "root", "",
				array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			}
			catch(Exeption $e)
			{
				die($e->getMessage());
			}
		}
	}
?>