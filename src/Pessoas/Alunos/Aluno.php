<?php

require_once "../../../infra/Notes/Nota.php";
require_once "../../../infra/Turmas/Turma.php";
require_once "../Pessoa.php";

abstract Class Aluno extends Pessoa
{
    private array $notas = [];
    private Turma $turma;

    public function __construct($myName, $myPass, $theTurma)
    {
        parent::__construct($myName, $myPass);
        $this->turma = $theTurma;

    }
    public function AdicionaNota(int $nota)
    {
        $notaClasse = new Nota($nota, $this->getId());
        $this->notas[] = $notaClasse;
    }

    public function GetNotas()
    {
        foreach ($this->notas as $nota) {
            echo $nota->GetNota() . PHP_EOL;
        }
    }

    public function GetMedia()
    {
        $media = 0;
        foreach ($this->notas as $nota) {
            $media += $nota->GetNota();
        }
        return $media / sizeof($this->notas);
    }

    public function GetTurma()
    {
        return $this->turma->GetNumero();
    }
}