<?php

require_once("Aluno.php");
require_once("DataBase.php");

$aluno1 = new Aluno("ZEZIN", "cauthiever10");

$pdo = new PDO("sqlite:".  __DIR__ . "alunos.sqlite");

$studentsDB = new DataBase("alunos.sqlite", "students");
$studentsDB->INSERT($pdo, ["id", "nome", "senha"], [$aluno1->getId(), $aluno1->getName(), $aluno1->getPassword()]);