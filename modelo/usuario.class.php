<?php
	class usuario
	{
		private $idusuario;
		private $nome;
		private $sexo;
		private $cargo;
		private $salario;
		private $dataDemissao;
		private $dataAdmissao;
		private $dataNascimento;
		private $email;
		private $senha;
		private $logradouro;
       	private $numeroResidencia;
        private $bairro;
     	private $cep;
       	private $cidade;
       	private $estado;
		private $numeroTelefone;
		private $perfil;
		
		function __construct($idusuario = null, $nome = null, $sexo = null, $cargo = null, $dataAdmissao = null, $dataNascimento = null, $dataDemissao = null, $numeroTelefone = null, $email = null, $senha = null, $salario = null, $logradouro = null, $numeroResidencia = null, $bairro = null, $cep = null, $cidade = null, $estado = null,
		 $perfil = null)
		{
			$this -> idusuario = $idusuario;
			$this -> nome = $nome;
			$this -> sexo = $sexo;
			$this -> cargo = $cargo;
			$this -> salario = $salario;
			$this -> dataDemissao = $dataDemissao;
			$this -> dataAdmissao = $dataAdmissao;
			$this -> email = $email;
			$this -> senha = $senha;
			$this->logradouro = $logradouro;
            $this->numeroResidencia = $numeroResidencia;
            $this->bairro = $bairro;
            $this->cep = $cep;
            $this->cidade = $cidade;
            $this->estado = $estado;
			$this->numeroTelefone = $numeroTelefone;
			$this->perfil = $perfil;
			$this->dataNascimento = $dataNascimento;
		}
		
		//Fun��es Get�s
		function getIdusuario()
		{
			return $this->idusuario;
		}		
		function getNome()
		{
			return $this->nome;
		}
		function getDataNascimento()
		{
			return $this->dataNascimento;
		}
		function getSexo()
		{
			return $this->sexo;
		}
		function getCargo()
		{
			return $this->cargo;
		}
		function getSalario()
		{
			return $this->salario;
		}
		function getDataDemissao()
		{
			return $this->dataDemissao;
		}
		function getDataAdmissao()
		{
			return $this->dataAdmissao;
		}
		function getEmail()
		{
			return $this->email;
		}
		function getSenha()
		{
			return $this->senha;
		}

		public function getLogradouro()
        {
            return $this->logradouro;
        }
        public function setLogradouro($logradouro)
        {
            $this->logradouro = $logradouro;
        }

        public function getNumeroResidencia()
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

		public function getPerfil()
        {
            return $this->perfil;
        }
		
	}//classe
?>