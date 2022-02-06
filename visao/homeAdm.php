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
    <!--INICIO NAV COM LOGIN-->
    <?php
		require_once "visao/menu.php";
	?>
	  
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('visao/images/LUCAPA.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center">
          <div class="col-md-6 ftco-animate d-flex align-items-end">
          	<div class="text w-100">
	            
	            
          </div>
          
              
          
        </div>
      </div>
    </div>
<br>
        <br>
		

    <section class="ftco-section ftco-no-pb ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url(visao/images/about-1.jpg);">
					</div>
					<div class="col-md-6 wrap-about px-md-5 ftco-animate py-5 bg-light">
	          <div class="heading-section">
	          	<span class="subheading">Bem Vindo nossa Pagina</span>
	            <h2 class="mb-4">A Instituição!</h2>

	            <p>A Instituição de Assistência ao Individuo Deficiente – INSTITUIÇÃO, entidade sem fins lucrativos, que foi fundada por um grupo de PCDs que se reuniram com o objetivo de fundarem uma entidade de prestação de serviços inovadora na época; atendimento a deficientes físicos, auditivos, visuais e múltiplos.</p>

	            
	          </div>

					</div>
				</div>
			</div>
		</section>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">PROGRAMAS E</span>
            <h2>BEM VINDO ADM</h2>
          </div>
        </div>

        <div class="row d-flex">
        <?php
            $contador = 0;
            foreach($ret as $atividade){
              $dataC = explode("-",$atividade->diaDaSemana);
              $mesesDoAno = ["janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro"];
              $imagens = ["visao/images/image_1.jpg", "visao/images/image_2.jpg", "visao/images/image_3.jpg", "visao/images/image_4.jpg", "visao/images/image_5.jpg", "visao/images/image_6.jpg", "visao/images/image_7.jpg", "visao/images/image_8.jpg", "visao/images/image_9.jpg"];
              $dia = intval($dataC[2]);
              $mes = $mesesDoAno[intval($dataC[1]) - 1];
              $ano = $dataC[0];

              echo "
                <div class='col-md-4 d-flex ftco-animate'>
                  <div class='blog-entry justify-content-end'>
                    <div class='text text-center'>
                      <a  class='block-20 img' style='background-image: url({$imagens[$contador]});'>
                      </a>
                      <div class='meta text-center mb-2 d-flex align-items-center justify-content-center'>
                        <div>
                          <span class='day'>{$dia}</span>
                          <span class='mos'>{$mes}</span>
                          <span class='yr'>{$ano}</span>
                        </div>
                      </div>
                      <h3 class='heading mb-3'>{$atividade -> nomeatividade}</h3>
                      <p>{$atividade -> descricao}</p>
                    </div>
                  </div>
                </div>
              ";

              $contador++;
              if($contador == 8)
              $contador = 0;
            }
          ?>
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