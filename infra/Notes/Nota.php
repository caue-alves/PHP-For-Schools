<?php

require_once "Atividade.php";

Class Nota extends Atividade
{ 
    public function eAvaliativa() : bool {
        return True;
    }
}
?>