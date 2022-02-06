<?php
    class GaleriaFotos
    {
        private $idImagem;
        private $imagem;
        private $descricaoImagem;
        private $dataEvento;
        private $dataPostagem;
        private $idFuncionario;

        public function __construct($idImagem = null, $imagem = null,
            $descricaoImagem = null, $dataEvento = null, $dataPostagem = null, $idFuncionario = null)
        {   
            $this->idImagem = $idImagem;
            $this->imagem = $imagem;
            $this->descricaoImagem = $descricaoImagem;
            $this->dataEvento = $dataEvento;
            $this->dataPostagem = $dataPostagem;
            $this->idFuncionario = $idFuncionario;

        }

        public function getIdImagem()
        {
            return $this->idImagem;
        }
        public function setIdImagem($IdImagem)
        {
            $this->IdImagem = $IdImagem;
        }

        public function getImagem()
        {
            return $this->imagem;
        }
        public function setImagem($imagem)
        {
            $this->imagem = $imagem;
        }

         public function getDescricaoImagem()
        {
            return $this->descricaoImagem;
        }
        public function setDescricaoImagem($descricaoImagem)
        {
            $this->descricaoImagem = $descricaoImagem;
        }

        public function getDataEvento()
        {
            return $this->dataEvento;
        }
        public function setdataEvento($dataEvento)
        {
            $this->dataEvento = $dataEvento;
        }


        public function getDataPostagem()
        {
            return $this->dataPostagem;
        }
        public function setDataPostagem($dataPostagem)
        {
            $this->dataPostagem = $dataPostagem;
        }

        public function getIdFuncionario()
        {
            return $this->idFuncionario;
        }
       
    }
?>














