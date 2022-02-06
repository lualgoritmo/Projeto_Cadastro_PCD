<?php
	class controlePrincipal{
		
		function home(){
			require_once "visao/menu.php";
			require_once "modelo/conexao.class.php";
			require_once "modelo/imoveisDAO.class.php";
			$imoveis = new imoveisDAO();
			//if($_GET)
			//{
			//	$busca = $_GET["busca"];
			//	$ret = $imoveiss -> buscarimoveiss($busca);
			//}
			//else
			//{	
				$ret = $imoveiss -> buscarTodosAtivos();
			//}
			
			if($_POST)
			{
				header("Location: index.php?controle=controleImoveis&metodo=atualizarCarrinho&con=adicionar&idimoveis={$_POST['idimoveis']}&nomeimoveis={$_POST['nomeimoveis']}&precoimoveis={$_POST['precoimoveis']}&quantidade={$_POST['quantidade']}&cor={$_POST['cor']}&descontoimoveis={$_POST['descontoimoveis']}&tamanhoimoveis={$_POST['tamanhoimoveis']}&imagemimoveis={$_POST['imagensimoveis']}");
			}
			
			require_once "visao/home.php";
		}
		
		function login()
		{
		require_once "modelo/conexao.class.php";
		    require_once "modelo/usuario.class.php";
		     require_once "modelo/usuarioDAO.class.php";
			if($_POST){
				$usuario = new usuario(null, null, null, null,
				 null, null, null, null, $_POST["email"], $_POST["senha"]);
				$usuarioDAO = new usuarioDAO();

				$retornar = $usuarioDAO->autenticar($usuario);
				 if(count($retornar) > 0)
				{
					if($retornar[0] -> perfil != 'adm'){
						echo "<script>alert('Usuário não autorizado para fazer o login!')</script>";
					}
					else{
					 $_SESSION["usuario"]["idusuario"] = $retornar[0] -> idfuncionario;
					 $_SESSION["usuario"]["nome"] = $retornar[0] -> nome;
					 $_SESSION["usuario"]["sexo"] = $retornar[0] -> sexo;
					 $_SESSION["usuario"]["cargo"] = $retornar[0] -> cargo;
					 $_SESSION["usuario"]["salario"] = $retornar[0] -> salario;
					 $_SESSION["usuario"]["dataDemissao"] = $retornar[0] -> dataDemissao;
					 $_SESSION["usuario"]["idEndereco"] = $retornar[0] -> idEndereco;
					 $_SESSION["usuario"]["email"] = $retornar[0] -> email;
					 $_SESSION["usuario"]["senha"] = $retornar[0] -> senha;
					header("Location:index.php?controle=controleUsuario&metodo=homeAdm");
					}
				}
				else
				{
					echo "<script>alert('Usuário não encontrado')</script>";
				}
			}
			
			require_once "visao/login.php";
		}
	}
?>