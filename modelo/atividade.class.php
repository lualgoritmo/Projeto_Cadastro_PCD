<?php

    class Atividades
    {
        private $idAtividade;
        private $nomeAtividade;
        private $nomeProfessor;
        private $diaSemana;
        private $horarioAtividade;
        private $descricaoAtividade;

        public function __construct($idAtividade = null,
            $nomeAtividade = null, $nomeProfessor = null,
            $diaSemana = null, $horarioAtividade = null, $descricaoAtividade = null)
        {
            $this->idAtividade = $idAtividade;
            $this->nomeAtividade = $nomeAtividade;
            $this->nomeProfessor = $nomeProfessor;
            $this->diaSemana = $diaSemana;
            $this->horarioAtividade = $horarioAtividade;
            $this->descricaoAtividade = $descricaoAtividade;
        }

        public function getIdAtividade()
        {
            return $this->idAtividade;
        }
        public function setIdAtividade($idAtividade)
        {
            $this->idAtividade = $idAtividade;
        }

        public function getNomeAtividade()
        {
            return $this->nomeAtividade;
        }
        public function setNomeAtividade($nomeAtividade)
        {
            $this->nomeAtividade = $nomeAtividade;
        }

        public function getNomeProfessor()
        {
            return $this->nomeProfessor;
        }
        public function setNomeProfessor($nomeProfessor)
        {
            $this->nomeProfessor = $nomeProfessor;
        }

        public function getDiaSemana()
        {
            return $this->diaSemana;
        }
        public function setDiaSemana($diaSemana)
        {
            $this->diaSemana = $diaSemana;
        }

        public function getHorarioAtividade()
        {
            return $this->horarioAtividade;
        }
        public function setHorarioAtividade($horarioAtividade)
        {
            $this->horarioAtividade = $horarioAtividade;
        }

        public function getDescricaoAtividade()
        {
            return $this->descricaoAtividade;
        }
        public function setDescricaoAtividade($descricaoAtividade)
        {
            $this->descricaoAtividade = $descricaoAtividade;
        }

    }
?>









