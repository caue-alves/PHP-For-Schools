<?php

require_once "Aluno.php";
require_once "../../../infra/Notes/AtividadeAvaliativa.php";
require_once "../Pessoa.php";

Class AlunoPre extends Pessoa
{
    private array $atividades = [];

    public function AdicionaNota(int $nota)
    {
        $notaClasse = new AtividadeAvaliativa($nota, $this->getId());
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
        return $media / sizeof($this->atividades);
    }
}

$E = new AlunoPre('a', 'a');
$E->AdicionaNota(10);
$E->GetNotas();

