<?php

class DataBase
{
    private $dbPath;
    private $tableName;

    public function __construct($dbp, $tn) 
    {
        $this->dbPath = $dbp;
        $this->tableName = $tn;
    }

    public function CREATE($pdoClient)
    {
        $SQLCommand = "CREATE TABLE {$this->tableName} (id INTEGER PRIMARY KEY, nome TEXT, ids TEXT, senha TEXT);";
        echo $SQLCommand;
        $pdoClient->exec($SQLCommand);
    }
    public function INSERT($pdoClient, $Labels, $Values)
    {
        $tatement = $pdoClient->prepare("INSERT INTO 
                            {$this->tableName} 
                            ({:lbl},
                             {lbld},
                             {lbt}
                            ) 
                            VALUES
                            ({:vl},
                             {:vlw},
                             {vlt}
                            );");
        $tatement->bindValue(':lbl', $Labels[0]);
        $tatement->bindValue(':lbld', $Labels[1]);
        $tatement->bindValue(':lbt', $Labels[2]);
        $tatement->bindValue(':vl', $Values[0]);
        $tatement->bindValue(':vlw', $Values[1]);
        $tatement->bindValue(':vlt', $Values[2]);
        $tatement->execute();
    }
}