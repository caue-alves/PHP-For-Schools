<?php

require_once "../../../infra/id.php";

abstract Class Pessoa 
{
    protected $id;
    protected $nome;
    protected $senha;

    public function __construct($TheName, $ThePass) 
    {
        $this->nome = $TheName;
        $this->senha = $ThePass;
        $this->id = id::getTheId();
    }

    public function getNome() 
    {
        return $this->nome;
    }

    public function getId() 
    {
        return $this->id;   
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