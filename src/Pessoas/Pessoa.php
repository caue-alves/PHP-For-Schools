<?php

require_once "../../infra/id.php";

abstract Class Pessoa 
{
    protected $id;
    protected $nome;
    protected $senha;

    public function __construct($TheName, $ThePass) 
    {
        $this->nome = $TheName;
        $this->senha = $ThePass;
        $nf = [];
        for ($c = 0; $c <= 4; $c += 1) {
            $n = round(rand(0, 9));
            $nf[] = $n;
        }
        $nf = implode("", $nf);
        $this->id = new Id($nf);
    }

    public function getNome() 
    {
        return $this->nome;
    }

    public function getId() 
    {
        return $this->id->getTheId();    
    }

    public function getSenha() 
    {
        return $this->senha;
    }

    public function setName($newName)
    {
        $this->name = $newName;
    }
}