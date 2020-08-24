<?php

require_once "Coordenador.php";

Class Diretor extends Coordenador
{
    private $lista_professores;

    public function __construct($osetor)
    {
       parent::__construct($osetor);
       $this->lista_professores = [];
    }
}