<?php

Class Aluno 
{
    private $id;
    private $name;
    private $password;

    public function __construct($myName, $myPass) 
    {
        $this->name = $myName;
        $this->password = $myPass;
        $nf = [];
        for ($c = 0; $c <= 4; $c += 1) {
            $n = round(rand(0, 9));
            $nf[] = $n;
        }
        $nf = implode("", $nf);
        $this->id = $nf;
    }

    public function getId() 
    {
        return $this->id;
    }

    public function getName() 
    {
        return $this->name;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setName($newName)
    {
        $this->name = $newName;
    }

}
