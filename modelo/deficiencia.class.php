<?php

    class Deficiencia
    {
        private $idDeficiencia;
        private $tipoDeficiencia;
        private $descricaoDeficiencia;

        public function __construct($idDeficiencia = null,
            $tipoDeficiencia = null, $descricaoDeficiencia = null)
        {
            $this->idDeficiencia = $idDeficiencia;
            $this->tipoDeficiencia = $tipoDeficiencia;
            $this->descricaoDeficiencia = $descricaoDeficiencia;
        }

        public function getIdDeficiencia()
        {
            return $this->IdDeficiencia;
        }
        
        public function getTipoDeficiencia()
        {
            return $this->tipoDeficiencia;
        }
        public function setTipoDeficiencia($tipoDeficiencia)
        {
            $this->tipoDeficiencia = $tipoDeficiencia;
        }

        public function getDescricaoDeficiencia()
        {
            return $this->descricaoDeficiencia;
        }
        public function setDescricaoDeficiencia($descricaoDeficiencia)
        {
            $this->descricaoDeficiencia = $descricaoDeficiencia;
        }
    }
?>





