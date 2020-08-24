<?php

require_once "Pessoa.php";

abstract Class Professor extends Pessoa
{
    private int $salario;

    public function __construct($myPass, $myNome)
    {
        parent::__construct($myNome, $myPass);
        $this->salario = 2000;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function getNome() 
    {
        return parent::getNome();
    }

    public function getId() 
    {
        return parent::getId();    
    }

    public function getSenha() 
    {
        return parent::getSenha();
    }

    public function setName($newName)
    {
        parent::setName($newName);
    }
}