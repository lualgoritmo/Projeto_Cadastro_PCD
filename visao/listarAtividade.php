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
	<link rel="stylesheet" href="visao/css/form.css">
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
    
	  <?php
		require_once "visao/menu.php";
	?>
    <!-- END nav -->
    <div class="container">
    <div class="table-responsive">
    <table class="table table-sm table-bordered">
          <thead class="thead-light" thead-bordered">
            <tr>
              <th>Nome</th>
              <th>Dia da semana</th>
              <th>Horário</th>
              <th>Descrição</th>
              <th>Nome do professor</th>
              <th>Visualizar</th>
              <th>Deletar</th>
            </tr>
          </thead>
          <tbody>
          <?php
           foreach($ret as $atividade){
             echo "
             <tr>
             <td>{$atividade -> nomeatividade}</td>
             <td>";
             $date = date_create($atividade -> diaDaSemana);
             echo date_format($date, 'd/m/Y');
             echo "</td>
             <td>{$atividade -> horarioatividade}</td>
             <td>{$atividade -> descricao}</td>
             <td>{$atividade -> nomeProfessor}</td>
             <td>
                <button class='btn btn btn-warning'><a href='index.php?controle=controleUsuario&metodo=editarAtividade&idAtividade={$atividade -> idatividade}'>Visualizar</a></button>
             </td>
             <td>
                <button class='btn btn btn-light'><a href='index.php?controle=controleUsuario&metodo=deletarAtividade&idAtividade={$atividade -> idatividade}'>Excluir</a></button>
             </td>
           </tr>
             ";
           }
          ?>
            
          </tbody>
          </table>
          </div>
        </div>
			
	
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