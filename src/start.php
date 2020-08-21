<?php

require_once("DataBase.php");

$pdo = new PDO("sqlite:alunos.sqlite");

$studentsDB = new DataBase("alunos.sqlite", "students");
$studentsDB->CREATE($pdo, ["id", "nome", "senha"]);