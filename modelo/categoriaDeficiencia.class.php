<?php

    private $idCategoriaD;
    private $descricaoCategoria;

    public function __construct($idCategoriaD = null, $descricaoCategoria = null)
    {
        $this->idCategoraiD = $idCategoriaD;
        $this->descricaoCategoria = $descricaoCategoria;
    }

    public function getIdCategoriaD()
    {
        return $this->idCategoriaD;
    }
    

    public function getDescricaoCategoria()
    {
        return $this->descricaoCategoria;
    }
    public function setDescricaoCategoria($descricaoCategoria)
    {
        $this->descricaoCategoria = $descricaoCategoria;
    }
?>