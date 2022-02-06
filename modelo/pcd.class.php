<?php
	class pcd
	{
		private $idUsuarioPcd;
		private $nome;
		private $sexoUsuario;
		private $dataNascimento;
		private $nomeMae;
		private $nomePai;
		private $escolaridade;
		private $dataMatricula;
		private $email;
		private $logradouro;
        private $numeroResidencia;
        private $bairro;
        private $cep;
        private $cidade;
        private $estado;
		private $numeroTelefone;
        private $imagemLaudo;
        private $idFuncionario;
        private $tipoDeficiencia;
        private $descricaoDeficiencia;

		function __construct($idUsuarioPcd = null, $nome = null, $sexoUsuario = null, $dataNascimento = null, $nomeMae = null, $nomePai=null, $escolaridade = null, 
			$dataMatricula = null, $email = null, $logradouro = null,
            $numeroResidencia = null, $bairro = null,$cep = null, $cidade = null,
            $estado = null, $numeroTelefone = null, $imagemLaudo = null , $idFuncionario = null, $tipoDeficiencia = null, $descricaoDeficiencia = null)
		{
			$this -> idUsuarioPcd =  $idUsuarioPcd;
			$this -> nome =  $nome;
			$this -> sexoUsuario =  $sexoUsuario;
			$this -> dataNascimento =  $dataNascimento;
			$this -> nomeMae =  $nomeMae;
			$this -> nomePai =  $nomePai;
			$this -> escolaridade =  $escolaridade;
			$this -> dataMatricula =  $dataMatricula;
			$this -> email =  $email;
            $this->logradouro = $logradouro;
            $this->numeroResidencia = $numeroResidencia;
            $this->bairro = $bairro;
            $this->cep = $cep;
            $this->cidade = $cidade;
            $this->estado = $estado;
			$this->numeroTelefone = $numeroTelefone;
            $this->imagemLaudo = $imagemLaudo;
            $this->idFuncionario = $idFuncionario;
            $this->tipoDeficiencia = $tipoDeficiencia;
            $this->descricaoDeficiencia = $descricaoDeficiencia;
		}
		
		function getidUsuarioPcd()
		{
			return $this->idUsuarioPcd;
		}
	
		function getnome()
		{
			return $this->nome;
		}
		function getsexoUsuario()
		{
			return $this->sexoUsuario;
		}
		function getDataNascimento()
		{
			return $this->dataNascimento;
		}
		function getNomeMae()
		{
			return $this->nomeMae;
		}
		function getNomePai()
		{
			return $this->nomePai;
		}
		function getEscolaridade()
		{
			return $this->escolaridade;
		}
		function getDataMatricula()
		{
			return $this->dataMatricula;
		}
		function getEmail()
		{
			return $this->email;
		}

		public function getLogradouro()
        {
            return $this->logradouro;
        }
        public function setLogradouro($logradouro)
        {
            $this->logradouro = $logradouro;
        }

        public function getNumeroNesidencia()
        {
            return $this->numeroResidencia;
        }
        public function setNumeroResidencia($numeroResidencia)
        {
            $this->numeroResidencia = $numeroResidencia;
        }


        public function getBairro()
        {
            return $this->bairro;
        }
        public function setBairro($bairro)
        {
            $this->bairro = $bairro;
        }

        public function getCep()
        {
            return $this->cep;
        }
        public function setCep($cep)
        {
            $this->cep = $cep;
        }

        public function getCidade()
        {
            return $this->cidade;
        }
        public function setCidade($cidade)
        {
            $this->cidade = $cidade;
        }

        public function getEstado()
        {
            return $this->estado;
        }
        public function setEstado($estado)
        {
            $this->estado = $estado;
        }

		public function getNumeroTelefone()
        {
            return $this->numeroTelefone;
        }
        public function setNumeroTelefone($numeroTelefone)
        {
            $this->numeroTelefone = $numeroTelefone;
        }

        public function getImagemLaudo()
        {
            return $this->imagemLaudo;
        }
        public function setImagemLaudo($imagemLaudo)
        {
            $this->imagemLaudo = $imagemLaudo;
        }
        
		public function getIdFuncionario()
        {
            return $this->idFuncionario;
        }

        public function getTipoDeficiencia()
        {
            return $this->tipoDeficiencia;
        }

        public function getDescricaoDeficiencia()
        {
            return $this->descricaoDeficiencia;
        }
	}
?>