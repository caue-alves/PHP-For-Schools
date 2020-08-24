<?php

require_once "Turma.php";

class TurmaPre extends Turma
{
    public function geAvaliacao()
    {
        foreach($alunos as $aluno)
        {
            echo "{$aluno->getNome()}, {$aluno->getNotas()}";
        }
    }
}