<?php

abstract Class Atividade 
{

    private int $Avaliação;
    private string $alunoId;

    public function __construct(int $myNota, int $myId)
    {
        $this->nota = $myNota;
        $this->id = $myId;
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