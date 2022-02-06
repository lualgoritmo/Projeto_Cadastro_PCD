<?php
	class controleUsuario{
		function cadastrarFuncionario(){
			if($_POST)
			{
				require_once "modelo/usuario.class.php";
				require_once "modelo/conexao.class.php";
				require_once "modelo/usuarioDAO.class.php";
				$usuario = new usuario(null, $_POST["nome"], $_POST["se''xo"], $_POST["cargo"], $_POST["dataAdmissao"], $_POST["dataNascimento"], null, $_POST["telefone"], $_POST["email"], $_POST["senha"], $_POST["salario"], $_POST["logradouro"], $_POST["numeroResidencia"], $_POST["bairro"], $_POST["cep"], $_POST["cidade"], $_POST["estado"], $_POST["perfil"]);
				$usuarioDAO = new usuarioDAO();
				$usuarioDAO->inserirUsuario($usuario);
				//echo "<script>alert('Usuario inserido com sucesso!')</script>";
				//echo '<script>window.location.href = "index.php?controle=controleUsuario&metodo=cadastrarFuncionario";</script>';
			}
			require_once "visao/cadastroFuncionario.php";
		}

		function editarFuncionario(){
			require_once "modelo/conexao.class.php";
			require_once "modelo/usuarioDAO.class.php";
			require_once "modelo/usuario.class.php";

			if($_POST)
			{
				if($_POST["dataDemissao"] == '')
					$_POST["dataDemissao"] = null;
				$usuario = new usuario($_GET["idUsuario"], $_POST["nome"], $_POST["sexo"], $_POST["cargo"], $_POST["dataAdmissao"], $_POST["dataNascimento"], $_POST["dataDemissao"], $_POST["telefone"], $_POST["email"], $_POST["senha"], $_POST["salario"], $_POST["logradouro"], $_POST["numeroResidencia"], $_POST["bairro"], $_POST["cep"], $_POST["cidade"], $_POST["estado"], $_POST["perfil"]);
				$usuarioDAO = new usuarioDAO();
				$usuarioDAO->atualizarUsuario($usuario);
				echo "<script>alert('Usuario atualizado com sucesso!')</script>";
				echo '<script>window.location.href = "index.php?controle=controleUsuario&metodo=listarFuncionarios";</script>';
			}

			$usuario = new usuario($_GET["idUsuario"]);
			$usuarioDAO = new usuarioDAO();
			$user = $usuarioDAO->buscarUsuarioPorId($usuario);
			require_once "visao/cadastroFuncionario.php";
		}
		

		function listarFuncionarios(){
				require_once "modelo/conexao.class.php";
				require_once "modelo/usuarioDAO.class.php";
				$usuarioDAO = new usuarioDAO();
				$ret = $usuarioDAO->buscarTodosUsuarios();
			require_once "visao/listarFuncionarios.php";
		}

		function excluirFuncionario(){
			require_once "modelo/conexao.class.php";
			require_once "modelo/usuario.class.php";
			require_once "modelo/usuarioDAO.class.php";

			$usuario = new Usuario($_GET["idUsuario"]);


			$usuariosDAO = new UsuarioDAO();
			$retFuncionario = $usuariosDAO -> verificarFuncionarioAtividades($usuario);
			

			if(count($retFuncionario) == 0){
				$usuariosDAO = new UsuarioDAO();
				$ret = $usuariosDAO -> deletarFuncionario($usuario);
				echo "<script>alert('Funcionario deletado com sucesso!')</script>";
			}
			else {
				echo "<script>alert('Funcionario não deletado. O funcionário possui atividades vinculadas!')</script>";
			}

			echo '<script>window.location.href = "index.php?controle=controleUsuario&metodo=listarFuncionarios";</script>';
		}

		function excluirPCD(){
			require_once "modelo/conexao.class.php";
			require_once "modelo/pcd.class.php";
			require_once "modelo/usuarioDAO.class.php";
			$usuario = new pcd($_GET["idPCD"]);

			$usuariosDAO = new UsuarioDAO();
			$retFuncionario = $usuariosDAO -> deletarPcd($usuario);
			
			echo "<script>alert('Usuario PCD deletado com sucesso!')</script>";
			echo '<script>window.location.href = "index.php?controle=controleUsuario&metodo=listarpcd";</script>';
		}


		function listarAtividades(){
			require_once "modelo/conexao.class.php";
			require_once "modelo/usuarioDAO.class.php";
			$usuarioDAO = new usuarioDAO();
			$ret = $usuarioDAO->buscarTodasAtividade();
			require_once "visao/listarAtividade.php";
		}

	function listarGaleria(){
		require_once "modelo/conexao.class.php";
		require_once "modelo/usuarioDAO.class.php";
		$usuarioDAO = new usuarioDAO();
		$ret = $usuarioDAO->buscarTodasGalerias();
		require_once "visao/listarGaleria.php";
	}

		function listarPcd(){
			require_once "modelo/conexao.class.php";
			require_once "modelo/usuarioDAO.class.php";
			$usuarioDAO = new usuarioDAO();
			$ret = $usuarioDAO->buscarTodosPcds();
			require_once "visao/listarPCD.php";
	}

		function cadastrarPCD(){
			if($_POST)
			{
				require_once "modelo/pcd.class.php";
				require_once "modelo/conexao.class.php";
				require_once "modelo/usuarioDAO.class.php";



				$mt = explode(' ', microtime());
				$nome = ((int)$mt[1]) * 1000 + ((int)round($mt[0] * 1000));
				$caminhoImagemAluno = "visao/images/laudos/".strval($nome).".jpg";

				$tipo = array("image/jpg", "image/jpeg", "image/png", "image/gif");
				if($_FILES["imagemLaudo"]["type"] != "")
				{
					if(!in_array($_FILES["imagemLaudo"]["type"], $tipo))
					{
						echo "<script>alert('Tipo de Imagem inválido')</script>";
						$erro = true;
					}
					else
					{
						move_uploaded_file($_FILES["imagemLaudo"]["tmp_name"], $caminhoImagemAluno);
					}
				}

				$pcd = new pcd(null, $_POST["nome"], $_POST["sexo"], $_POST["dataNascimento"], $_POST["nomeMae"], $_POST["nomePai"], $_POST["escolaridade"], $_POST["dataMatricula"], $_POST["email"], $_POST["logradouro"], $_POST["numeroResidencia"], $_POST["bairro"], $_POST["cep"], $_POST["cidade"], $_POST["uf"], $_POST["telefone"],$caminhoImagemAluno,$_SESSION["usuario"]["idusuario"], $_POST["tipoDeficiencia"], $_POST["descricaoDeficiencia"]);
			
				$usuarioDAO = new usuarioDAO();
				$usuarioDAO->inserirPCD($pcd);

				echo "<script>alert('Usuario inserido com sucesso!')</script>";
				echo '<script>window.location.href = "index.php?controle=controleUsuario&metodo=cadastrarPCD";</script>';
			}
			require_once "visao/cadastroPCD.php";
		}

		function editarPCD(){
			require_once "modelo/pcd.class.php";
			require_once "modelo/conexao.class.php";
			require_once "modelo/usuarioDAO.class.php";

			$pcd = new pcd($_GET["idPCD"]);
			$usuarioDAO = new usuarioDAO();
			$retPcd = $usuarioDAO->buscarPcdPorId($pcd);

			if($_POST)
			{
				$pcd = new pcd($_GET["idPCD"], $_POST["nome"], $_POST["sexo"], $_POST["dataNascimento"], $_POST["nomeMae"], $_POST["nomePai"], $_POST["escolaridade"], $_POST["dataMatricula"], $_POST["email"], $_POST["logradouro"], $_POST["numeroResidencia"], $_POST["bairro"], $_POST["cep"], $_POST["cidade"], $_POST["uf"], $_POST["telefone"],$retPcd[0]->imagemLaudo,$_SESSION["usuario"]["idusuario"], $_POST["tipoDeficiencia"], $_POST["descricaoDeficiencia"]);
				$usuarioDAO = new usuarioDAO();
				$usuarioDAO->alterarPCD($pcd, $retPcd[0]->idLaudoMedico);

				echo "<script>alert('Usuario atualizado com sucesso!')</script>";
				echo '<script>window.location.href = "index.php?controle=controleUsuario&metodo=listarpcd";</script>';
			}

			
			require_once "visao/cadastroPCD.php";
		}


		function editarAtividade(){
			require_once "modelo/atividade.class.php";
			require_once "modelo/conexao.class.php";
			require_once "modelo/usuarioDAO.class.php";

			if($_POST)
			{
				$atividade = new Atividades($_GET["idAtividade"], $_POST["atividade"],$_POST["nomeProfessor"],$_POST["diaSemana"],$_POST["horarioAtividade"], $_POST["descritioAtividade"]);
				
				$usuarioDAO = new usuarioDAO();
				$usuarioDAO->editarAtividade($atividade);

				echo "<script>alert('Atividade atualizada com sucesso!')</script>";
				echo '<script>window.location.href = "index.php?controle=controleUsuario&metodo=listarAtividades";</script>';
			}


			$atividade = new Atividades($_GET["idAtividade"]);
			$usuarioDAO = new usuarioDAO();
			$retAtividade = $usuarioDAO->buscarAtividadePorId($atividade);
			require_once "visao/insereAtividades.php";
		}


		function deletarAtividade(){
			require_once "modelo/atividade.class.php";
			require_once "modelo/conexao.class.php";
			require_once "modelo/usuarioDAO.class.php";


			$atividade = new Atividades($_GET["idAtividade"]);
			$usuarioDAO = new usuarioDAO();
			$retAtividade = $usuarioDAO->deletarAtividade($atividade);

			echo "<script>alert('Atividade deletada com sucesso!')</script>";
			echo '<script>window.location.href = "index.php?controle=controleUsuario&metodo=listarAtividades";</script>';

			require_once "visao/insereAtividades.php";
		}

		function homeAdm(){
			require_once "modelo/conexao.class.php";
			require_once "modelo/usuarioDAO.class.php";
			$usuarioDAO = new usuarioDAO();
			$ret = $usuarioDAO->buscarTodasAtividade();
			require_once "visao/homeAdm.php";
		}

		function atividades(){
			require_once "modelo/conexao.class.php";
			require_once "modelo/usuarioDAO.class.php";
			$usuarioDAO = new usuarioDAO();
			$ret = $usuarioDAO->buscarTodasAtividade();
			require_once "visao/atividades.php";
		}
		
		function contato(){
			require_once "visao/contato.php";
		}

		function sobre(){
			require_once "visao/sobre.php";
		}

		function galeria(){
			require_once "modelo/conexao.class.php";
			require_once "modelo/usuarioDAO.class.php";
			$usuarioDAO = new usuarioDAO();
			$galerias = $usuarioDAO->buscarTodasGalerias();
			require_once "visao/galeriadefotos.php";
		}

		function inserriGaleria(){
			if($_POST)
			{
				require_once "modelo/galeriaFoto.class.php";
				require_once "modelo/conexao.class.php";
				require_once "modelo/usuarioDAO.class.php";

				$mt = explode(' ', microtime());
				$nome = ((int)$mt[1]) * 1000 + ((int)round($mt[0] * 1000));
				$caminhoImagemAluno = "visao/images/galeria/".strval($nome).".jpg";

				$tipo = array("image/jpg", "image/jpeg", "image/png", "image/gif");
				if($_FILES["foto"]["type"] != "")
				{
					if(!in_array($_FILES["foto"]["type"], $tipo))
					{
						echo "<script>alert('Tipo de Imagem inválido')</script>";
						$erro = true;
					}
					else
					{
						move_uploaded_file($_FILES["foto"]["tmp_name"], $caminhoImagemAluno);
					}
				}

				$galeria = new GaleriaFotos(null, $caminhoImagemAluno, $_POST["descricaoImagem"],$_POST["dataEvento"],$_POST["dataPostagem"], $_SESSION["usuario"]["idusuario"]);
				
				$usuarioDAO = new usuarioDAO();
				$usuarioDAO->inserirGaleria($galeria);

				echo "<script>alert('Galeria inserido com sucesso!')</script>";
				echo '<script>window.location.href = "index.php?controle=controleUsuario&metodo=inserriGaleria";</script>';
			}
			require_once "visao/inserirFotosGaleria.php";
		}


		function deletarGaleria(){
				require_once "modelo/galeriaFoto.class.php";
				require_once "modelo/conexao.class.php";
				require_once "modelo/usuarioDAO.class.php";

				$galeria = new GaleriaFotos($_GET["idGaleria"]);
				
				$usuarioDAO = new usuarioDAO();
				$usuarioDAO->deletarGaleria($galeria);

				echo "<script>alert('Galeria deletada com sucesso!')</script>";
				echo '<script>window.location.href = "index.php?controle=controleUsuario&metodo=listarGaleria";</script>';
			
		}


		function editarGaleria(){
			require_once "modelo/galeriaFoto.class.php";
			require_once "modelo/conexao.class.php";
			require_once "modelo/usuarioDAO.class.php";

			$galeria = new GaleriaFotos($_GET["idGaleria"]);
			$usuarioDAO = new usuarioDAO();
			$retGaleriaFotos = $usuarioDAO->buscarGaleriaPorId($galeria);

			if($_POST)
			{

				$caminhoImagemAluno = '';

				if($_FILES["foto"]["name"] != ''){
					$mt = explode(' ', microtime());
					$nome = ((int)$mt[1]) * 1000 + ((int)round($mt[0] * 1000));
					$caminhoImagemAluno = "visao/images/galeria/".strval($nome).".jpg";

					$tipo = array("image/jpg", "image/jpeg", "image/png", "image/gif");
					if($_FILES["foto"]["type"] != "")
					{
						if(!in_array($_FILES["foto"]["type"], $tipo))
						{
							echo "<script>alert('Tipo de Imagem inválido')</script>";
							$erro = true;
						}
						else
						{
							move_uploaded_file($_FILES["foto"]["tmp_name"], $caminhoImagemAluno);
						}
					}
				}
				else{
					$caminhoImagemAluno = $retGaleriaFotos[0] -> imagem;
				}
				
				$galeria = new GaleriaFotos($_GET["idGaleria"], $caminhoImagemAluno, $_POST["descricaoImagem"],$_POST["dataEvento"],$_POST["dataPostagem"]);
				$usuarioDAO = new usuarioDAO();
				$usuarioDAO->alterarGaleria($galeria);

				echo "<script>alert('Galeria atualizada com sucesso!')</script>";
				echo '<script>window.location.href = "index.php?controle=controleUsuario&metodo=inserriGaleria";</script>';
			}

			
			require_once "visao/inserirFotosGaleria.php";
		}


		function inserirAtividades(){
			if($_POST)
			{
				require_once "modelo/atividade.class.php";
				require_once "modelo/conexao.class.php";
				require_once "modelo/usuarioDAO.class.php";
				$atividade = new Atividades(null, $_POST["atividade"],$_POST["nomeProfessor"],$_POST["diaSemana"],$_POST["horarioAtividade"], $_POST["descritioAtividade"]);
				
				$usuarioDAO = new usuarioDAO();
				$usuarioDAO->inserirAtividade($atividade);

				echo "<script>alert('Atividade inserida com sucesso!')</script>";
				echo '<script>window.location.href = "index.php?controle=controleUsuario&metodo=inserirAtividades";</script>';
			}
			require_once "visao/insereAtividades.php";
		}


		function sair()
		{
			$_SESSION = array();
			session_destroy();
			header("Location:index.php");
		}
	}
?>