<?php
class MigrationDatabase
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function createTableUser()
    {
        try {
            $this->db->exec("CREATE  TABLE IF NOT EXISTS USUARIO (
                    ID INT NOT NULL AUTO_INCREMENT ,
                    USER VARCHAR(45) NOT NULL,
                    EMAIL VARCHAR(45) NOT NULL,
                    PASSWORD VARCHAR(45) NOT NULL,
                    PRIMARY KEY (UUID));");
        } catch (PDOException $e) {
            var_dump($e);
        }
    }
}

