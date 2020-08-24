<?php

abstract Class Coordenador
{
    private $setor;

    public function __construct($osetor)
    {
       $this->setor = $osetor;
    }
}