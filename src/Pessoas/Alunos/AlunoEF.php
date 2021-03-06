<?php

require_once "Aluno.php";
require_once "../../../infra/Notes/Nota.php";
require_once "../Pessoa.php";

Class AlunoEF extends Pessoa
{
    private array $notas = [];

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
}
