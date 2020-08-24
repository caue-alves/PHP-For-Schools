<?php

Class id 
{
    private $id;

    public function __construct($theId)
    {
        $this->id = $theId;
    }

    public function getTheId()
    {
        return $this->id;
    }
}