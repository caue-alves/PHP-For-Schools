<?php

require_once "DbInterface.php";

class DataBase implements DbInterface
{
    private $dbPath;
    private $tableName;
    private $PDO;

    public function __construct(string $dbp, string $tn, pdo $Client) 
    {
        $this->dbPath = $dbp;
        $this->tableName = $tn;
        $this->PDO = $Client;
    }

    public function CREATE() : void
    {
        $SQLCommand = "CREATE TABLE {$this->tableName} (id INTEGER PRIMARY KEY, nome TEXT, ids TEXT, senha TEXT);";
        echo $SQLCommand;
        $this->PDO->exec($SQLCommand);
    }

    public function INSERT(string $Labels, string $Values) : void
    {
        $COMAND = "INSERT INTO {$this->tableName}(nome, ids, senha)VALUES('1', '2', '3');";
        echo $COMAND;
        $tatement = $this->PDO->prepare($COMAND);
        $tatement->bindValue(':lbl', $Labels);
        $tatement->bindValue(':vl', $Values);
        $tatement->execute();
    }

    public function GetPath() : string {
        return $this->dbPath;
    }
    public function GetName() : string {
        return $this->tableName;
    }
    public function GetPdo() : pdo {
        return $this->PDO;
    }
}