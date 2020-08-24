<?php

require_once("../infra/DataBase.php");

$pathDB = __DIR__ . "/alunos.sqlite";
$pdo = new PDO("sqlite:" . $pathDB);
$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$studentsDB = new DataBase("alunos.sqlite", "students", $pdo);
$studentsDB->CREATE();