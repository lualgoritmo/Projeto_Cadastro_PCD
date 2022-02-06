<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <title>GESTÃO DE PESSOAS E INFORMAÇÃO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="visao/css/animate.css">
    
    <link rel="stylesheet" href="visao/css/owl.carousel.min.css">
    <link rel="stylesheet" href="visao/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="visao/css/magnific-popup.css">
    
    <link rel="stylesheet" href="visao/css/flaticon.css">
    <link rel="stylesheet" href="visao/css/style.css">
	<script>
		function validar(formulario){
			var retorno = true;
			for(var x = 0; x < formulario.length; x++){
				if(formulario[x].type != "submit")
				{
					if(formulario[x].name != "imagemLaudo")
					{
						if(formulario[x].value == ""){
							alert("Preencha o campo: " + formulario[x].placeholder);
							console.log(formulario[x]);
							retorno = false;
							break;
						}
					}
				}
			}
			return retorno;
		}
	</script>
  </head>
  <body>

  	<div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-flex align-items-center">
						<p class="mb-0 phone pl-md-2">
							<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +55 14 98824-8878</a> 
							<a href="#"><span class="fa fa-paper-plane mr-1"></span> luciano.slap@hotmail.com</a>
						</p>
					</div>
					<div class="col-md-6 d-flex justify-content-md-end">
						<div class="social-media">
			    		<p class="mb-0 d-flex">
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
			    		</p>
		        </div>
					</div>
				</div>
			</div>
		</div>

	<!-- INICIO DO NAV LOGADO-->
	<?php
		require_once "visao/menu.php";
	?>
    <!-- END nav -->

		<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">

				<div class="card">
					<div class="card">
						<div class="card-header">
							<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
							
								  <div class="collapse navbar-collapse" id="ftco-nav">
									<h5>Cadastro Pessoa com Necessidades Especiais</h5>
								</div>
						   </nav>
						</div>
					<div class="card-body corp">
						<form method="POST" enctype="multipart/form-data"  action="#" onsubmit="return validar(this)">
							<div class="form-group row">
								<div class="col-sm-10">
								  <input type="text" name="nome"placeholder="Nome"  class="form-control" id="staticEmail" placeholder="exemplo@com.br" value="<?php if(isset($_GET["idPCD"])){ echo $retPcd[0]->nome; }?>">
								</div>
							  </div>

							  <div class="form-group row">
								<label for="staticEmail" class="col-sm-5 col-form-label labelX">Data de Nascimento</label>
								<div class="col-sm-10">
								  <input type="date"placeholder="Data de Nascimento" name="dataNascimento" class="form-control" id="staticEmail" placeholder="exemplo@com.br" value="<?php if(isset($_GET["idPCD"])){ echo $retPcd[0]->dataNascimento; }?>">
								</div>
							  </div>
							  
							  <div class="form-group row">
								
								<div class="col-sm-10">
								  <input type="text"name="nomeMae" class="form-control" id="staticEmail" placeholder="Nome da Mãe" value="<?php if(isset($_GET["idPCD"])){ echo $retPcd[0]->nomeMae; }?>">
								</div>
							  </div>

							  <div class="form-group row">
					
								<div class="col-sm-10">
								  <input type="text" name="nomePai" class="form-control" id="staticEmail" placeholder="Nome do Pai" value="<?php if(isset($_GET["idPCD"])){ echo $retPcd[0]->nomePai; }?>">
								</div>
							  </div>
							  <div class="form-group row">
								<label for="staticEmail" class="col-sm-5 col-form-label labelX">Data de Matrícula</label>
								<div class="col-sm-10">
								  <input name="dataMatricula" type="date" class="form-control" id="staticEmail" value="<?php if(isset($_GET["idPCD"])){ echo $retPcd[0]->dataMatricula; }?>">
								</div>
							  </div>

							  <div class="form-group">
								<div class="col-sm-10">
								<label for="exampleFormControlSelect2" class="labelX">Sexo</label>
								<select name="sexo" class="form-control" id="exampleFormControlSelect2">
									<?php
										if(isset($_GET["idPCD"])){
											if($retPcd[0] -> sexoUsuario == 'F'){
												echo '
													<option value="M">Masculino</option>
													<option value="F" selected>Feminino</option>
												';
											}
											else{
												echo '
													<option value="M" selected>Masculino</option>
													<option value="F">Feminino</option>
												';
											}
										}
										else {
											echo '
												<option value="M">Masculino</option>
												<option value="F">Feminino</option>
											';
										}
									?>
								</select>
								</div>
							</div>

							<div class="form-group row">
								<div class="col-sm-10">
								  <input name="telefone" type="text" class="form-control" id="staticEmail" placeholder="Telefone" value="<?php if(isset($_GET["idPCD"])){ echo $retPcd[0]->numeroTelefone; }?>">
								</div>
							  </div>
							  

							  <?php
							 	 if(isset($_GET["idPCD"])) {
									$inputs = ["Analfabeto", "Ensino Fundamental", "Ensino Fundamental Incompleto", "Ensino Médio", "Ensino Médio Incompleto", "Superior", "Superior Incompleto"];
									
									echo '<div class="form-group">
									<div class="col-sm-10">
									<label for="escolaridade" class="labelX">Escolaridade</label>
									<select name="escolaridade" class="form-control" id="escolaridade" name="escolaridade">';

										foreach($inputs as $input) {
											if($retPcd[0]->escolaridade == $input){
												echo "<option value='$input' selected>$input</option>";
											}
											else {
												echo "<option value='$input'>$input</option>";
											}
											
										}

									echo '</select>
									</div>
							  </div>';
								  }
								  else {
									  echo '
									  <div class="form-group">
									<div class="col-sm-10">
									<label for="escolaridade" class="labelX">Escolaridade</label>
									<select name="escolaridade" class="form-control" id="escolaridade" name="escolaridade">
										<option value="Analfabeto">Analfabeto</option>
										<option value="Ensino Fundamental">Ensino Fundamental</option>
										<option value="Ensino Fundamental Incompleto">Ensino Fundamental Incompleto</option>
										<option value="Ensino Médio">Ensino Médio</option>
										<option value="Ensino Médio Incompleto">Ensino Médio Incompleto</option>
										<option value="Superior">Superior</option>
										<option value="Superior Incompleto">Superior Incompleto</option>
									</select>
									</div>
							  </div>
									  ';
								  }
							  ?>
							  
							  <div class="form-group row">
								
								<div class="col-sm-10">
								  <input name="logradouro" type="text" class="form-control" id="staticEmail" placeholder="Logradouro/Rua" value="<?php if(isset($_GET["idPCD"])){ echo $retPcd[0]->logradouro; }?>">
								</div>
							  </div>

							  <div class="form-group row">
								
								<div class="col-sm-10">
								  <input name="numeroResidencia" type="text" class="form-control" id="staticEmail" placeholder="Número de Residencia" value="<?php if(isset($_GET["idPCD"])){ echo $retPcd[0]->numeroResidencia; }?>">
								</div>
							  </div>

							  <div class="form-group row">
								<div class="col-sm-10">
								  <input name="cep" type="text" class="form-control" id="staticEmail" placeholder="Cep" value="<?php if(isset($_GET["idPCD"])){ echo $retPcd[0]->cep; }?>">
								</div>
							  </div>

							  <div class="form-group row">
								<div class="col-sm-10">
								  <input name="bairro" type="text" class="form-control" id="staticEmail" placeholder="Bairro" value="<?php if(isset($_GET["idPCD"])){ echo $retPcd[0]->bairro; }?>">
								</div>
							  </div>

							  <div class="form-group row">
								<div class="col-sm-10">
								  <input name="cidade" type="text" class="form-control" id="staticEmail" placeholder="Cidade" value="<?php if(isset($_GET["idPCD"])){ echo $retPcd[0]->cidade; }?>">
								</div>
							  </div>

							<div class="form-group row">
							  <div class="col-sm-10">
								<input type="text" name="email" class="form-control" id="staticEmail" placeholder="E-mail" value="<?php if(isset($_GET["idPCD"])){ echo $retPcd[0]->email; }?>">
							  </div>
							</div>

							<div class="form-group">
								<div class="col-sm-10">
								<label for="exampleFormControlSelect2" class="labelX">Estado</label>
									<select class="form-control" name="uf" id="exampleFormControlSelect2">
									<option value="SP">SP</option>
									<option value="RJ">RJ</option>
									<option value="ES">ES</option>
									<option value="BA">BA</option>
									<option value="SE">SE</option>
									</select>
								</div>
								<div class="form-group">
									<div class="col-sm-10">
									<label for="tipoDeficiencia" class="labelX">Tipo de Deficiência</label>
									<select name="tipoDeficiencia" class="form-control" id="tipoDeficiencia" name="tipoDeficiencia">
										<option value="paraplegico">Paraplégico</option>
										<option value="surdo">Surdo</option>
									</select>
									</div>
							  </div>
							 	<?php 
									if(isset($_GET["idPCD"])){
										echo "
											<div class='form-group' class='col-sm-10'>
												<img src='{$retPcd[0]->imagemLaudo}' style='width: 450px;'>
											</div>
										";
									}
								?>

							  <div class="form-group">
							  		<label for="imagemLaudo">Laudo Médico</label>
									<input type="file" class="form-control" name="imagemLaudo">
							  </div>
							  <div class="form-group" class="col-sm-10">
								<textarea name="descricaoDeficiencia" class="form-control" rows="3" placeholder="Descritivo da Deficiência"><?php if(isset($_GET["idPCD"])){ echo $retPcd[0]->descricao; }?></textarea>
							</div>
							  <input type="submit" class="btn btn-primary">
						</form>
					</div>
				</div>
			   </div>
			</div>
			</div>
		</div>


    </section>

    <footer><center>
      
		
	            
	  Todos os  Direitos Reservado Luciando &copy; Larissa <a href="https://projetolucianoelarissa.com" target="_blank">projetolucianoelarissa.com</a>
	 
	          </center>
      	
    </footer>


  <script src="visao/js/jquery.min.js"></script>
  <script src="visao/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="visao/js/popper.min.js"></script>
  <script src="visao/js/bootstrap.min.js"></script>
  <script src="visao/js/jquery.easing.1.3.js"></script>
  <script src="visao/js/jquery.waypoints.min.js"></script>
  <script src="visao/js/jquery.stellar.min.js"></script>
  <script src="visao/js/owl.carousel.min.js"></script>
  <script src="visao/js/jquery.magnific-popup.min.js"></script>
  <script src="visao/js/jquery.animateNumber.min.js"></script>
  <script src="visao/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="visao/js/google-map.js"></script>
  <script src="visao/js/main.js"></script>
    
  </body>
</html>