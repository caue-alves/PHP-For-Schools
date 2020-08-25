<?php

require_once "../../../src/Pessoas/Alunos/Aluno.php";
require_once "../../../src/Pessoas/Professores/Professor.php";

abstract Class Turma
{
    private $alunos;
    private $numero;

    public function __construct(Professor $professorChefe, $TheNumero)
    {
        $this->alunos = [];
        $this->numero = $TheNumero;

    } 

    public function AdicionaAluno(Aluno $aluno)
    {
        $this->alunos[] = $aluno;
    }

    public function GetNumero()
    {
        return $this->numero;
    }
}