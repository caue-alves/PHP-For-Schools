<?php

require_once "../Pessoa.php";

abstract Class Coordenador extends Pessoa
{
    private $setor;

    public function __construct($osetor)
    {
       $this->setor = $osetor;
    }
}