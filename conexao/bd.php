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
                    PRIMARY KEY (ID));");
        } catch (PDOException $e) {
            var_dump($e);
        }

    }

    public function createTableProduct()
    {
        try {
            $this->db->exec("CREATE  TABLE IF NOT EXISTS PRODUTO (
                    ID INT NOT NULL AUTO_INCREMENT ,
                    PRODUTO VARCHAR(45) NOT NULL,
                    DESCRICAO VARCHAR(45) NOT NULL,
                    PRECO_UNITARIO VARCHAR(45) NOT NULL,
                    QTD_PRODUTO VARCHAR(45) NOT NULL,
                    PRIMARY KEY (ID));");
        } catch (PDOException $e) {
            var_dump($e);
        }
    }
}



