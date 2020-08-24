<?php

require_once "../Pessoa.php";

abstract Class Professor extends Pessoa
{
    private int $salario;

    public function __construct($myNome, $myPass)
    {
        parent::__construct($myNome, $myPass);
        $this->salario = 2000;
    }

    public function getSalario()
    {
        return $this->salario;
    }
}