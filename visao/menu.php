<?php
	require_once "";
	if(isset($_SESSION["usuario"]))
	{
		echo '
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php?controle=controleUsuario&metodo=sair">Sair</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php?controle=controleUsuario&metodo=inserirAtividades" class="nav-link">INSERIR ATIVIDADES</a></li>
			  <li class="nav-item dropdown" >                  
				<a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
				  CADASTRO
				</a>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
						  <a class="dropdown-item" href="index.php?controle=controleUsuario&metodo=cadastrarFuncionario">Funcionario</a>
						  <a class="dropdown-item" href="index.php?controle=controleUsuario&metodo=cadastrarPCD">Cadastro PNE</a>
					</div>
			</li>
			
			<li class="nav-item"><a href="index.php?controle=controleUsuario&metodo=inserriGaleria" class="nav-link"> ADCIONAR FOTOS</a></li>
				<li class="nav-item dropdown" >                  


				
					<a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
					LISTAR
					</a>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
						<a class="dropdown-item" href="index.php?controle=controleUsuario&metodo=listarFuncionarios">Funcionario</a>
						<a class="dropdown-item" href="index.php?controle=controleUsuario&metodo=listarpcd">Usuário PNE</a>
						<a class="dropdown-item" href="index.php?controle=controleUsuario&metodo=listarAtividades">Atividades</a>
						<a class="dropdown-item" href="index.php?controle=controleUsuario&metodo=listarGaleria">Galeria</a>
					</div>
				</li>
			<li class="nav-item"><a href="index.php?controle=controleUsuario&metodo=contato" class="nav-link">CONTATO</a></li>
	       
	        </ul>
	      </div>
	    </div>
	  </nav>
		';
	}
	else {
		echo '
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container">
			  <a class="navbar-brand" href="index.php">Inicio</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			  </button>
	
			  <div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
				  <li class="nav-item"><a href="index.php?controle=controleUsuario&metodo=atividades" class="nav-link">ATIVIDADES</a></li>
				<li class="nav-item"><a href="index.php?controle=controlePrincipal&metodo=login" class="nav-link">LOGIN</a></li>
				  <li class="nav-item"><a href="index.php?controle=controleUsuario&metodo=sobre" class="nav-link">SOBRE</a></li>
				  <li class="nav-item"><a href="index.php?controle=controleUsuario&metodo=galeria" class="nav-link"> FOTOS</a></li>
				  <li class="nav-item"><a href="index.php?controle=controleUsuario&metodo=contato" class="nav-link">CONTATO</a></li>
				</ul>
			  </div>
			</div>
		  </nav>
		';
	}
?>