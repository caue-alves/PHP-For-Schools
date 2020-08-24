<?php

Class id 
{
    private $id;

    public static function getTheId()
    {       
        $nf = [];
        for ($c = 0; $c <= 4; $c += 1) {
            $n = round(rand(0, 9));
            $nf[] = $n;
        }
        $nf = implode("", $nf);
        $id = $nf;
        return $id;
    }
}