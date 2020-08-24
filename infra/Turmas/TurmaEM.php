<?php

require_once "Turma.php";

Class TurmaEM extends Turma
{
    public function getNota()
    {
        foreach($alunos as $aluno)
        {
            echo "{$aluno->getNome()}, {$aluno->getNotas()}";
        }
    }

}