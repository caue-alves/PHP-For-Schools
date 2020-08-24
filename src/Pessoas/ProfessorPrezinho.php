<?php

require_once "Professor.php";

Class ProfessorPre extends Professor
{
    public $Bonificacao;

    public function __construct($Name, $pass)
    {
        parent::__construct($Name, $pass);
        $this->Bonificacao = 500;
        $this->salario = parent::getSalario() + $this->Bonificacao;
    }

    public function getBonificaco()
    {
        return $this->Bonificacao;
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