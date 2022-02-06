<?php
      class usuarioDAO extends conexao
	  {
		  function __construct()
		  {
			  parent:: __construct();
		  }
		  function inserirUsuario($usuario)
		  {

			  $sql = "INSERT INTO funcionario (nome, sexo, cargo, dataAdmissao, dataNascimento, dataDemissao, numeroTelefone, email, senha, salario, logradouro, numeroResidencia, bairro, cep, cidade, estado, perfil) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
			  try
			  {
				  $f = $this->bd_amai->prepare($sql);
				  $f->bindValue(1,$usuario->getNome());
				  $f->bindValue(2,$usuario->getSexo());
				  $f->bindValue(3,$usuario->getCargo());
				  $f->bindValue(4,$usuario->getDataAdmissao());
				  $f->bindValue(5,$usuario->getDataNascimento()); 
				  $f->bindValue(6,$usuario->getDataDemissao()); 
				  $f->bindValue(7,$usuario->getNumeroTelefone()); 
				  $f->bindValue(8,$usuario->getEmail()); 
				  $f->bindValue(9,$usuario->getSenha());
				  $f->bindValue(10,$usuario->getSalario()); 
				  $f->bindValue(11,$usuario->getLogradouro()); 
				  $f->bindValue(12,$usuario->getNumeroResidencia()); 
				  $f->bindValue(13,$usuario->getBairro()); 
				  $f->bindValue(14,$usuario->getCep()); 
				  $f->bindValue(15,$usuario->getCidade()); 
				  $f->bindValue(16,$usuario->getEstado()); 
				  $f->bindValue(17,$usuario->getPerfil()); 
				  
				  $retorno = $f->execute();
				  $this->bd_amai = null;
				  if(!$retorno)
				  {
					echo  "<center> <h1>Erro ao inserir Usuário  </h1> </center>" ;
				  }
					 
			  }
			  catch(Exeption $e)
			  {
				  die($e->getMessage());
			  }
		  }

		  
		  function inserirPCD($usuario)
		  {

			  $sql = "INSERT INTO usuariopcd (nome, sexoUsuario, dataNascimento, nomeMae, nomePai, dataMatricula, numeroTelefone, email, escolaridade, logradouro, numeroResidencia, bairro, cep, cidade, estado, nomeFuncionario, tipoDeficiencia) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
			  try
			  {
				  $f = $this->bd_amai->prepare($sql);
				  $f->bindValue(1,$usuario->getnome());
				  $f->bindValue(2,$usuario->getsexoUsuario());
				  $f->bindValue(3,$usuario->getDataNascimento());
				  $f->bindValue(4,$usuario->getNomeMae()); 
				  $f->bindValue(5,$usuario->getNomePai()); 
				  $f->bindValue(6,$usuario->getDataMatricula());
				  $f->bindValue(7,$usuario->getNumeroTelefone()); 
				  $f->bindValue(8,$usuario->getEmail());
				  $f->bindValue(9,$usuario->getEscolaridade());
				  $f->bindValue(10,$usuario->getLogradouro()); 
				  $f->bindValue(11,$usuario->getNumeroNesidencia()); 
				  $f->bindValue(12,$usuario->getBairro());
				  $f->bindValue(13,$usuario->getCep()); 
				  $f->bindValue(14,$usuario->getCidade()); 
				  $f->bindValue(15,$usuario->getEstado()); 
				  $f->bindValue(16,$usuario->getIdFuncionario());
				  $f->bindValue(17,$usuario->getTipoDeficiencia());   
				  $retorno = $f->execute();


				
				  $sql = "INSERT INTO laudos_medicos (imagemLaudo, descricao, idUsuarioPCD) VALUES (?, ?, ?);";
				  try
				  {
					  $f = $this->bd_amai->prepare($sql);
					  $f->bindValue(1,$usuario->getImagemLaudo());
					  $f->bindValue(2,$usuario->getDescricaoDeficiencia());
					  $f->bindValue(3,$this->bd_amai->lastInsertId());
					  $retorno = $f->execute();
					  if(!$retorno) echo  "<center> <h1>Erro ao inserir Usuário  </h1> </center>" ;
				  }
				  catch(Exeption $e)
				  {
					  die($e->getMessage());
				  }

				  $this->bd_amai = null;
				  if(!$retorno) echo  "<center> <h1>Erro ao inserir Usuário  </h1> </center>" ;
			  }
			  catch(Exeption $e)
			  {
				  die($e->getMessage());
			  }
		  }

		  function alterarPCD($usuario, $idLaudo)
		  {
				
			  $sql = "UPDATE usuariopcd SET nome = ?, sexoUsuario = ?, dataNascimento = ?, nomeMae = ?, nomePai = ?, dataMatricula = ?, numeroTelefone = ?, email = ?, escolaridade = ?, logradouro = ?, numeroResidencia = ?, bairro = ?, cep = ?, cidade = ?, estado = ?, nomeFuncionario = ?, tipoDeficiencia = ? where idUsuarioPCD = ?";
			  try
			  {
				  $f = $this->bd_amai->prepare($sql);
				  $f->bindValue(1,$usuario->getnome());
				  $f->bindValue(2,$usuario->getsexoUsuario());
				  $f->bindValue(3,$usuario->getDataNascimento());
				  $f->bindValue(4,$usuario->getNomeMae()); 
				  $f->bindValue(5,$usuario->getNomePai()); 
				  $f->bindValue(6,$usuario->getDataMatricula());
				  $f->bindValue(7,$usuario->getNumeroTelefone()); 
				  $f->bindValue(8,$usuario->getEmail());
				  $f->bindValue(9,$usuario->getEscolaridade());
				  $f->bindValue(10,$usuario->getLogradouro()); 
				  $f->bindValue(11,$usuario->getNumeroNesidencia()); 
				  $f->bindValue(12,$usuario->getBairro());
				  $f->bindValue(13,$usuario->getCep()); 
				  $f->bindValue(14,$usuario->getCidade()); 
				  $f->bindValue(15,$usuario->getEstado()); 
				  $f->bindValue(16,$usuario->getIdFuncionario());
				  $f->bindValue(17,$usuario->getTipoDeficiencia());
				  $f->bindValue(18,$usuario->getIdUsuarioPcd());
				  $retorno = $f->execute();


				
				  $sql = "UPDATE laudos_medicos SET imagemLaudo = ?, descricao = ? WHERE idLaudoMedico = ? ;";
				  try
				  {
					  $f = $this->bd_amai->prepare($sql);
					  $f->bindValue(1,$usuario->getImagemLaudo());
					  $f->bindValue(2,$usuario->getDescricaoDeficiencia());
					  $f->bindValue(3,$idLaudo);
					  $retorno = $f->execute();
					  if(!$retorno) echo  "<center> <h1>Erro ao inserir Usuário  </h1> </center>" ;
				  }
				  catch(Exeption $e)
				  {
					  die($e->getMessage());
				  }

				  $this->bd_amai = null;
				  if(!$retorno) echo  "<center> <h1>Erro ao inserir Usuário  </h1> </center>" ;
			  }
			  catch(Exeption $e)
			  {
				  die($e->getMessage());
			  }
		  }


		  function inserirGaleria($galeria)
		  {

			  $sql = "INSERT INTO galeria_fotos (imagem, descricao, dataEvento, dataPostada, idFuncionario) VALUES (?, ?, ?, ?, ?);";
			  try
			  {
				  $f = $this->bd_amai->prepare($sql);
				  $f->bindValue(1,$galeria->getImagem());
				  $f->bindValue(2,$galeria->getDescricaoImagem());
				  $f->bindValue(3,$galeria->getDataEvento());
				  $f->bindValue(4,$galeria->getDataPostagem());
				  $f->bindValue(5,$galeria->getIdFuncionario());
				  
				  $retorno = $f->execute();
				  $this->bd_amai = null;
				  if(!$retorno)
					  echo  "<center> <h1>Erro ao inserir Usuário  </h1> </center>" ;
			  }
			  catch(Exeption $e)
			  {
				  die($e->getMessage());
			  }
		  }

		  function alterarGaleria($galeria)
		  {

			  $sql = "UPDATE galeria_fotos SET imagem = ?, descricao = ?, dataEvento = ?, dataPostada = ? WHERE idgaleriafoto = ?;";
			  try
			  {
				  $f = $this->bd_amai->prepare($sql);
				  $f->bindValue(1,$galeria->getImagem());
				  $f->bindValue(2,$galeria->getDescricaoImagem());
				  $f->bindValue(3,$galeria->getDataEvento());
				  $f->bindValue(4,$galeria->getDataPostagem());
				  $f->bindValue(5,$galeria->getIdImagem());
				  
				  $retorno = $f->execute();
				  $this->bd_amai = null;
				  if(!$retorno)
					  echo  "<center> <h1>Erro ao inserir Usuário  </h1> </center>" ;
			  }
			  catch(Exeption $e)
			  {
				  die($e->getMessage());
			  }
		  }

		  function inserirAtividade($atividade)
		  {

			  $sql = "INSERT INTO atividades (nomeatividade, diaDaSemana, horarioatividade, descricao, nomeProfessor) VALUES (?, ?, ?, ?, ?);";
			  try
			  {
				  $f = $this->bd_amai->prepare($sql);
				  $f->bindValue(1,$atividade->getNomeAtividade());
				  $f->bindValue(2,$atividade->getDiaSemana());
				  $f->bindValue(3,$atividade->getHorarioAtividade());
				  $f->bindValue(4,$atividade->getDescricaoAtividade());
				  $f->bindValue(5,$atividade->getNomeProfessor());
				  
				  $retorno = $f->execute();
				  $this->bd_amai = null;
				  if(!$retorno)
					  echo  "<center> <h1>Erro ao inserir Usuário  </h1> </center>" ;
			  }
			  catch(Exeption $e)
			  {
				  die($e->getMessage());
			  }
		  }

		  function buscarAtividadePorId($atividade)
		  {
			  $sql = "SELECT * FROM atividades where idatividade = ?";
			  try
			  {
				  $f = $this->bd_amai->prepare($sql);
				  $f->bindValue(1,$atividade->getIdAtividade());				  
				  $retorno = $f->execute();
				  $this->bd_amai = null;
				  if(!$retorno)
					echo "Erro ao buscar funcionario";
					else
					{
						$resultado = $f->fetchAll(PDO::FETCH_OBJ);
						return $resultado;
					}
			  }
			  catch(Exeption $e)
			  {
				  die($e->getMessage());
			  }
		  }


		  function editarAtividade($atividade)
		  {

			  $sql = "UPDATE atividades SET nomeatividade = ?, diaDaSemana = ?, horarioatividade = ?, descricao = ?, nomeProfessor = ? where idatividade = ?;";
			  try
			  {
				  $f = $this->bd_amai->prepare($sql);
				  $f->bindValue(1,$atividade->getNomeAtividade());
				  $f->bindValue(2,$atividade->getDiaSemana());
				  $f->bindValue(3,$atividade->getHorarioAtividade());
				  $f->bindValue(4,$atividade->getDescricaoAtividade());
				  $f->bindValue(5,$atividade->getNomeProfessor());
				  $f->bindValue(6,$atividade->getIdAtividade());
				  
				  $retorno = $f->execute();
				  $this->bd_amai = null;
				  if(!$retorno)
					  echo  "<center> <h1>Erro ao inserir Usuário  </h1> </center>" ;
			  }
			  catch(Exeption $e)
			  {
				  die($e->getMessage());
			  }
		  }

		  function deletarGaleria($galeria)
		  {

			  $sql = "DELETE FROM galeria_fotos WHERE idgaleriafoto = ?";
			  try
			  {
				  $f = $this->bd_amai->prepare($sql);
				  $f->bindValue(1,$galeria->getIdImagem());
				  
				  $retorno = $f->execute();
				  $this->bd_amai = null;
				  if(!$retorno)
					  echo  "<center> <h1>Erro ao inserir Usuário  </h1> </center>" ;
			  }
			  catch(Exeption $e)
			  {
				  die($e->getMessage());
			  }
		  }


		  function deletarAtividade($atividade)
		  {

			  $sql = "DELETE FROM atividades where idatividade = ?;";
			  try
			  {
				  $f = $this->bd_amai->prepare($sql);
				  $f->bindValue(1,$atividade->getIdAtividade());
				  
				  $retorno = $f->execute();
				  $this->bd_amai = null;
				  if(!$retorno)
					  echo  "<center> <h1>Erro ao inserir Usuário  </h1> </center>" ;
			  }
			  catch(Exeption $e)
			  {
				  die($e->getMessage());
			  }
		  }

		  function atualizarUsuario($usuario)
		  {
			$sql = "UPDATE funcionario SET nome = ?, sexo = ?, cargo = ?, dataAdmissao = ?, dataNascimento = ?, dataDemissao = ?, numeroTelefone = ?, email = ?, senha = ?, salario = ?, logradouro = ?, numeroResidencia = ?, bairro = ?, cep = ?, cidade = ?, estado = ?, perfil = ? WHERE idfuncionario = ?;";
			try
			{
				$f = $this->bd_amai->prepare($sql);
				$f->bindValue(1,$usuario->getNome());
				$f->bindValue(2,$usuario->getSexo());
				$f->bindValue(3,$usuario->getCargo());
				$f->bindValue(4,$usuario->getDataAdmissao());
				$f->bindValue(5,$usuario->getDataNascimento()); 
				$f->bindValue(6,$usuario->getDataDemissao()); 
				$f->bindValue(7,$usuario->getNumeroTelefone()); 
				$f->bindValue(8,$usuario->getEmail()); 
				$f->bindValue(9,$usuario->getSenha());
				$f->bindValue(10,$usuario->getSalario()); 
				$f->bindValue(11,$usuario->getLogradouro()); 
				$f->bindValue(12,$usuario->getNumeroResidencia()); 
				$f->bindValue(13,$usuario->getBairro()); 
				$f->bindValue(14,$usuario->getCep()); 
				$f->bindValue(15,$usuario->getCidade()); 
				$f->bindValue(16,$usuario->getEstado()); 
				$f->bindValue(17,$usuario->getPerfil()); 
				$f->bindValue(18,$usuario->getIdUsuario()); 
				  
				  $retorno = $f->execute();
				  $this->bd_amai = null;
				  if(!$retorno)
					  echo  "<center> <h1>Erro ao atualizar funcionário  </h1> </center>" ;
			  }
			  catch(Exeption $e)
			  {
				  die($e->getMessage());
			  }
		  }


		function autenticar($usuario)
		{
			$sql = "SELECT * FROM funcionario WHERE email = ? AND senha = ?";
			try
			{
				$f = $this->bd_amai->prepare($sql);				
				$f->bindValue(1, $usuario -> getEmail());
				$f->bindValue(2, $usuario -> getSenha());
				$retorno = $f->execute();
				$this->bd_amai = null;
				if(!$retorno)
					echo "Erro ao buscar funcionario";
				else
				{
					$resultado = $f->fetchAll(PDO::FETCH_OBJ);
					return $resultado;
				}
			}
			catch (Exception $e )
			{
				die ($e->getMessage());
			}
		}

		function verificarFuncionarioAtividades($usuario)
		{
			$sql = "SELECT * FROM atividades_funcionarios WHERE idfuncionario = ?";
			try
			{
				$f = $this->bd_amai->prepare($sql);				
				$f->bindValue(1, $usuario -> getIdUsuario());
				$retorno = $f->execute();
				$this->bd_amai = null;
				if(!$retorno)
					echo "Erro ao buscar funcionario";
				else
				{
					$resultado = $f->fetchAll(PDO::FETCH_OBJ);
					return $resultado;
				}
			}
			catch (Exception $e )
			{
				die ($e->getMessage());
			}
		}

		function deletarFuncionario($usuario)
		{
			$sql = "DELETE FROM funcionario WHERE idfuncionario = ?";
			try
			{
				$f = $this->bd_amai->prepare($sql);				
				$f->bindValue(1, $usuario -> getIdUsuario());
				$retorno = $f->execute();
				$this->bd_amai = null;
				if(!$retorno)
					echo "Erro ao buscar funcionario";
				else
				{
					$resultado = $f->fetchAll(PDO::FETCH_OBJ);
					return $resultado;
				}
			}
			catch (Exception $e )
			{
				die ($e->getMessage());
			}
		}

		function deletarPcd($usuario)
		{
			$sql = "DELETE FROM laudos_medicos WHERE idUsuarioPCD = ?";
			try
			{
				$f = $this->bd_amai->prepare($sql);				
				$f->bindValue(1, $usuario -> getidUsuarioPcd());
				$retorno = $f->execute();
				if(!$retorno)
					echo "Erro ao buscar funcionario";
				else
				{
					$sql = "DELETE FROM usuariopcd WHERE idUsuarioPCD = ?";
					try
					{
						$f = $this->bd_amai->prepare($sql);				
						$f->bindValue(1, $usuario -> getidUsuarioPcd());
						$retorno = $f->execute();
						if(!$retorno)
							echo "Erro ao buscar funcionario";
						else
						{
							$resultado = $f->fetchAll(PDO::FETCH_OBJ);
							return $resultado;
						}
					}
					catch (Exception $e )
					{
						die ($e->getMessage());
					}
						}
					}
					catch (Exception $e )
					{
						die ($e->getMessage());
					}
		}

		function buscarUsuarioPorId($usuario)
		{
			$sql = "SELECT * FROM funcionario WHERE idfuncionario = ?";
			try
			{
				$f = $this->bd_amai->prepare($sql);				
				$f->bindValue(1, $usuario -> getIdusuario());
				$retorno = $f->execute();
				$this->bd_amai = null;
				if(!$retorno)
					echo "Erro ao buscar funcionario";
				else
				{
					$resultado = $f->fetchAll(PDO::FETCH_OBJ);
					return $resultado;
				}
			}
			catch (Exception $e )
			{
				die ($e->getMessage());
			}
		}

		function buscarGaleriaPorId($galeria)
		{
			$sql = "SELECT * FROM galeria_fotos WHERE idgaleriafoto = ?";
			try
			{
				$f = $this->bd_amai->prepare($sql);				
				$f->bindValue(1, $galeria -> getIdImagem());
				$retorno = $f->execute();
				$this->bd_amai = null;
				if(!$retorno)
					echo "Erro ao buscar funcionario";
				else
				{
					$resultado = $f->fetchAll(PDO::FETCH_OBJ);
					return $resultado;
				}
			}
			catch (Exception $e )
			{
				die ($e->getMessage());
			}
		}

		function buscarPcdPorId($pcd)
		{
			$sql = "SELECT * FROM usuariopcd
			 INNER JOIN laudos_medicos WHERE usuariopcd.idUsuarioPCD = ?";
			try
			{
				$f = $this->bd_amai->prepare($sql);				
				$f->bindValue(1, $pcd -> getidUsuarioPcd());
				$retorno = $f->execute();
				$this->bd_amai = null;
				if(!$retorno)
					echo "Erro ao buscar funcionario";
				else
				{
					$resultado = $f->fetchAll(PDO::FETCH_OBJ);
					return $resultado;
				}
			}
			catch (Exception $e )
			{
				die ($e->getMessage());
			}
		}
		
		function buscarTodosUsuarios()
		{
			$sql = "SELECT * FROM funcionario";
			try
			{
				$f = $this->bd_amai->prepare($sql);
				$retorno = $f->execute();
				$this->bd_amai = null;
				if(!$retorno)
					echo "Erro ao Buscar Todos os Funcionarios";
				else
				{
					$resultado = $f->fetchAll(PDO::FETCH_OBJ);
					return $resultado;
				}
			}
			catch ( Exception $e )
			{
				die ($e->getMessage());
			}
		}

		function buscarTodasAtividade()
		{
			$sql = "SELECT * FROM atividades";
			try
			{
				$f = $this->bd_amai->prepare($sql);
				$retorno = $f->execute();
				$this->bd_amai = null;
				if(!$retorno)
					echo "Erro ao Buscar Todos os Funcionarios";
				else
				{
					$resultado = $f->fetchAll(PDO::FETCH_OBJ);
					return $resultado;
				}
			}
			catch ( Exception $e )
			{
				die ($e->getMessage());
			}
		}

		function buscarTodasGalerias()
		{
			$sql = "SELECT * FROM galeria_fotos";
			try
			{
				$f = $this->bd_amai->prepare($sql);
				$retorno = $f->execute();
				$this->bd_amai = null;
				if(!$retorno)
					echo "Erro ao Buscar Todos os Funcionarios";
				else
				{
					$resultado = $f->fetchAll(PDO::FETCH_OBJ);
					return $resultado;
				}
			}
			catch ( Exception $e )
			{
				die ($e->getMessage());
			}
		}

		function buscarTodosPcds()
		{
			$sql = "SELECT * FROM USUARIOPCD";
			try
			{
				$f = $this->bd_amai->prepare($sql);
				$retorno = $f->execute();
				$this->bd_amai = null;
				if(!$retorno)
					echo "Erro ao Buscar Todos os PCDS";
				else
				{
					$resultado = $f->fetchAll(PDO::FETCH_OBJ);
					return $resultado;
				}
			}
			catch ( Exception $e )
			{
				die ($e->getMessage());
			}
		}
		function buscarUm($usuario)
		{
			$sql = "SELECT nome FROM usuario WHERE idusuario = ?";
			try
			{
				$f = $this->bd_amai->prepare($sql);
				$f->bindValue(1, $usuario->getNome());
				$retorno = $f->execute();
				$this->bd_amai = null;
				if(!$retorno)
					echo "Erro ao Buscar um Usuários";
				else
				{
					$resultado = $f->fetchAll(PDO::FETCH_NUM);
					return $resultado;
				}
			}
			catch ( Exception $e )
			{
				die ($e->getMessage());
			}
		}
		function esqueceuSenha($usuario)
		{
			
			$sql = "SELECT nome, senha FROM usuario WHERE email = ?";
			try
			{
				$f = $this->bd_amai->prepare($sql);
				$f->bindValue(1, $usuario->getEmail());
				$retorno = $f->execute();
				$this->bd_amai = null;
				if(!$retorno)
					echo "Erro ao Buscar um Usuários";
				else
				{
					$resultado = $f->fetchAll(PDO::FETCH_OBJ);
					return $resultado;
				}
			}
			catch ( Exception $e )
			{
				die ($e->getMessage());
			}
		}
	  }
?>