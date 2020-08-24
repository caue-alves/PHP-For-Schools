<?php

require_once "Professor.php";

Class ProfessorPre extends Professor
{
    public $Bonificacao;

    public function __construct($Name, $pass)
    {
        parent::__construct($Name, $pass);
        $this->Bonificacao = 500;
        $this->salario = parent::getSalario() + $this->Bonificacao;
    }

    public function getSalario() {
        return $this->salario;
    }
}

$E = new ProfessorPre("oi", "sla");
echo $E->getNome();