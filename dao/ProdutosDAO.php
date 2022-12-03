<?php

    session_start();
    require('../../db/DBConnection.php');

    if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['passwrd']) == true)){
        header('location:login.php');
    }

    $logado = $_SESSION['login'];

    if(isset($_POST['submit'])) {

        Class inserirProduto{
            public function 

        }
        $instance = DBConnection::getInstance();
        $conn = $instance->getConnection();

        $name = $_POST['name'];
        $description = $_POST['description'];
        $qtd_avaliable = $_POST['qtd_avaliable'];
        $unit_price = $_POST['unit_price'];


        $sql = 'INSERT INTO PRODUTO (NOME,DESCRICAO,PRECO_UNITARIO,QUANTIDADE_ESTOQUE,CATEGORIA_ID) VALUES (?,?,?,?,?)';

        try {
            $conn->query($sql);
            echo "<script>alert('Produto Cadastrado!');</script>";
            header("location:../../index.php");
        } catch (PDOException $e) {
            echo "<script>alert('Produto não Cadastrado! Houve um erro.');</script>";
        }

    }

?>