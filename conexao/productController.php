<?php

class ProductController
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function user()
    {
        $user = $_POST["produtos"];
        $stmt = $this->db->prepare("INSERT INTO PRODUTOS  (USER, EMAIL, PASSWORD) VALUES(?, ?, ?)");
        $stmt->bindParam(1, $user["produto"]);
        $stmt->bindParam(2, $user["descricao"]);
        $stmt->bindParam(1, $user["preco_unitario"]);
        $stmt->bindParam(2, $user["qtd_produto"]);
        $stmt->execute();
    }

    public function update()
    {
        $user = $_POST["produtos"];
        $stmt = $this->db->prepare("UPDATE PRODUTOS SET PRODUTO = ?, DESCRICAO = ?, QTD_PRODUTO = ?, PRECO_UNITARIO = ? WHERE ID = ?)");
        $stmt->bindParam(1, $user["produto"]);
        $stmt->bindParam(2, $user["descricao"]);
        $stmt->bindParam(1, $user["preco_unitario"]);
        $stmt->bindParam(2, $user["qtd_produto"]);
        $stmt->execute();
    }

    public function index()
    {
        $stmt = $this->db->prepare("SELECT * FROM PRODUTOS");
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $json = json_encode($results);
        return $json;
    }

    public function listar()
    {
        $id = $_POST["id"];
        $stmt = $this->db->prepare("SELECT * FROM PRODUTOS WHERE ID = ?");
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $json = json_encode($results);
        return $json;
    }

    public function delete()
    {
        $id = $_POST["id"];
        $stmt = $this->db->prepare("DELETE PRODUTOS WHERE ID = ?");
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $json = json_encode($results);
        return $json;
    }
}

