<?php

Class Nota
{
    private int $nota;
    private string $idAluno;

    public function __construct(int $myNota, string $myAluno)
    {
        $this->nota = $myNota;
        $this->idAluno = $myAluno;
    }

    public function getAluno() 
    {
        return $this->idAluno;
    }

    public function getNota() 
    {
        return $this->nota;
    }
}