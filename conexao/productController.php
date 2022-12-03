<?php
class ProductController  {
    private $db;
    public function __construct($db){
        $this->db = $db;
    }
    public function user() {
        $user = $_POST["usuario"];
        $stmt = $this->db->prepare("INSERT INTO USUARIO (USER, EMAIL, PASSWORD) VALUES(?, ?, ?)");
        $stmt->bindParam(1, $user["user"]);
        $stmt->bindParam(2, $user["email"]);
        $hash = hash("md5", $user["password"]);
        $stmt->bindParam(3, $hash);
        $stmt->execute();
    }

    public function update() {
        $user = $_POST["usuario"];
        $stmt = $this->db->prepare("UPDATE USUARIO SET USER = ?, EMAIL = ? WHERE ID = ?)");
        $stmt->bindParam(1, $user["user"]);
        $stmt->bindParam(2, $user["email"]);
        $stmt->bindParam(3, $user["id"]);
        $stmt->execute();
    }

    public function index() {
        $stmt = $this->db->prepare("SELECT * FROM USUARIO");
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $json = json_encode($results);
        return $json;
    }

    public function listar() {
        $id = $_POST["id"];
        $stmt = $this->db->prepare("SELECT * FROM USUARIO WHERE USER = ?");
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $json = json_encode($results);
        return $json;
    }

    public function delete() {
        $id = $_POST["id"];
        $stmt = $this->db->prepare("DELETE USUARIO WHERE ID = ?");
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $json = json_encode($results);
        return $json;
    }
}