<?php

require_once "Pessoa.php";
require_once "../../infra/Notes/Nota.php";

Class Aluno extends Pessoa
{
    private array $notas = [];

    public function __construct($myName, $myPass) 
    {
        parent::__construct($myName, $myPass);
    }

    public function getId()
    {
        return parent::getId();
    }

    public function getName()
    {
        return parent::getNome();
    }

    public function getPassword()
    {
        return parent::getSenha();
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
}