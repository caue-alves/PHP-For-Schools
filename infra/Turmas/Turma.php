<?php

require_once "../../src/Pessoas/Alunos/Aluno.php";
require_once "../../src/Pessoas/Professores/Professor.php";

abstract Class Turma
{
    private $alunos;

    public function __construct(Professor $professorChefe)
    {
        $this->alunos = [];
    } 

    public function AdicionaAluno(Aluno $aluno)
    {
        $this->alunos[] = $aluno;
    }

}