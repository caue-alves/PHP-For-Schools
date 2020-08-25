<?php

require_once("../vendor/autoload.php");
require_once("Pessoas/Alunos/AlunoEF.php");
require_once("../infra/DataBase.php");

$aluno1 = new AlunoEF("seuzeah", "cauthiever10");

$pdo = new \PDO("sqlite:".  __DIR__ . "alunos.sqlite");
$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$studentsDB = new DataBase("alunos.sqlite", "students", $pdo);
$studentsDB->INSERT("nome, ids, senha",
                            "{$aluno1->getName()},
                            {$aluno1->getId()}, 
                            {$aluno1->getPassword()}");