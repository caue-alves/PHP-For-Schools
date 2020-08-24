<?php

require_once "Professor.php";

Class ProfessorEF extends Professor
{
    public $Bonificacao;

    public function __construct($myName, $myPass)
    {
        $this->Bonificacao = 1000;
        parent::__construct($myName, $myPass);
        $this->salario = parent::getSalario() + $this->Bonificacao;
    }

    public function getSalario ()
    {
        return $this->salario;
    }
}